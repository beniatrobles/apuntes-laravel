<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno = new Alumno();
        $alumno->nombre = 'Ana Martinez';
        $alumno->edad = '25';
        $alumno->telefono = '678909876';
        $alumno->direccion = 'C/ Ramiro';
        $alumno->foto = 'fotosAlumnos/a1.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Diego López';
        $alumno->edad = '22';
        $alumno->telefono = '612345678';
        $alumno->direccion = 'Av. Libertad 45';
        $alumno->foto = 'fotosAlumnos/a2.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Valeria Torres';
        $alumno->edad = '23';
        $alumno->telefono = '634567890';
        $alumno->direccion = 'C/ Las Palmas 12';
        $alumno->foto = 'fotosAlumnos/a3.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Mateo Ramírez';
        $alumno->edad = '24';
        $alumno->telefono = '699876543';
        $alumno->direccion = 'Paseo del Prado 33';
        $alumno->foto = 'fotosAlumnos/a4.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Camila Fernández';
        $alumno->edad = '21';
        $alumno->telefono = '622334455';
        $alumno->direccion = 'C/ Mayor 5';
        $alumno->foto = 'fotosAlumnos/a5.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Lucas Gómez';
        $alumno->edad = '26';
        $alumno->telefono = '677112233';
        $alumno->direccion = 'Av. Andalucía 8';
        $alumno->foto = 'fotosAlumnos/a6.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Isabella Herrera';
        $alumno->edad = '22';
        $alumno->telefono = '644556677';
        $alumno->direccion = 'C/ Colón 19';
        $alumno->foto = 'fotosAlumnos/a7.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Santiago Ruiz';
        $alumno->edad = '23';
        $alumno->telefono = '688990011';
        $alumno->direccion = 'Plaza España 3';
        $alumno->foto = 'fotosAlumnos/a8.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Mariana Castro';
        $alumno->edad = '25';
        $alumno->telefono = '611223344';
        $alumno->direccion = 'C/ Sevilla 7';
        $alumno->foto = 'fotosAlumnos/a9.jpg';  // Foto del alumno
        $alumno->save();
        
        $alumno = new Alumno();
        $alumno->nombre = 'Joaquín Morales';
        $alumno->edad = '24';
        $alumno->telefono = '655778899';
        $alumno->direccion = 'Av. del Mar 10';
        $alumno->foto = 'fotosAlumnos/a10.jpg';  // Foto del alumno
        $alumno->save();
        
    }
}
