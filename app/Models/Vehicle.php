<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=[];

public function reviews()
{
    return $this->belongsTo(review::class);
}
public function booking()
    {
        return $this->hasMany(bookings::class);
    }

}
