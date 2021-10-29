<?php

namespace App\Http\Controllers\Dashboard; 
 
use App\Mail\PasswordMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Validator; 
use App\Models\User; 

class UserController extends Controller
{
 

  // User List Page
  public function user_list()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/app/user/app-user-list', ['pageConfigs' => $pageConfigs]);
  }

  // User View Page
  public function user_view($id)
  {
    $user = User::find($id);
    $pageConfigs = ['pageHeader' => false];
    return view('/app/user/app-user-view', ['pageConfigs' => $pageConfigs, 'user' => $user]);
  }

  // User Edit Page
  public function user_edit($id)
  {
    $user = User::find($id);
    $pageConfigs = ['pageHeader' => false];
    return view('/app/user/app-user-edit', ['pageConfigs' => $pageConfigs, 'user' => $user]);
  }




  // get all user and show in datatable in z-customJs/user-datatables.js
  public function getusers()
  {
    $data['data'] = User::all(); 
    return $data ;
  }

 
 

  public function user_store(Request $request)
  {
      $rules = [
        'name' => 'required|string|min:3|max:260',
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => 'required|string|unique:users', 
      ];   
      $validator = Validator::make($request->all(), $rules); 
      if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors(), 'status' => 442]);
      }
 
      $pas = Str::random(8); 
      $record = User::create([
              'name'              => $request->get('name'),
              'email'             => $request->get('email'),
              'phone'             => $request->get('phone'),
              'status'            => 'غير مفعل',
              'password'          => bcrypt($pas),
              'email_verified_at' => now(),
          ]);  
  
   
      Mail::to('your_receiver_email@gmail.com')->send(new PasswordMail($pas));
  }
  

  public function user_delete($id)
  {
      $record = User::find($id);  
      $record->delete();
  }

 

}
