<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table='songs';
    protected $primaryKey='id';
    protected $fillable=[
        'nombre',
        'artista',
        'album',
        'playlist_id'
    ];

    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }
}
