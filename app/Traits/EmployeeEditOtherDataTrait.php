<?php

namespace App\Traits;

use App\Models\Phone;

 
trait EmployeeEditOtherDataTrait {
 
      
    public function editPhoneNumber($request , $id){
        $records = Phone::where('employee_id' , $id)->get(); 
        foreach($request->cell as $i => $cell){ 
            $records[$i]->update([
                'number'      => $cell,
                'employee_id' => $id,
                ]);   
        }  
    }

} 