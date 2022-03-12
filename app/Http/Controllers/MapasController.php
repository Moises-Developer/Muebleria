<?php

namespace App\Http\Controllers;

use App\Models\Mapas;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MapasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('muebleria.user.ubicacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapa = Mapas::where('id', '=', 1)->get();
        $sucursal = Sucursal::all();
        return view('muebleria.admin.ubicacion.index')->with('mapas', $mapa)->with('sucursales', $sucursal);
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

    public function getDataMap(){
        $mapa = Mapas::where('id', '=', 1)->get();
        return json_encode($mapa);
    }

    public function getImage($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

}
