<?php

namespace App\Http\Middleware;

use Closure;

class CheckMacMiddleware
{
    public function handle($request, Closure $next)
    {
        // Controleer op de aanwezigheid van de header 'X-ESP32-MAC' en stel het apparaattype dienovereenkomstig in
        $deviceType = $request->header('X-ESP32-MAC') ? 'esp32' : 'other'; 

        // Voeg het apparaattype toe als een attribuut aan het request
        $request->attributes->add(['device_type' => $deviceType]);

        return $next($request);
    }
}