<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CricketMatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the table to remove existing data
        DB::table('cricket_matches')->truncate();

        DB::table('cricket_matches')->insert([
            [
                'id' => 1,
                'team_a_id' => 1,
                'team_b_id' => 2,
                'format' => 'T10',
                'over' => 10,
                'status' => 'finished',
                'time' => '2023-07-16 10:30:00',
                'venue' => 'Mirpur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'team_a_id' => 3,
                'team_b_id' => 4,
                'format' => 'T10',
                'over' => 10,
                'status' => 'ongoing',
                'time' => '2023-08-15 22:50:00',
                'venue' => 'Colombo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

