<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Employee;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Traits\EmployeeOtherDataTrait;

class EmployeeController extends Controller
{
    use EmployeeOtherDataTrait;

    public function index()
    { 
        $records = Employee::get();
        $pageConfigs = ['pageHeader' => false];
        return view('/app/employees/app_employees', ['records' => $records, 'pageConfigs' => $pageConfigs]); 
    }
 
    public function create()
    {
        // dd($request->all()); 
    }
 
    public function store(Request $request)
    { 
        $record = Employee::create([
            'first_name'         => $request->first_name,
            'middle_name'        => $request->middle_name,
            'last_name'          => $request->last_name,
            'family_name'        => $request->family_name,
            'national_id'        => $request->national_id,
            'birth_address'      => $request->birth_address,
            'birth_city'         => $request->birth_city,
            'birth_date'         => $request->birth_date,
            'join_date'          => $request->join_date,
            'gender'             => $request->gender,
            'health_status'      => $request->health_status,
            'social_status'      => $request->social_status,
            'military_treatment' => $request->military_treatment,
            'military_summons'   => $request->military_summons,
        ]);  
            
        $this->addPhoneNumber($request, $record->id);
    }
    
 
    public function show(Employee $employee)
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/app/employees/app-employee-view', ['pageConfigs' => $pageConfigs, 'employee' => $employee]);
    }
 
    public function edit(Employee $employee)
    { 
        $pageConfigs = ['pageHeader' => false];
        return view('/app/employees/app-employee-edit', ['pageConfigs' => $pageConfigs, 'employee' => $employee]);
    }
 
    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'first_name'         => $request->first_name,
            'middle_name'        => $request->middle_name,
            'last_name'          => $request->last_name,
            'family_name'        => $request->family_name,
            'national_id'        => $request->national_id,
            'birth_address'      => $request->birth_address,
            'birth_city'         => $request->birth_city,
            'birth_date'         => $request->birth_date,
            'join_date'          => $request->join_date,
            'gender'             => $request->gender,
            'health_status'      => $request->health_status,
            'social_status'      => $request->social_status,
            'military_treatment' => $request->military_treatment,
            'military_summons'   => $request->military_summons,
        ]);
        
        $this->addPhoneNumber($request, $employee->id);
    }
 
    public function destroy(Employee $employee)
    { 
        $employee->delete();
    }

    public function getemployees()
  {
    $data['data'] = Employee::get()->load('phones'); 
    return $data ;
  }

//   public function get_type(Request $request)
//   {
//       $types = CustodyType::where('category_id', $request->id)->get(); 
//       return $types;
//   }

 
}
