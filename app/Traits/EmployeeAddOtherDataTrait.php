<?php

namespace App\Traits;

use App\Models\Phone;

 
trait EmployeeAddOtherDataTrait {
 
      
    public function addPhoneNumber($request , $id){
        foreach($request->cell as $cell){ 
            $record = Phone::create([
                'number'      => $cell,
                'employee_id' => $id,
                ]);   
        }  
    }

} 