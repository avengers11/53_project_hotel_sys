<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;

    protected $casts = [
        "facility" => 'json',
        "assign_room" => 'json',
        "img" => 'json',
    ];

    public function floors(){
        return $this->belongsToMany(Floor::class);
    }
}
