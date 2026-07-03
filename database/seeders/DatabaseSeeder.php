<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{

public function run(): void
{
    User::factory()->create([
        'name' => 'lana',
        'email' => 'lana@email.com',
        'password' => bcrypt('12345678'),
    ]);

    $this->call(MusicSeeder::class);
}
}