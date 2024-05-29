<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the existing data to start fresh
        DB::table('users')->truncate();

        // Get the current timestamp
        $now = Carbon::now();

        // Define the data to be inserted
        $users = [
            [
                'id' => 1,
                'name' => 'Musfiqur Rahman',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('$2a$12$ZMWMVv6bvbJvgL4sogVeReIzq9aE.AZNRqtxdBp1cXbJzYwYf.GGq'),
                'role' => 'admin',
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Insert the data into the database
        DB::table('users')->insert($users);
    }
}
