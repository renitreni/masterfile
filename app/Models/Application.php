<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'position_category',
        'applicant_date',
        'gender',
        'civil_status',
        'birthdate',
        'short_address',
        'complete_address',
        'contact_no',
        'email',
        'facebook',
        'jobsite',
        'applicant_category_id',
        'applicant_type_id',
        'religion_id',
    ];

    public function educationalBackground()
    {
        return $this->hasMany(EducationalBackground::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperiences::class);
    }
}
