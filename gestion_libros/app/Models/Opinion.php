<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{

    use HasFactory;
    protected $table = 'opinions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre_usuario',
        'valoracion',
        'comentario'
    ];
    protected $hidden = ['id'];

    public function libro(){
        return $this->belongsTo(Libro::class,'id_libro');
    }

    public function pruebas(){
        return $this->belongsToMany(Prueba::class,'prueba_opinion','opinion_id','prueba_id');
    }
}
