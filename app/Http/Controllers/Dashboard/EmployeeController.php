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
        $record = new Employee;

        $data = $request->except(['social_status', 'health_status', 'military_treatment', 'health_status', 'health_status']);
        $record->create($data);
       dd($request->all());
    }
 
    public function show(Employee $employee)
    {
        //
    }
 
    public function edit(Employee $employee)
    {
        //
    }
 
    public function update(Request $request, Employee $employee)
    {
        //
    }
 
    public function destroy(Employee $employee)
    {
        //
    }

    public function getemployees()
  {
    $data['data'] = Employee::all(); 
    return $data ;
  }

 
}
