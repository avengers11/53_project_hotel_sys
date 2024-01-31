<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        "facility" => 'json',
        "assign_room" => 'json',
        "img" => 'json',
    ];

    public function floors(){
        return $this->belongsTo(Floor::class);
    }

    public function roomCategories(){
        return $this->belongsTo(RoomCategory::class);
    }
}
