<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the existing data to start fresh
        DB::table('venues')->truncate();

        // Get the current timestamp
        $now = Carbon::now();

        // Define the data to be inserted
        $venues = [
            [
                'id' => 1,
                'name' => 'Mirpur',
                'location' => 'Dhaka, Mirpur',
                'capacity' => 25000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Mumbai',
                'location' => 'Mumbai, India',
                'capacity' => 60000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Karachi',
                'location' => 'Karachi, Pakistan',
                'capacity' => 45000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'name' => 'Colombo',
                'location' => 'Colombo, Sri Lanka',
                'capacity' => 30000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Insert the data into the database
        DB::table('venues')->insert($venues);
    }
}
