<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function details()
    {
        return $this->hasMany(ReservationDetail::class, 'reservation_id');
    }

    public function reservation()
    {
        return $this->hasOne(Reversion::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
