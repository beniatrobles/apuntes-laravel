<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autors';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombre',
        'pais',
    ];

    protected $hidden =['id'];

    public function libros(){
        return $this->hasMany(Libro::class);
    }
}
