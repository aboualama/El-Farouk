<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;
    protected $fillable = ['classroom', 'stage_id']; 

    public function students()
    {
        return $this->hasMany(StudentCount::class);
    }
}
