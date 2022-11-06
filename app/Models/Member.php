<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    const MANAGER = 'manager';
    const MEMBER = 'member';

    protected $fillable = [
        'name', 'education', 'deals_with', 'photo', 'position', 'type'
    ];

    public function scopeManagers($query)
    {
        return $query->where('type', '=', self::MANAGER);
    }

    public function scopeMembers($query)
    {
        return $query->where('type', '=', self::MEMBER);
    }
}
