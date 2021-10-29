<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'insert_date', 'files', 'year_id', 'custody_type_id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function custody_type()
    {
        return $this->belongsTo(CustodyType::class , 'custody_type_id');
    }

} 