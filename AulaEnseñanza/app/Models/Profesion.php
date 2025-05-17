<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table= 'profesions';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombre'
    ];
}
