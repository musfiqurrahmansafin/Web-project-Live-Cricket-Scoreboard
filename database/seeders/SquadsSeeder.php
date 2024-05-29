<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SquadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the existing data to start fresh
        DB::table('squads')->truncate();

        // Get the current timestamp
        $now = Carbon::now();

        // Define the data to be inserted
        $squads = [
            ['id' => 1, 'match_id' => 1, 'player_id' => 1, 'player_name' => 'Litton Das', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'match_id' => 1, 'player_id' => 2, 'player_name' => 'Tamim Iqbal', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'match_id' => 1, 'player_id' => 4, 'player_name' => 'Shakib Al Hasan', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'match_id' => 1, 'player_id' => 5, 'player_name' => 'Mushfiqur Rahim', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'match_id' => 1, 'player_id' => 7, 'player_name' => 'Mehidy Hasan Miraz', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'match_id' => 1, 'player_id' => 8, 'player_name' => 'Towhid Hridoy', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'match_id' => 1, 'player_id' => 9, 'player_name' => 'Ebadot Hossain', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'match_id' => 1, 'player_id' => 10, 'player_name' => 'Nasum Ahmed', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'match_id' => 1, 'player_id' => 12, 'player_name' => 'Taskin Ahmed', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'match_id' => 1, 'player_id' => 13, 'player_name' => 'Shoriful Islam', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'match_id' => 1, 'player_id' => 14, 'player_name' => 'Mustafizur Rahman', 'team_id' => 1, 'team_name' => 'Bangladesh', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 15, 'match_id' => 1, 'player_id' => 21, 'player_name' => 'Rahul, KL', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 16, 'match_id' => 1, 'player_id' => 22, 'player_name' => 'Ishan Kishan', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 17, 'match_id' => 1, 'player_id' => 25, 'player_name' => 'Kohli, V', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 18, 'match_id' => 1, 'player_id' => 26, 'player_name' => 'Pant, RR', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 19, 'match_id' => 1, 'player_id' => 27, 'player_name' => 'Patel, AR', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 20, 'match_id' => 1, 'player_id' => 29, 'player_name' => 'Jadeja, RA', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 21, 'match_id' => 1, 'player_id' => 31, 'player_name' => 'Pandya, HH', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 22, 'match_id' => 1, 'player_id' => 32, 'player_name' => 'Umran Malik', 'team_id' => 2, 'team_name' => 'India', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Insert the data into the database
        DB::table('squads')->insert($squads);
    }
}
