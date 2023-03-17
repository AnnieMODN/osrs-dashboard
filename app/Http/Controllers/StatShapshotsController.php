<?php

namespace App\Http\Controllers;

use App\Models\StatSnapshot;
use Illuminate\Http\Request;

class StatShapshotsController extends Controller
{
    public function show(StatSnapshot $statSnapshot)
    {
        // dd($statSnapshot);
    }
}
