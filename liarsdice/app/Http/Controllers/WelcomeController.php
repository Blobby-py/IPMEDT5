<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $activeUsers = DB::table('user_activities')->get();
        
        // Haal het apparaattype op uit de attributen van het request
        $deviceType = $request->attributes->get('device_type');
        
        return view('welcome', ['activeUsers' => $activeUsers, 'deviceType' => $deviceType]);
    }
}