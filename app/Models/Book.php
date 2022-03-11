<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reversions()
    {
        return $this->hasMany(Reservation::class);
    }
}
