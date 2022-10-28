<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip', 'name', 'email', 'message', 'reply', 'status'
    ];

    const UNRESOLVED = 1;
    const RESOLVED = 2;

}
