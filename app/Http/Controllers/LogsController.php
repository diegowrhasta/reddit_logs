<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function start(){
        $Thelogs = Log::all(); 
        return view('logs')->with('Thelogs', $Thelogs);
    }
    public function store(Request $request){
        $this->validate($request,[
            'problema' =>  'required',
            'user' =>  'required',
            'area' =>  'required',
            'responsable' =>  'required',
            'estado' =>  'required',
            'equipo' =>  'required',
            'descripcion' =>  'required',
            'fecha_reporte' =>  'required',
            'fecha_resolucion' =>  'required'
        ]);
        $log = new Log;
        $log->problema = $request->input('problema');
        $log->user = $request->input('user');
        $log->area = $request->input('area');
        $log->responsable = $request->input('responsable');
        $log->estado = $request->input('estado');
        $log->equipo = $request->input('equipo');
        $log->descripcion = $request->input('descripcion');
        $log->fecha_reporte = $request->input('fecha_reporte');
        $log->fecha_resolucion = $request->input('fecha_resolucion');
        $log->organization = 'diego';
        $log->save();
        $logs = Log::all(); 
        return redirect('/logs')->with('message', 'Log creado con éxito')->with('logs',$logs);
    }
}
