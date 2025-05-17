<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    protected $table= 'cursos';
    protected $primaryKey='id';
    protected $fillable=[
        'nombre',
        'nivel',
        'horasAcademicas',
        'profesor_id'
    ];

    protected $hidden=['id'];

    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }

    public function alumnos(){
        return $this->belongsToMany(Alumno::class);
    }
}
