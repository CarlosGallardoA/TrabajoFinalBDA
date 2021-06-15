<?php

namespace App\Http\Controllers;

use App\Models\Encuentro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuentroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('encuentros')
                    ->join('paisesl','encuentros.idpaisl','=','paisesl.idl')
                    ->join('paisesv','encuentros.idpaisv','=','paisesv.idv')
                    ->select('encuentros.id','paisesl.imgl','paisesl.nombrel','encuentros.golesl','paisesv.imgv','paisesv.nombrev','encuentros.golesv','encuentros.fecha','paisesl.sede')
                    ->get();
        //return response()->json($datos);
        return view('encuentros.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuentros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('encuentros')->insert([
            ['idpaisl' => $request->get('idpaisl'),
            'idpaisv' => $request->get('idpaisv'),
            'golesl'=> $request->get('golesl'),
            'golesv'=> $request->get('golesv'),
            'fecha'=> $request->get('fecha'),
            'rematesl'=> $request->get('rematesl'),
            'rematesv'=> $request->get('rematesv'),
            'rematesarcol'=> $request->get('rematesarcol'),
            'rematesarcov'=> $request->get('rematesarcov'),
            'posesionl'=> $request->get('posesionl'),
            'posesionv'=> $request->get('posesionv'),
            'pasesl'=> $request->get('pasesl'),
            'pasesv'=> $request->get('pasesv'),
            'precisionpasesl'=> $request->get('precisionpasesl'),
            'precisionpasesv'=> $request->get('precisionpasesv'),
            'faltasl'=> $request->get('faltasl'),
            'faltasv'=> $request->get('faltasv'),
            'amarillasl'=> $request->get('amarillasl'),
            'amarillasv'=> $request->get('amarillasv'),
            'rojasl'=> $request->get('rojasl'),
            'rojasv'=> $request->get('rojasv'),
            'padelantadal'=> $request->get('padelantadal'),
            'padelantadav'=> $request->get('padelantadav'),
            'esquinal'=> $request->get('esquinal'),
            'esquinav'=> $request->get('esquinav')
            ]
        ]);
        return redirect('encuentros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = DB::table('encuentros')
                    ->join('paisesl','encuentros.idpaisl','=','paisesl.idl')
                    ->join('paisesv','encuentros.idpaisv','=','paisesv.idv')
                    ->select('encuentros.*','paisesl.imgl','paisesv.imgv','paisesl.sede','paisesl.idl','paisesv.idv')
                    ->where('encuentros.id',$id)
                    ->first();
        //return response()->json($dato);
        return view('encuentros.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = DB::table('encuentros')
                  ->join('paisesl','encuentros.idpaisl','=','paisesl.idl')
                  ->join('paisesv','encuentros.idpaisv','=','paisesv.idv')
                  ->select('encuentros.*','paisesl.*','paisesv.*')
                  ->where('encuentros.id',$id)
                  ->first();
        //return response()->json($dato);
        return view('encuentros.edit',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('encuentros')->where('id',$id)->update(
                        ['golesl'=> request()->get('golesl'),
                        'golesv'=> request()->get('golesv'),
                        'fecha'=> request()->get('fecha'),
                        'rematesl'=> request()->get('rematesl'),
                        'rematesv'=> request()->get('rematesv'),
                        'rematesarcol'=> request()->get('rematesarcol'),
                        'rematesarcov'=> request()->get('rematesarcov'),
                        'posesionl'=> request()->get('posesionl'),
                        'posesionv'=> request()->get('posesionv'),
                        'pasesl'=> request()->get('pasesl'),
                        'pasesv'=> request()->get('pasesv'),
                        'precisionpasesl'=> request()->get('precisionpasesl'),
                        'precisionpasesv'=> request()->get('precisionpasesv'),
                        'faltasl'=> request()->get('faltasl'),
                        'faltasv'=> request()->get('faltasv'),
                        'amarillasl'=> request()->get('amarillasl'),
                        'amarillasv'=> request()->get('amarillasv'),
                        'rojasl'=> request()->get('rojasl'),
                        'rojasv'=> request()->get('rojasv'),
                        'padelantadal'=> request()->get('padelantadal'),
                        'padelantadav'=> request()->get('padelantadav'),
                        'esquinal'=> request()->get('esquinal'),
                        'esquinav'=> request()->get('esquinav')]);
        return redirect('encuentros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('encuentros')->where('id',$id)->delete();
        return redirect('encuentros');
    }
}
