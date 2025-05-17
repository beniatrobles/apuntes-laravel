<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $primaryKey='id';
    protected $fillable=[
        'nombre',
        'edad',
        'telefono',
        'direccion',
    ];

    protected $hidden=['id'];

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
}
