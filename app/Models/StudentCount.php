<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCount extends Model
{
    use HasFactory;
    protected $fillable = [ 'count', 'class_room_id', 'year_id' ]; 


    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
} 