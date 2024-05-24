<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DobbelstenenController extends Controller
{
    public function updateDobbelstenenFromESP32(Request $request)
    {
        $macAddress = $request->header('X-ESP32-MAC');
        $device = Esp32Device::where('mac_address', $macAddress)->first();
        
        if ($device) {
            // Verlaag dobbelstenen_over met 1 en verhoog dobbelstenen_bak met 1
            $device->dobbelstenen_over -= 1;
            $device->dobbelstenen_bak += 1;
            $device->save();
            
            Over::create(['dobbelsteen_over' => $device->dobbelstenen_over]);
            Bak::create(['dobbelsteen_bak' => $device->dobbelstenen_bak]);
        }

        return response()->json([
            'message' => 'Dobbelstenen bijgewerkt',
            'dobbelstenen_over' => $device->dobbelstenen_over,
            'dobbelstenen_bak' => $device->dobbelstenen_bak,
        ]);
    }
}
