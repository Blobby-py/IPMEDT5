<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function showWelcome()
    {
        // Haal alle gebruikers op waarvan de last_seen tijd minder dan 5 minuten geleden is
        $activeUsers = DB::table('user_activities')
            ->where('last_seen', '>=', now()->subMinutes(5))
            ->get();

        return view('welcome', ['activeUsers' => $activeUsers]);
    }
}
