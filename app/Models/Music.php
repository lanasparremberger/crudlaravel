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
'title' => 'required|min:1|max:100',
'artist' => 'required',
'image' => 'required',
];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
