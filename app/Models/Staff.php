<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'staffs';

    protected $hidden = [
        'password',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(fn ($model) => $model->password = bcrypt($model->password));
    }
}
