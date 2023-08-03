<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'Paulo Carvalho',
            'email' => 'pcarvalho@mail.com',
            'password' => 'password'
        ]);

        \App\Models\Project::factory(2)->create(['owner_id' => $user->id]);
        \App\Models\Project::factory(10)->create();
    }
}
