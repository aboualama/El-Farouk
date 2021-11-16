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
        //
    }
 
    public function store(Request $request)
    {
        // dd($request->all()); 
  
        $record = Employee::create([
            'first_name'         => $request->get('first_name'),
            'middle_name'        => $request->get('middle_name'),
            'last_name'          => $request->get('last_name'),
            'family_name'        => $request->get('family_name'),
            'national_id'        => $request->get('national_id'),
            'birth_address'      => $request->get('birth_address'),
            'birth_city'         => $request->get('birth_city'),
            'birth_date'         => $request->get('birth_date'),
            'join_date'          => $request->get('join_date'),
            'gender'             => $request->get('gender'),
            'health_status'      => $request->get('health_status'),
            'social_status'      => $request->get('social_status'),
            'military_treatment' => $request->get('military_treatment'),
            'military_summons'   => $request->get('military_summons'),
            ]);  
            
            $id = $record->id;

            $this->addPhoneNumber($request, $id);
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
        //
    }
 
    public function destroy(Employee $employee)
    { 
        $employee->delete();
    }

    public function getemployees()
  {
    $data['data'] = Employee::all(); 
    return $data ;
  }

//   public function get_type(Request $request)
//   {
//       $types = CustodyType::where('category_id', $request->id)->get(); 
//       return $types;
//   }

 
}
