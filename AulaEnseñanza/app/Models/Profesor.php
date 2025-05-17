<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table='profesors';
    protected $primaryKey='id';
    protected $fillable=[
        'nombreApellido',
        'profesion',
        'gradoAcademico',
        'telefono'
    ];

    protected $guarded=['id'];
    protected $hidden=['id'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
