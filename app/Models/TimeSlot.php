<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'start_time',
        'end_time',
        'date',
        'is_booked'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_timeslot');
    }
}
