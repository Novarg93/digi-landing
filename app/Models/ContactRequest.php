<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'message',
        'status',
        'read_at',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];
}