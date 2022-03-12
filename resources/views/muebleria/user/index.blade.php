@extends('layouts.app')
@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
    <div data-role="content">
        <img src="{{ asset('imagenes/logo.jpg') }}" width="100%" alt="logo">
    </div>
    @else
        <h2>USUARIO NO AUTENTICADO</h2>
    @endif
@endsection
