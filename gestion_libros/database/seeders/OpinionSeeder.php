<?php

namespace Database\Seeders;

use App\Models\Opinion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Opiniones para libro 1
        $opinion1 = new Opinion();
        $opinion1->nombre_usuario = 'Manolo Ramirez';
        $opinion1->valoracion = 3;
        $opinion1->comentario = 'Un libro muy bueno';
        $opinion1->id_libro = 1;
        $opinion1->save();

        $opinion2 = new Opinion();
        $opinion2->nombre_usuario = 'Laura García';
        $opinion2->valoracion = 5;
        $opinion2->comentario = 'Me encantó, súper recomendado';
        $opinion2->id_libro = 1;
        $opinion2->save();

        $opinion3 = new Opinion();
        $opinion3->nombre_usuario = 'Pedro Sánchez';
        $opinion3->valoracion = 4;
        $opinion3->comentario = 'Buen libro, aunque un poco largo';
        $opinion3->id_libro = 1;
        $opinion3->save();

        // Opiniones para libro 2
        $opinion4 = new Opinion();
        $opinion4->nombre_usuario = 'Ana López';
        $opinion4->valoracion = 4;
        $opinion4->comentario = 'Interesante y entretenido';
        $opinion4->id_libro = 2;
        $opinion4->save();

        $opinion5 = new Opinion();
        $opinion5->nombre_usuario = 'Carlos Martínez';
        $opinion5->valoracion = 2;
        $opinion5->comentario = 'No me atrapó mucho';
        $opinion5->id_libro = 2;
        $opinion5->save();

        $opinion6 = new Opinion();
        $opinion6->nombre_usuario = 'Sofía Torres';
        $opinion6->valoracion = 5;
        $opinion6->comentario = 'Una joya de libro';
        $opinion6->id_libro = 2;
        $opinion6->save();

        // Opiniones para libro 3
        $opinion7 = new Opinion();
        $opinion7->nombre_usuario = 'Miguel Fernández';
        $opinion7->valoracion = 5;
        $opinion7->comentario = 'Imprescindible para amantes de la fantasía';
        $opinion7->id_libro = 3;
        $opinion7->save();

        $opinion8 = new Opinion();
        $opinion8->nombre_usuario = 'Elena Ruiz';
        $opinion8->valoracion = 4;
        $opinion8->comentario = 'Muy bien escrito y detallado';
        $opinion8->id_libro = 3;
        $opinion8->save();

        $opinion9 = new Opinion();
        $opinion9->nombre_usuario = 'Javier Gómez';
        $opinion9->valoracion = 3;
        $opinion9->comentario = 'Se me hizo un poco pesado';
        $opinion9->id_libro = 3;
        $opinion9->save();

        // Opiniones para libro 4
        $opinion10 = new Opinion();
        $opinion10->nombre_usuario = 'Laura Méndez';
        $opinion10->valoracion = 4;
        $opinion10->comentario = 'Muy entretenido, me gustó mucho';
        $opinion10->id_libro = 4;
        $opinion10->save();

        $opinion11 = new Opinion();
        $opinion11->nombre_usuario = 'Andrés Navarro';
        $opinion11->valoracion = 5;
        $opinion11->comentario = 'La mejor parte de la saga';
        $opinion11->id_libro = 4;
        $opinion11->save();

        $opinion12 = new Opinion();
        $opinion12->nombre_usuario = 'Patricia Jiménez';
        $opinion12->valoracion = 3;
        $opinion12->comentario = 'Está bien, pero esperaba más';
        $opinion12->id_libro = 4;
        $opinion12->save();

        // Opiniones para libro 5
        $opinion13 = new Opinion();
        $opinion13->nombre_usuario = 'Diego Vargas';
        $opinion13->valoracion = 5;
        $opinion13->comentario = 'Un final épico';
        $opinion13->id_libro = 5;
        $opinion13->save();

        $opinion14 = new Opinion();
        $opinion14->nombre_usuario = 'Carolina Herrera';
        $opinion14->valoracion = 4;
        $opinion14->comentario = 'Muy emocionante hasta el final';
        $opinion14->id_libro = 5;
        $opinion14->save();

        $opinion15 = new Opinion();
        $opinion15->nombre_usuario = 'Raúl Sánchez';
        $opinion15->valoracion = 4;
        $opinion15->comentario = 'Me gustó mucho, recomendable';
        $opinion15->id_libro = 5;
        $opinion15->save();

        // Opiniones para libro 6
        $opinion16 = new Opinion();
        $opinion16->nombre_usuario = 'Marta Molina';
        $opinion16->valoracion = 5;
        $opinion16->comentario = 'Una obra maestra';
        $opinion16->id_libro = 6;
        $opinion16->save();

        $opinion17 = new Opinion();
        $opinion17->nombre_usuario = 'Jorge Castillo';
        $opinion17->valoracion = 4;
        $opinion17->comentario = 'Muy buena narrativa';
        $opinion17->id_libro = 6;
        $opinion17->save();

        $opinion18 = new Opinion();
        $opinion18->nombre_usuario = 'Isabel Ortiz';
        $opinion18->valoracion = 3;
        $opinion18->comentario = 'Me costó un poco seguir la historia';
        $opinion18->id_libro = 6;
        $opinion18->save();

        // Opiniones para libro 7
        $opinion19 = new Opinion();
        $opinion19->nombre_usuario = 'Luis Romero';
        $opinion19->valoracion = 4;
        $opinion19->comentario = 'Muy interesante y profundo';
        $opinion19->id_libro = 7;
        $opinion19->save();

        $opinion20 = new Opinion();
        $opinion20->nombre_usuario = 'Sonia Alvarez';
        $opinion20->valoracion = 5;
        $opinion20->comentario = 'Me encantó cada página';
        $opinion20->id_libro = 7;
        $opinion20->save();

        $opinion21 = new Opinion();
        $opinion21->nombre_usuario = 'Oscar Delgado';
        $opinion21->valoracion = 3;
        $opinion21->comentario = 'Buen libro pero esperaba más';
        $opinion21->id_libro = 7;
        $opinion21->save();

        // Opiniones para libro 8
        $opinion22 = new Opinion();
        $opinion22->nombre_usuario = 'Verónica Paredes';
        $opinion22->valoracion = 5;
        $opinion22->comentario = 'Un clásico que todos deben leer';
        $opinion22->id_libro = 8;
        $opinion22->save();

        $opinion23 = new Opinion();
        $opinion23->nombre_usuario = 'Ramón Flores';
        $opinion23->valoracion = 4;
        $opinion23->comentario = 'Muy recomendable';
        $opinion23->id_libro = 8;
        $opinion23->save();

        $opinion24 = new Opinion();
        $opinion24->nombre_usuario = 'Nuria Sánchez';
        $opinion24->valoracion = 4;
        $opinion24->comentario = 'Me gustó mucho la historia';
        $opinion24->id_libro = 8;
        $opinion24->save();

        // Opiniones para libro 9
        $opinion25 = new Opinion();
        $opinion25->nombre_usuario = 'Fernando Castro';
        $opinion25->valoracion = 3;
        $opinion25->comentario = 'Interesante pero algo complicado';
        $opinion25->id_libro = 9;
        $opinion25->save();

        $opinion26 = new Opinion();
        $opinion26->nombre_usuario = 'Clara Molina';
        $opinion26->valoracion = 5;
        $opinion26->comentario = 'Muy bueno y profundo';
        $opinion26->id_libro = 9;
        $opinion26->save();

        $opinion27 = new Opinion();
        $opinion27->nombre_usuario = 'Sergio Ramos';
        $opinion27->valoracion = 4;
        $opinion27->comentario = 'Me gustó bastante';
        $opinion27->id_libro = 9;
        $opinion27->save();

        // Opiniones para libro 10
        $opinion28 = new Opinion();
        $opinion28->nombre_usuario = 'Patricia Gómez';
        $opinion28->valoracion = 5;
        $opinion28->comentario = 'Muy entretenido y sorprendente';
        $opinion28->id_libro = 10;
        $opinion28->save();

        $opinion29 = new Opinion();
        $opinion29->nombre_usuario = 'Ricardo Díaz';
        $opinion29->valoracion = 4;
        $opinion29->comentario = 'Buen ritmo y trama';
        $opinion29->id_libro = 10;
        $opinion29->save();

        $opinion30 = new Opinion();
        $opinion30->nombre_usuario = 'María Torres';
        $opinion30->valoracion = 3;
        $opinion30->comentario = 'Me pareció aceptable';
        $opinion30->id_libro = 10;
        $opinion30->save();
    }
}
