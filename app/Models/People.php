<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function EducationLevel()
    {
        return $this->belongsTo(EducationLevel::class, 'education_level_id');
    }

    protected function dateBirth(): Attribute
    {
        return Attribute::make(
            get: fn($value ) => date_diff((new \DateTime()), new \DateTime($value))->format('%Y')
        );
    }
}
