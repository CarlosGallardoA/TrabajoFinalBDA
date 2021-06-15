<?php

namespace App\Http\Controllers;

use App\Models\Jugadore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JugadoreController extends Controller
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
           
        //
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
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = DB::table('paisesl')
                        ->join('jugadores','paisesl.idl','=','jugadores.id')
                        ->select('paisesl.*','jugadores.*')
                        ->where('paisesl.idl',$id)->first();
        return view('jugadores.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = DB::table('jugadores')
                  ->join('paisesl','jugadores.id','=','paisesl.idl')
                  ->select('jugadores.*','paisesl.imgl','paisesl.nombrel')
                  ->where('jugadores.id',$id)
                  ->first();
        //return response()->json($dato);
        return view('jugadores.edit',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('jugadores')->where('id',$id)->update(
                        ['jugador1'=> request()->get('jugador1'),
                        'jugador2'=> request()->get('jugador2'),
                        'jugador3'=> request()->get('jugador3'),
                        'jugador4'=> request()->get('jugador4'),
                        'jugador5'=> request()->get('jugador5'),
                        'jugador6'=> request()->get('jugador6'),
                        'jugador7'=> request()->get('jugador7'),
                        'jugador8'=> request()->get('jugador8'),
                        'jugador9'=> request()->get('jugador9'),
                        'jugador10'=> request()->get('jugador10'),
                        'jugador11'=> request()->get('jugador11')]);
        return redirect('jugadores/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugadore $jugadore)
    {
        //
    }
}
