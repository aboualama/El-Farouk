<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobHistory extends Model 
{

    protected $table = 'job_history';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['date', 'employee_id', 'job_function_id', 'financial_degree_id', 'degree_date', 'job_style_id', 'cader_id', 'job_status_id', 'nomination_type_id'];

    public function job_functions()
    {
        return $this->belongsTo(JobFunction::class);
    }

    public function financial_degree()
    {
        return $this->belongsTo(FinancialDegree::class);
    }

    public function job_style()
    {
        return $this->belongsTo(JobStyle::class);
    }

    public function nomination_types()
    {
        return $this->belongsTo(NominationType::class);
    }

}