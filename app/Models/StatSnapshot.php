<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatSnapshot extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
