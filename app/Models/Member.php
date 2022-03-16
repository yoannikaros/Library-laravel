<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Member extends Authenticatable
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = [
        'password',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reversions()
    {
        return $this->hasMany(Reversion::class);
    }

    public static function boot()
    {
        parent::boot();
        static::creating(fn ($model) => $model->password = Hash::make($model->password));
    }
}
