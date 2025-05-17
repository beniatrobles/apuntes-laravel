<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $table = 'podcasts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = ['id'];


    public function user(){
        return $this->belongsToMany(User::class);
    }
}
