<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'price_per_hour'
    ];

    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }
}
