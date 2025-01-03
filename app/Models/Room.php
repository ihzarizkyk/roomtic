<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $primaryKey = "id";

    public function roomDetail()
    {
        return $this->hasOne(RoomDetails::class,"room_id");
    }

}
