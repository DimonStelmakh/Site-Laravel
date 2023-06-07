@extends('layout')

@section('content')
    <h1>Каталог</h1>

    @if (sizeof($all_types) > 0)
        <h2>Оберіть категорію</h2>
        <div class="tabs_block">
            @foreach ($all_types as $type)
                <div class="tab shorter">
                    <img class="intab_picture" src={{ $type->wrap_path }} alt="" />
                    <div class="tab_title shorther">{{ $type->title }}</div>
                    <div class="price shorther">Від {{ $type->getLowestPrice() ?? 0 }} ₴</div>
                    <div class="order_button_container shorther">
                        <a class="order_button" href="/catalog/{{ $type->eng_code }}">
                            Перейти
                            <img class="inline_svg_catalog" src="/storage/images/svg/cut_catalog.svg" alt=""/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3>На жаль, каталоги не відображаються.
            <br>Скоріше за все, на сайті ведуться технічні роботи</h3>
    @endif

    <div class="separated_button_block">
        Спеціальні пропозиції
        <div class="more_buttons_container">
            <a class="separated_button" href="/catalog/popular">
                Найпопулярніші
                    <img class="inline_svg_catalog" src="/storage/images/svg/star-svgrepo-com.svg" alt=""/>
            </a>
            <a class="separated_button" href="/catalog/discounted">
                Акційні
                <img class="inline_svg_catalog" src="/storage/images/svg/discount-svgrepo-com.svg" alt=""/>
            </a>
        </div>
    </div>
    <div class="separated_button_block">
        Повернутися назад
        <a class="separated_button shorter" href="/">
            На головну
            <img class="inline_svg_catalog" src="/storage/images/svg/home1-svgrepo-com.svg" alt=""/>
        </a>
    </div>
@endsection
