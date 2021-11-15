<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Employee;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
 
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
        dd($request->all());
        $record = new Employee;

        $data = $request->except(['social_status', 'health_status', 'military_treatment', 'health_status', 'health_status', 'birth_address']);
        $record->create($data);
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
