<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $fillable = [ 'year', 'default', 'details']; 
    

    public function settings()
    {
        return $this->hasOne(OtherSetting::class);
    }

    public function custodies()
    {
        return $this->hasMany(Custody::class);
    }
}
