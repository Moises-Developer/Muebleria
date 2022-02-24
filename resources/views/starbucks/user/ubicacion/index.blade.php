@extends('layouts.app')
@section('content')
    <div data-role="content">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1643327787564!6m8!1m7!1s647_AdurXxBejMmF2P0yLA!2m2!1d20.75130619731324!2d-103.4211229999677!3f27.62664422418817!4f8.318813575816364!5f1.791039753234764"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div data-role="content">
        <div id="map" style="width:100%; height:300px; border-radius: 1rem"></div>
    </div>
@endsection
