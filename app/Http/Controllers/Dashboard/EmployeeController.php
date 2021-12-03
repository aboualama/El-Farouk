<?php

namespace App\Http\Controllers\Dashboard; 
  
use App\Models\Employee; 
use App\Models\SubGroup; 
use Illuminate\Http\Request;  
use App\Http\Controllers\Controller;
use App\Traits\EmployeeAddOtherDataTrait;
use App\Traits\EmployeeEditOtherDataTrait;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    use EmployeeAddOtherDataTrait, EmployeeEditOtherDataTrait;

    public function index()
    {  
        $pageConfigs       = ['pageHeader' => false];
        return view('/app/employees/app_employees', ['pageConfigs' => $pageConfigs]); 
    }
  
 
    public function store(Request $request)
    {  
        
        $record = Employee::create([
            'first_name'            => $request->first_name,
            'middle_name'           => $request->middle_name,
            'last_name'             => $request->last_name,
            'family_name'           => $request->family_name,
            'national_id'           => $request->national_id,
            'birth_address'         => $request->birth_address,
            'birth_center'          => $request->birth_center,
            'birth_city'            => $request->birth_city,
            'birth_date'            => $request->birth_date,
            'join_date'             => $request->join_date,
            'gender_id'             => ($request->gender == 'ذكر') ? 1 : 2,
            'health_status_id'      => $request->health_status_id,
            'social_status_id'      => $request->social_status_id,
            'military_treatment_id' => $request->military_treatment_id,
            'military_summons'      => $request->military_summons,
        ]);  
            
        $this->addEmployeeData($request, $record->id); 
    }
    
 
    public function show(Employee $employee)
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/app/employees/app-employee-view', ['pageConfigs' => $pageConfigs, 'employee' => $employee]);
    }
 
    
 
    public function update(Request $request, Employee $employee)
    { 

        $employee->update([
            'first_name'            => $request->first_name,
            'middle_name'           => $request->middle_name,
            'last_name'             => $request->last_name,
            'family_name'           => $request->family_name,
            'national_id'           => $request->national_id,
            'birth_address'         => $request->birth_address,
            'birth_city'            => $request->birth_city,
            'birth_date'            => $request->birth_date,
            'join_date'             => $request->join_date,
            'gender_id'             => ($request->gender == 'ذكر') ? 1 : 2,
            'health_status_id'      => $request->health_status_id,
            'social_status_id'      => $request->social_status_id,
            'military_treatment_id' => $request->military_treatment_id,
            'military_summons'      => $request->military_summons,
        ]);
        
        // $this->editPhoneNumber($request, $employee->id);
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

    public function get_sub_group(Request $request)
    {
        $sub_group = SubGroup::where('functional_group_id', $request->id)->get(); 
        return $sub_group;
    }

    


}
