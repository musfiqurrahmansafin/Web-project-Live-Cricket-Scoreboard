<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the existing data to start fresh
        DB::table('teams')->truncate();

        // Get the current timestamp
        $now = Carbon::now();

        // Define the data to be inserted
        $teams = [
            ['id' => 1, 'name' => 'Bangladesh', 'head_coach' => 'Chandika Hathurusingha', 'home_venue_id' => '1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'India', 'head_coach' => 'Rahul Dravid', 'home_venue_id' => '2', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Pakistan', 'head_coach' => 'Saqlain Mushtaq', 'home_venue_id' => '3', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'Srilanka', 'head_coach' => 'Chris Silverwood', 'home_venue_id' => '4', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Insert the data into the database
        DB::table('teams')->insert($teams);
    }
}
