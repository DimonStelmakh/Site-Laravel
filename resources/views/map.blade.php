@extends('layout')

@section('content')
    <div class="map_fullscreen">
        <img class="map" src="/storage/images/map.png" alt="м. Костопіль">
    </div>
    <div class="separated_button_block">
        Повернутися назад
        <a class="separated_button shorter" href="/">
            На головну
            <img class="inline_svg_catalog" src="/storage/images/svg/home1-svgrepo-com.svg" alt=""/>
        </a>
    </div>
@endsection
