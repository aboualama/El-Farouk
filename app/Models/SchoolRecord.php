<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolRecord extends Model
{
    use HasFactory;
    protected $fillable = ['period']; 

    public function types()
    {
        return $this->hasMany(SchoolRecordType::class);
    }
}
