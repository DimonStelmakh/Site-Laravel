@extends('layout')

@section('content')
    <h1>Каталог</h1>

    @if (sizeof($all_types) > 0)
        <h2>Оберіть категорію</h2>
        <div class="tabs_block">
            @foreach ($all_types as $type)
                <div class="tab shorter">
                    <?= $type; ?>
                </div>
            @endforeach
        </div>
    @else
        <h3>На жаль, каталоги не відображаються.
            <br>Скоріше за все, на сайті ведуться технічні роботи</h3>
    @endif

    <div class="separated_button_block">
        Повернутися назад
        <a class="separated_button shorter" href="/">
            На головну
            <img class="inline_svg_catalog" src="/storage/images/svg/home1-svgrepo-com.svg" alt=""/>
        </a>
    </div>
@endsection
