<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model


{

    use HasFactory;

    protected $table = 'libros';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'descripcion',
        'año_publicacion',
        'autor_id'
    ];

    protected $hidden = ['id'];

    public function autor(){
        return $this->belongsTo(Autor::class,'autor_id');
    }

    public function opiniones(){
        return $this->hasMany(Opinion::class,'id_libro');
    }

    
}
