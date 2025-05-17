<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MascotaController extends Controller
{
    public function sinAdoptar(){
        $mascotas = Mascota::where('adoptado',0)->paginate(4);
        return view('mascotas.sinAdoptar',compact('mascotas'));
    }

    public function detallesMascota(Request $request,$id){
        $mascota = Mascota::with('raza')->find($id);
        $razas=Raza::all();
        $origen = $request->query('from', 'otro'); // valor por defecto: 'otro'
        return view('mascotas.detallesMascota',compact('mascota','razas','origen'));
    }

    public function cambiarSituacion(Request $request,$id){
        $mascota = Mascota::find($id);

        $mascota->adoptado = $request->adopcion;
        $mascota->save();

        return redirect()->route('mascotas.sinAdoptar')->with('success','Mascota actualizada');
    }

    public function modificacionesMascota(){
        $mascotas = Mascota::all();
        return view('mascotas.modificacionesMascota',compact('mascotas'));
    }

    public function cambiarSituacion2(Request $request,$id){

        $mascota = Mascota::find($id);

        $mascota->adoptado = $request->adopcion;
        $mascota->save();

        return redirect()->route('mascotas.modificacionesMascota')->with('success','Mascota actualizada');

    }

    public function updateMascota(Request $request,$id){
        
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->raza_id = $request->raza_id;
        $mascota->adoptado = $request->adopcion;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('Imagenes'), $nombreFoto);
            $mascota->imagen = $nombreFoto;
        }

        $mascota->save();

        return redirect()->route('mascotas.detallesMascota', [
            'id' => $mascota->id,
            'from' => 'modificaciones'
        ])->with('success', 'mascota actualizada');
    }
}
