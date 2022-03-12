@extends('layouts.administrador')
@section('content')
    <h1 style="text-align: center;">Administrador Ubicacion</h1>
    <hr>
    <div data-role="content">
        <div>
            <h2 style="text-align: center;">Cambiar Ubicacion Del Mapa</h2>
            <br><br>
            @foreach($mapas as $mapa)
            <form action="" method="POST">
                <div>
                    <label for="">Latitud
                        <input type="number" value="{{ $mapa->latitud }}">
                    </label>
                </div>
                <div>
                    <label for="">Longitud
                        <input type="number" value="{{ $mapa->longitud }}">
                    </label>
                </div>
                <div>
                    <label for="">Cantidad De Zoom:
                        <input type="number" value="{{ $mapa->zoom }}">
                    </label>
                </div>
                <div>
                    <label for="">Imagen:
                        <input type="file" value="{{ $mapa->imagen }}">
                    </label>
                </div>
                <br><br>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <button style="width: 65%;">Cambiar Ubicacion</button>
                </div>
            </form>
        </div>
        <br><hr><br>
        <div>
            <h2 style="text-align: center;">Cambiar Ubicacion De La Sucursal</h2>
            <br><br>
            <form action="{{ url('admin/sucursal') }}" method="GET">
                <div>
                    <label for="">Numero de Sucursal:
                        <select name="sucursal" id="">
                            <option value="" disabled selected>Ingresa Sucursal</option>
                            @foreach($sucursales as $sucursal)
                                <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <br><br>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <button style="width: 65%;">Cambiar Sucursal</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection
