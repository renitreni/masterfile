<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'level',
        'course',
        'address',
        'year_graduate',
        'awards',
    ];
}
