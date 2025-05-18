<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'pruebas';
    protected $primaryKey = 'id';
    protected $fillable = [
       'nombre',
       'foto'
    ];

    protected $hidden = ['id'];

    public function opiniones()
    {
        return $this->belongsToMany(Opinion::class, 'prueba_opinion', 'prueba_id', 'opinion_id');
    }
}
