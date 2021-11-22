<?php

namespace App\Traits;

use App\Models\Phone;
use App\Models\JobHistory;
use App\Models\ResidenceAddress;
use App\Models\EmployeeQualification;

 
trait EmployeeAddOtherDataTrait {
 
      
    public function addPhoneNumber($request , $id){

        foreach($request->cell as $cell){ 
            $record = Phone::create([
                'number'      => $cell,
                'employee_id' => $id,
                ]);   
        }   
    }

      
    public function addResidenceAddress($request , $id){
         
        $record = ResidenceAddress::create([
            'residence_address' => $request->residence_address,
            'residence_center'  => $request->residence_center,
            'residence_city'    => $request->residence_city,
            'employee_id'       => $id,
            ]);    
    }
      

    public function addQualification($request , $id){
         
        $record = EmployeeQualification::create([
            'qualification_source' => $request->qualification_source,
            'qualification_major'  => $request->qualification_major,
            'qualification_round'  => $request->qualification_round,
            'qualification_degree' => $request->qualification_degree,
            'qualification_date'   => $request->qualification_date,
            'qualification_id'     => $request->qualification_id,
            'employee_id'          => $id,
            ]);    
    }
      

    public function addJobHistory($request , $id){
         
        $record = JobHistory::create([
            'job_function_name'   => $request->job_function_name,
            'sub_group_id'        => $request->sub_group_id,
            'join_date'           => $request->join_date,
            'financial_degree_id' => $request->financial_degree_id, 
            'degree_date'         => $request->degree_date,  
            'job_style_id'        => $request->job_style_id,
            'cader_id'            => $request->cader_id,
            'job_status_id'       => $request->job_status_id,
            'nomination_type_id'  => $request->nomination_type_id,
            'employee_id'         => $id,
            ]);    
    }

}   