<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CricketMatchesSeeder::class);
        $this->call(InningsSeeder::class);
        $this->call(MigrationSeeder::class);
        $this->call(PlayersSeeder::class);
        $this->call(ScoresSeeder::class);
        $this->call(SquadsSeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(VenuesSeeder::class);


    }
}
