<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        DB::table("dobbelstenen_over")->insert([
            "dobbelsteen_over" => 0,
        ]);

        DB::table("dobbelstenen_bak")->insert([
            "dobbelsteen_bak" => 0,
        ]);
    }
}
