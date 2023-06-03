<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function JobHistory()
    {
        return $this->hasMany(JobHistory::class, 'position_id');
    }

    public function scopeAvailable($query)
    {
        return $query->whereDoesntHave('JobHistory')->orWhereDoesntHave('JobHistory',function($jobHistory){
            $jobHistory->whereNull('end_contract');
        });
    }
}
