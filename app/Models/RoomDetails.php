<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomDetails extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $table = "room_details";

    public function Room()
    {
        return $this->belongsTo(Room::class,"id");
    }

}
