<?php

namespace App\Http\Controllers;

use App\Models\Posicione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosicioneController extends Controller
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
        $datos = DB::table('posiciones')
                        ->join('paisesl','posiciones.idpaisl','=','paisesl.idl')
                        ->select('posiciones.*','paisesl.imgl','paisesl.nombrel','paisesl.idl')
                        ->get();
        //return response()->json($datos);
        return view('posiciones.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posicione  $posicione
     * @return \Illuminate\Http\Response
     */
    public function show(Posicione $posicione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posicione  $posicione
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = DB::table('posiciones')
                  ->join('paisesl','posiciones.idpaisl','=','paisesl.idl')
                  ->select('posiciones.*','paisesl.imgl','paisesl.nombrel')
                  ->where('posiciones.id',$id)
                  ->first();
        //return response()->json($dato);
        return view('posiciones.edit',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posicione  $posicione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('posiciones')->where('id',$id)->update(
                        ['pj'=> request()->get('pj'),
                        'g'=> request()->get('g'),
                        'e'=> request()->get('e'),
                        'p'=> request()->get('p'),
                        'gf'=> request()->get('gf'),
                        'gc'=> request()->get('gc'),
                        'puntos'=> request()->get('puntos')]);
        return redirect('posiciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posicione  $posicione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posicione $posicione)
    {
        //
    }
}
