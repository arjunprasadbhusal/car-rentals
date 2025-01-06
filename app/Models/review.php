<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $guarded=[];   


public function vehicle()
{
    return $this->belongsTo(vehicle::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
}
