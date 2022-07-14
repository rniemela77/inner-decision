<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Goal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Empty out the tables
        User::truncate();
        Goal::truncate();

        // Store dummy data in DB
        User::factory(3)->create();
        Goal::factory()->create([
            'user_id' => '1',
            'created_at' => '2022-07-13 00:00:00'
        ]);
        Goal::factory()->create([
            'user_id' => '1',
            'created_at' => '2022-07-14 00:00:00'
        ]);
        Goal::factory()->create([
            'user_id' => '1',
            'created_at' => '2022-07-15 00:00:00'
        ]);
        Goal::factory()->create([
            'user_id' => '2',
            'created_at' => '2022-07-15 00:00:00'
        ]);
    }
}
