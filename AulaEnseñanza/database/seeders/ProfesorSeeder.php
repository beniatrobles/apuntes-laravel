<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesor = new Profesor();
        $profesor->nombreApellido = 'Beñat Robles';
        $profesor->profesion = 'Matematicas';
        $profesor->gradoAcademico = 'Licenciado';
        $profesor->telefono = '654345234';
        $profesor->foto = 'fotosProfesores/p1.jpg';  // Ruta de la foto
        $profesor->save();
        
        $profesor = new Profesor();
        $profesor->nombreApellido = 'Lucía Delgado';
        $profesor->profesion = 'Lengua y Literatura';
        $profesor->gradoAcademico = 'Máster en Educación';
        $profesor->telefono = '612345987';
        $profesor->foto = 'fotosProfesores/p2.jpg';  // Ruta de la foto
        $profesor->save();
        
        $profesor = new Profesor();
        $profesor->nombreApellido = 'Javier Muñoz';
        $profesor->profesion = 'Historia';
        $profesor->gradoAcademico = 'Doctorado';
        $profesor->telefono = '678123456';
        $profesor->foto = 'fotosProfesores/p3.jpg';  // Ruta de la foto
        $profesor->save();
        
        $profesor = new Profesor();
        $profesor->nombreApellido = 'Sara Márquez';
        $profesor->profesion = 'Inglés';
        $profesor->gradoAcademico = 'Grado Universitario';
        $profesor->telefono = '699112233';
        $profesor->foto = 'fotosProfesores/p4.jpg';  // Ruta de la foto
        $profesor->save();
        
        $profesor = new Profesor();
        $profesor->nombreApellido = 'Tomás Herrera';
        $profesor->profesion = 'Física';
        $profesor->gradoAcademico = 'Ingeniero';
        $profesor->telefono = '655443322';
        $profesor->foto = 'fotosProfesores/p5.jpg';  // Ruta de la foto
        $profesor->save();
        
    }
}
