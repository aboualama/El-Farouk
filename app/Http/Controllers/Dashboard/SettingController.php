<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $record = Setting::first();
        $pageConfigs = ['pageHeader' => false];
        return view('/app/settings/app_settings', ['pageConfigs' => $pageConfigs, 'record' => $record]);
    } 
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    { 
        $record = Setting::first(); 
        $record->update($request->all());
        if (request()->hasFile('logo'))
        {
            $image =  $request->file('logo');
            $public_path = 'uploads/image/setting';
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move($public_path , $image_name);
        }else
        {
            $image_name = $record->logo;
        }
     
        $record['logo'] = $image_name; 
        $record->save();
    }


    public function set_default_year($id)
    { 
        Year::where('default', 1)->update(['default' => 0]);
        $record = Year::find($id)->update(['default' => 1]); 
    }


    public function change_year($id)
    { 
        $record = Year::find($id);  
        return view('app.years.change_years', ['record' => $record]); 
    }
 
}
 