<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'company_name',
        'position',
        'address',
        'contact_no',
        'years_experience',
    ];
}
