<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        return view('muebleria.user.productos.frias')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('muebleria.admin.productos.productos')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validateData = $this->validate($request, [
            'nombre_producto' => 'required',
            'precio_producto' => 'required',
            'archivo_producto' => 'required',
            'categoria_producto' => 'required'
        ]);*/

        $producto = new Productos();
        $producto->nombre = $request->input('nombre_producto');
        $producto->Descripcion = $request->input('precio_producto');
        $imagen = $request->file('imagen');
        if($imagen){
            $imagen_ruta = time().$imagen->getClientOriginalName();
            \Storage::disk('images')->put($imagen_ruta, \File::get($imagen));
            $producto->imagen = $imagen_ruta;
        }

        $producto->id_categoria = $request->input('categoria_producto');

        $producto->save();

        return redirect('home');

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
        //
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

    public function getImage($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function calientes()
    {
        $productos = Productos::where('id_categoria', '=', 2)->get();
        return view('muebleria.user.productos.caliente')->with('productos', $productos);
    }

    public function categoriasAd(){

    }

}
