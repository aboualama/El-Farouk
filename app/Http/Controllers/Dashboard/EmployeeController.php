<?php

namespace App\Http\Controllers\Dashboard; 
 
use App\Models\Cader;
use App\Models\Gender;
use App\Models\Employee;
use App\Models\JobStyle;
use App\Models\SubGroup;
use App\Models\JobStatus;
use App\Models\HealthStatus;
use App\Models\SocialStatus;
use App\Models\Qualification;
use Illuminate\Http\Request; 
use App\Models\NominationType;
use App\Models\FinancialDegree;
use App\Models\FunctionalGroup;
use App\Models\MilitaryTreatment;
use App\Http\Controllers\Controller;
use App\Traits\EmployeeAddOtherDataTrait;
use App\Traits\EmployeeEditOtherDataTrait;

class EmployeeController extends Controller
{
    use EmployeeAddOtherDataTrait, EmployeeEditOtherDataTrait;

    public function index()
    { 
        $cader             = Cader::get();
        $financialDegree   = FinancialDegree::get();
        $functionalGroup   = FunctionalGroup::get();
        $gender            = Gender::get();
        $healthStatus      = HealthStatus::get();
        $jobStatus         = JobStatus::get();
        $jobStyle          = JobStyle::get();
        $militaryTreatment = MilitaryTreatment::get();
        $nominationType    = NominationType::get();
        $qualification     = Qualification::get();
        $socialStatus      = SocialStatus::get();
        $pageConfigs       = ['pageHeader' => false];
        return view('/app/employees/app_employees', [
            'cader' => $cader, 'financialDegree' => $financialDegree, 'functionalGroup' => $functionalGroup, 'gender' => $gender, 
            'healthStatus' => $healthStatus, 'jobStatus' => $jobStatus, 'militaryTreatment' => $militaryTreatment, 'nominationType' => $nominationType, 
            'qualification' => $qualification, 'socialStatus' => $socialStatus, 'jobStyle' => $jobStyle, 'pageConfigs' => $pageConfigs
        ]); 
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
            
        $this->addPhoneNumber($request, $record->id);
        $this->addResidenceAddress($request, $record->id);
        $this->addQualification($request, $record->id);
        $this->addJobHistory($request, $record->id);
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
            'first_name'            => $request->first_name,
            'middle_name'           => $request->middle_name,
            'last_name'             => $request->last_name,
            'family_name'           => $request->family_name,
            'national_id'           => $request->national_id,
            'birth_address'         => $request->birth_address,
            'birth_city'            => $request->birth_city,
            'birth_date'            => $request->birth_date,
            'join_date'             => $request->join_date,
            'gender_id'             => $request->gender_id,
            'health_status_id'      => $request->health_status_id,
            'social_status_id'      => $request->social_status_id,
            'military_treatment_id' => $request->military_treatment_id,
            'military_summons'      => $request->military_summons,
        ]);
        
        $this->editPhoneNumber($request, $employee->id);
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
