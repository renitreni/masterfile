<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyRepresentative extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'representative',
        'position',
        'passport_id',
        'tin',
        'contact_no',
        'email',
        'facebook',
    ];
}
