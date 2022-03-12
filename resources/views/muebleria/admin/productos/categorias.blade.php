@extends('layouts.administrador')
@section('content')
    <h1 style="text-align: center;">Categorias Administrador</h1>
    <div data-role="content">
        <form action="{{ route('categorias.store') }}" method="POST">
            <br>
            <div>
                @csrf
                <label for="categoria">Nueva Categoria:
                    <input type="text" name="categoria">
                </label>
            </div>
            <br><br>
            <div style="display: flex; flex-direction: column; align-items: center;">
                <button style="width: 65%;">Ingresa Nueva Categoria</button>
            </div>
        </form>
    </div>

@endsection
