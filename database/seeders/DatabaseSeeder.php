<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Restauran::factory(10)->create();
        \App\Models\Menu::factory(10)->create();
        \App\Models\Recipe::factory(10)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Category::factory(1)->create();
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'number' => '87776665544',
            'email_verified_at' => now(),
            'password' => Hash::make('asdasdasd'),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\Status::factory()->create([
            'name' => 'End',
        ]);
        \App\Models\Status::factory()->create([
            'name' => 'Deliver',
        ]);
        \App\Models\Status::factory()->create([
            'name' => 'Cook',
        ]);
    }
}
