<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StartNowRequest extends Model
{
    protected $fillable = [
        'contact_person',
        'company_name',
        'email',
        'country_of_registration',
        'phone',
        'about',
        'agreed_to_terms',
        'status',
        'read_at',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'agreed_to_terms' => 'boolean',
        'read_at' => 'datetime',
    ];
}