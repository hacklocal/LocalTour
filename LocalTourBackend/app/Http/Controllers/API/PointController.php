<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PointController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return response()->json($request);
        $nome = $request->input('nome', '');
        $desc = $request->input('desc', '');
        $foto = $request->input('foto', '');
        $pos = $request->input('pos', '');
        $cat = $request->input('cat', '');
        $user = $request->input('user', '2');
        //dd($nome, $desc, $foto);
        DB::table('points')->insert(
            ['nome' => $nome, 'descrizione' => $desc, 'foto' => $foto, 'posizione' => $pos, 'categoria' => $cat, 'user' => $user]
        );

        return response()->json('ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $points = DB::table('points')->get();

        return response()->json($points);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
