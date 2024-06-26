<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bak;
use App\Models\Over;
use App\Models\Esp32Device; 

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $activeUsers = DB::table('user_activities')->get();
        
        foreach ($activeUsers as $user) {
            if ($user->device_type === 'esp32') {
                
                // Voeg de gebruiker toe aan de ESP32-devices tabel
                Esp32Device::firstOrCreate([
                    'ip_address' => $user->ip_address,
                ], [
                    'dobbelstenen_over' => 6,
                    'dobbelstenen_bak' => 0
                ]);
            }
        }

        // Bereken totaal aantal dobbelstenen over van alle spelers
        $totalOver = Esp32Device::sum('dobbelstenen_over');
        
        // Bereken totaal aantal dobbelstenen bak van alle spelers
        $totalBak = Esp32Device::sum('dobbelstenen_bak');

        return view('welcome')
            ->with('activeUsers', $activeUsers)
            ->with('totalOver', $totalOver)
            ->with('totalBak', $totalBak)
            ->with('esp32Devices', Esp32Device::all());
    }
}
