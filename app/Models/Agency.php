<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'category',
        'address',
        'contact_no',
        'website',
    ];
    

    public function agencyRepresentative()
    {
        return $this->hasMany(AgencyRepresentative::class);
    }
}
