<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MigrationSeeder extends Seeder
{
    public function run()
    {
        DB::table('migrations')->truncate();

        DB::table('migrations')->insert([
            ['id' => 1, 'migration' => '2024_05_03_000000_create_users_table', 'batch' => 1],
            ['id' => 2, 'migration' => '2024_05_04_085308_create_teams_table', 'batch' => 1],
            ['id' => 3, 'migration' => '2024_05_05_085316_create_players_table', 'batch' => 1],
            ['id' => 4, 'migration' => '2024_05_06_095106_create_venues_table', 'batch' => 1],
            ['id' => 5, 'migration' => '2024_05_07_143603_create_cricket_matches_table', 'batch' => 1],
            ['id' => 6, 'migration' => '2024_05_08_053259_create_scores_table', 'batch' => 1],
            ['id' => 7, 'migration' => '2024_05_09_175014_create_squads_table', 'batch' => 1],
            ['id' => 8, 'migration' => '2024_05_10_070704_create_innings_table', 'batch' => 1],
        ]);
    }
}
