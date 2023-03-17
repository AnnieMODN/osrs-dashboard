<?php

namespace App\Models;

use App\Models\StatSnapshot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function statSnapshots()
    {
        return $this->hasMany(StatSnapshot::class);
    }

    public function minigameStatSnapshots()
    {
        return $this->hasMany(MinigameStatSnapshot::class);
    }
}
