<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custody extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'year_id',
        'custody_type_id',
        'item_no',
        'item_name',
        'item_des',
        'item_status',
        'quantity',
        'item_type',
        'insert_date',
        'notebook_no',
        'notebook_name',
        'unit',
        'shortage',
        'school_record_type_id',
        'record_no',
        'record_description',
        'notes',
        'serial_number',
        'custody_name',
        'count',
        'received_date',
        'received_signature',
        'recipient_signature',
        'retrieved_date',
        'public_number',
        'private_number',
        'receipt_number',
        'book_supplier',
        'author',
        'book_title',
        'publisher',
        'place_of_publication',
        'date_of_publication'
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function type()
    {
        return $this->belongsTo(CustodyType::class , 'custody_type_id');
    }

    public function document()
    {
        return $this->hasOne(Document::class);
    }

    public function recordtype()
    {
        return $this->belongsTo(SchoolRecordType::class , 'school_record_type_id');
    }
}
