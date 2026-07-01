<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';

    protected $fillable = [
        'user_id',
        'title',
        'artist',
        'album',
        'genre',
        'image',
    ];
    public $rules = [
        'title'  => 'required|string|max:100',
        'artist' => 'required|string|max:100',
        'album'  => 'required|string|max:100',
        'genre'  => 'required|string|max:50',
        'image'  => 'required|image|mimes:jpg,jpeg,png,webp,gif',
    ];
    public $messages = [
        'title.required' => 'O título é obrigatório.',
        'artist.required' => 'O artista é obrigatório.',
        'album.required' => 'O álbum é obrigatório.',
        'genre.required' => 'O gênero é obrigatório.',
        'image.required' => 'A imagem é obrigatória.',
        'image.image' => 'O arquivo deve ser uma imagem.',
        'image.mimes' => 'A imagem deve ser JPG, JPEG, PNG ou WEBP.',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
