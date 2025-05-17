<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table='mascotas';
    protected $primaryKey ='id';

    protected $fillable =[
        'nombre',
        'imagen',
        'adoptado',
        'raza_id'
    ];

    public function raza(){
        return $this->belongsTo(Raza::class);
    }
}
