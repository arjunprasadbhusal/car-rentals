<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function vehicle()
{
    return $this->belongsTo(vehicle::class);
}
public function user()
{
    return $this->belongsTo(user::class);
}
}
