<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;
    protected $table = 'job_history';
    protected $guarded = [];

    public function Employee()
    {
        return $this->belongsTo(People::class, 'people_id');
    }

    public function Position()
    {
        return $this->belongsTo(Positions::class, 'position_id');
    }
}
