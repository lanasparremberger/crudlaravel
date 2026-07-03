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
            'title' => 'oiii careca',
            'artist' => 'gremio melhor do mundo',
            'album' => 'ppi2 > ppi3',
            'genre' => 'Rock',
            'image' => null,
        ]);

        Music::create([
            'user_id' => 1,
            'title' => 'oi orientador',
            'artist' => 'i love laravel',
            'album' => 'achei q ia rodar',
            'genre' => 'Pop',
            'image' => null,
        ]);

        Music::create([
            'user_id' => 1,
            'title' => 'oii roger',
            'artist' => 'podia ter feito um trabalho melhor',
            'album' => 'me dá um 10 pfv',
            'genre' => 'Pop',
            'image' => null,
        ]);
    }
}