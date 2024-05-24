<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Esp32Device;
use App\Models\Over;
use App\Models\Bak;

class BakController extends Controller
{
    // public function updateDobbelstenen(Request $request)
    // {
    //     $macAddress = $request->header('X-ESP32-MAC');

    //     // Valideer de request
    //     $request->validate([
    //         'action' => 'required|in:add',
    //     ]);

    //     // Zoek of maak een ESP32-apparaat op basis van het MAC-adres
    //     $device = Esp32Device::firstOrCreate(
    //         ['mac_address' => $macAddress],
    //         ['dobbelstenen_over' => 6, 'dobbelstenen_bak' => 0]
    //     );

    //     // Update de dobbelstenen op basis van de actie
    //     if ($request->input('action') == 'add') {
    //         if ($device->dobbelstenen_over > 0) {
    //             $device->dobbelstenen_over -= 1;
    //             $device->dobbelstenen_bak += 1;

    //             // Update de totale waarden in de database
    //             Over::create(['dobbelsteen_over' => $device->dobbelstenen_over]);
    //             Bak::create(['dobbelsteen_bak' => $device->dobbelstenen_bak]);
    //         }
    //     }

    //     // Sla de nieuwe waarden op
    //     $device->save();

    //     // Bereken totaal aantal dobbelstenen over van alle spelers
    //     $totalDobbelstenenOver = Esp32Device::sum('dobbelstenen_over');

    //     return response()->json([
    //         'message' => 'Aantal dobbelstenen bijgewerkt',
    //         'dobbelstenen_over' => $device->dobbelstenen_over,
    //         'dobbelstenen_bak' => $device->dobbelstenen_bak,
    //         'totalDobbelstenenOver' => $totalDobbelstenenOver,
    //     ]);
    // }
}

