<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model 
{

    protected $table = 'employees';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'family_name', 'national_id', 'birth_address', 'birth_city', 'birth_date', 'join_date', 'gender', 'health_status', 'social_status', 'military_treatment', 'military_summons'];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function qualification()
    {
        return $this->belongsToMany(Qualification::class);
    }

    public function jobs_history()
    {
        return $this->hasMany(JobHistory::class);
    }

    public function children()
    {
        return $this->hasMany(Children::class);
    }

    public function address()
    {
        return $this->hasMany(ResidenceAddress::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

}