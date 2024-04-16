<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class UpdateUserActivity
{
    public function handle($request, Closure $next)
    {
        $ipAddress = $request->ip();

        // Update of voeg gebruikersactiviteit toe
        DB::table('user_activities')->updateOrInsert(
            ['ip_address' => $ipAddress],
            ['last_seen' => now()]
        );

        // Verwijder gebruikersactiviteiten die ouder zijn dan 1 minuten
        $cutoffTime = now()->subMinutes(1);
        DB::table('user_activities')->where('last_seen', '<', $cutoffTime)->delete();

        return $next($request);
    }
}