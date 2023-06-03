@extends('layout')

@section('content')
    <section>
        <h1>Каталог</h1>

        @if (sizeof($offers) > 0)
            <h2>{{$type_name}} пам'ятники</h2>
            <div class="tabs_block">
                @foreach ($offers as $offer)
                    <div class="tab shorter">
                        <?= $offer; ?>
                    </div>
                @endforeach
            </div>
            <div class="button_load_more_container">
                <a class="button_load_more">
                    Завантажити ще
                    <img class="central_buttons_svg" src="/storage/images/svg/cut_arrow-down.svg" alt="" />
                </a>
            </div>
        @else
            <h3>На жаль, пропозиції у цій категорії зараз відсутні
                <br>або на сайті ведуться технічні роботи</h3>
        @endif

        <div class="separated_button_block">
            Інші категорії пам'ятників
            <a class="separated_button" href="/catalog">
                Переглянути
                <img class="inline_svg_catalog" src="/storage/images/svg/cut_catalog.svg" alt=""/>
            </a>
        </div>

    </section>
@endsection
