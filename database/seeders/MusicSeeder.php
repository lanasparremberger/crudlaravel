<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Music;

class MusicSeeder extends Seeder
{
    public function run(): void
    {
        Music::create([
            'user_id' => 1,
            'title' => 'Bohemian Rhapsody',
            'artist' => 'Queen',
            'album' => 'A Night at the Opera',
            'genre' => 'Rock',
            'image' => null,
        ]);

        Music::create([
            'user_id' => 1,
            'title' => 'Billie Jean',
            'artist' => 'Michael Jackson',
            'album' => 'Thriller',
            'genre' => 'Pop',
            'image' => null,
        ]);

        Music::create([
            'user_id' => 1,
            'title' => 'The Archer',
            'artist' => 'Taylor Swift',
            'album' => 'Lover',
            'genre' => 'Pop',
            'image' => null,
        ]);
    }
}