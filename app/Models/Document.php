<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
      
    protected $fillable = ['person', 'number', 'name', 'reason_leaving', 'documents', 'custody_id'];
 
    public function custody()
    {
        return $this->belongsTo(Custody::class);
    }
} 