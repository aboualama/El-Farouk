<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherSetting extends Model
{
    use HasFactory;
      
    protected $fillable = ['agents', 'administrators', 'teachers', 'users', 'guards', 'primary_no', 'middle_no', 'secondary_no', 'year_id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
 