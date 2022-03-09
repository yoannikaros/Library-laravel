<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Member extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = [
        'password',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(fn ($model) => $model->password = Hash::make($model->password));
    }
}
