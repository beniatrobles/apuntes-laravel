<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description'
    ];
    // guarded es para que no se pueda editar
    protected $guarded = ['id','foto'];

    
}
