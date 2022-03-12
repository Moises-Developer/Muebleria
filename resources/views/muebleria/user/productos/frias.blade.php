@extends('layouts.app')
@section('content')
    <div data-role="content">
        <ul data-role="listview" style="margin: 0rem; display: flex; flex-direction: column; margin-top: 2.5rem;">
            @foreach($productos as $producto)
                <li style="width: 100%;">
                    <a href="#">
                        @if(\Storage::disk('images')->has($producto->imagen))
                            <img src="{{ url('imagenes').'/'.$producto->imagen }}" alt="bebida1">
                        @endif
                        <p>{{ $producto->nombre }}</p>
                        <p>{{ $producto->Descripcion }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
