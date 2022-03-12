@extends('layouts.administrador')
@section('content')
    <h2 style="text-align: center;">Productos Administrador</h2>
    <div data-role="content">
        <form data-ajax="false" enctype="multipart/form-data" action="{{ route('productos.store') }}" method="POST">

            <div>
                @csrf
                <label for="nombre_producto">Nombre:
                    <input type="text" name="nombre_producto">
                </label>
            </div>
            <div>
                <label for="">Descripcion:
                    <input type="text" name="precio_producto">
                </label>
            </div>
            <div>
                <label for="imagen">Imagen:
                    <input type="file" name="imagen" id="imagen">
                </label>
            </div>
            <div>
                <label for="">Categorias:
                    <select name="categoria_producto" id="">
                        <option value="" disabled selected>Ingresa una categoria</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <br><br>
            <div style="display: flex; align-items: center; flex-direction: column;">
                <button style="width: 60%;">Ingresar producto</button>
            </div>
        </form>
    </div>
@endsection
