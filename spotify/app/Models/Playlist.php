<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlists';
    protected $primaryKey='id';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function songs(){
        return $this->hasMany(Song::class);
    }
}
