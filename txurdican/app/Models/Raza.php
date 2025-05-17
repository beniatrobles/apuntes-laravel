<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    protected $table='razas';

    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre_raza',
        'descripcion_raza'
    ];

    public function mascotas(){
        return $this->hasMany(Mascota::class);
    }
}
