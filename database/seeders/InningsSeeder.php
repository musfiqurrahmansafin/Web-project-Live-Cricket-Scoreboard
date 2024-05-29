<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('innings')->truncate();
        DB::table('innings')->insert([
            [
                'id' => 1,
                'match_id' => 1,
                'battingTeam_id' => 1,
                'bowlingTeam_id' => 2,
                'innings' => '1',
                'status' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'match_id' => 1,
                'battingTeam_id' => 2,
                'bowlingTeam_id' => 1,
                'innings' => '2',
                'status' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more entries as needed
        ]);
    }
}
