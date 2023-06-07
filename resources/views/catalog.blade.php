@extends('layout')

@section('content')
    <section>
        <h1>Каталог</h1>

        @if (sizeof($type->offers) > 0)
            <h2>{{$type->title}} пам'ятники</h2>
            <div class="tabs_block">
                @foreach ($type->offers as $offer)
                    <div class="tab shorter">
                        <div class="intab_picture_container">
                            <img class="intab_picture" src={{ $offer->photo_path }} alt="" />
                            @if(in_array($offer->id, $popular_offers_ids))
                                <a href="/catalog/popular">
                                    <img class="star_svg_popular" src="/storage/images/svg/star-svgrepo-com.svg" alt=""/>
                                </a>
                            @endif
                        </div>
                        <div class="tab_title shorther">{{ $type->singular_title }} №{{ $offer->number }}</div>
                        @if(is_null($offer->sale_price))
                            <div class="price shorther">{{ $offer->price }} ₴</div>
                        @else
                            <div class="sale_price_container">
                                <a href="/catalog/discounted"><div class="regular_price">{{ $offer->price }} ₴</div></a>
                                <div class="sale_price">{{ $offer->sale_price }} ₴</div>
                            </div>
                        @endif
                        <div class="order_button_container shorther">
                            <a class="order_button" href="#">
                                Замовити
                                <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if (sizeof($type->offers) > 12)
                <div class="button_load_more_container">
                    <a class="button_load_more">
                        Завантажити ще
                        <img class="central_buttons_svg" src="/storage/images/svg/cut_arrow-down.svg" alt="" />
                    </a>
                </div>
            @endif
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
