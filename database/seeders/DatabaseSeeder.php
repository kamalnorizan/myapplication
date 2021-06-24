<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(600)->create();
        // \App\Models\Post::factory(200)->create();
        // \App\Models\Comment::factory(200)->create();
    }
}
