<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{

    protected $table = 'employees';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('first_name', 'middle_name', 'last_name', 'family_name', 'national_id', 'birth_address', 'birth_date', 'join_date', 'gender', 'health_status', 'social_status', 'military_treatment');

   
    protected $appends = ['full_name']; 

    public function getFullNameAttribute()
    { 
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name . ' ' . $this->family_name; 
    }
} 