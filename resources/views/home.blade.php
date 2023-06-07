@extends('layout')

@section('banner')
    <div class="banner">
        <div class="banner_left_part_mobile">
            <div class="banner_list_container">
                <ul class="banner_list">
                    <li>Від виробника</li>
                    <li>За доступними цінами</li>
                    <li>Будь-якої складності</li>
                    <li>Широкий асортимент</li>
                    <li>Високоякісне художнє оформлення</li>
                    <li>Більше 1000 задоволених клієнтів з 2005 року</li>
                </ul>
            </div>
            <div class="three_advantages mobile">
                <div class="advantage">
                    <div class="logo_container">
                        <img class="advantage_logo_bus" src="/storage/images/svg/bus-svgrepo-com.svg" alt=""/>
                    </div>
                    <div class="advantage_text">
                        <div class="title_advantage_text">Доставка</div>
                        <div class="additional_text">Будь-куди. 10 грн/км</div>
                    </div>
                </div>
                <div class="advantage">
                    <div class="logo_container">
                        <img class="advantage_logo" src="/storage/images/svg/shovel-svgrepo-com.svg" alt=""/>
                    </div>
                    <div class="advantage_text">
                        <div class="title_advantage_text">Установка</div>
                        <div class="additional_text">Будь-яких комплектів</div>
                    </div>
                </div>
                <div class="advantage">
                    <div class="logo_container">
                        <img class="advantage_logo" src="/storage/images/svg/shield-check-white-svgrepo-com.svg" alt=""/>
                    </div>
                    <div class="advantage_text">
                        <div class="title_advantage_text">Гарантія</div>
                        <div class="additional_text">До 10 років</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_images">
            <img class="banner_image" src="/storage/images/banner_images/1.png" alt="" />
            <img class="banner_image" src="/storage/images/banner_images/2.png" alt="" />
        </div>
        <div class="three_advantages">
            <div class="advantage">
                <div class="logo_container">
                    <img class="advantage_logo_bus" src="/storage/images/svg/bus-svgrepo-com.svg" alt=""/>
                </div>
                <div class="advantage_text">
                    <div class="title_advantage_text">Доставка</div>
                    <div class="additional_text">Будь-куди. 10 грн/км</div>
                </div>
            </div>
            <div class="advantage">
                <div class="logo_container">
                    <img class="advantage_logo" src="/storage/images/svg/shovel-svgrepo-com.svg" alt=""/>
                </div>
                <div class="advantage_text">
                    <div class="title_advantage_text">Установка</div>
                    <div class="additional_text">Будь-яких комплектів</div>
                </div>
            </div>
            <div class="advantage">
                <div class="logo_container">
                    <img class="advantage_logo" src="/storage/images/svg/shield-check-white-svgrepo-com.svg" alt=""/>
                </div>
                <div class="advantage_text">
                    <div class="title_advantage_text">Гарантія</div>
                    <div class="additional_text">До 10 років</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section>
        <h2><a class="head" href="/catalog/popular">Найпопулярніші комплектації</a></h2>
        <div class="tabs_block">
            @foreach($popular_offers as $offer)
                <div class="tab">
                    <div class="intab_picture_container">
                        <img class="intab_picture" src={{ $offer->photo_path }} alt="" />
                        <a href="/catalog/popular">
                            <img class="star_svg_popular" src="/storage/images/svg/star-svgrepo-com.svg" alt=""/>
                        </a>
                    </div>
                    <div class="tab_title">{{ $offer->types->singular_title }} №{{ $offer->number }}</div>
                    <div class="tab_material">Матеріал: {{ $offer->material }}</div>
                    <ul class="tab_list">
                        @foreach(explode(', ', $offer->components) as $component)
                            <li>{{$component}}</li>
                        @endforeach
                    </ul>
                    @if(is_null($offer->sale_price))
                        <div class="price">{{ $offer->price }} ₴</div>
                    @else
                        <div class="sale_price_container">
                            <a href="/catalog/discounted"><div class="regular_price">{{ $offer->price }} ₴</div></a>
                            <div class="sale_price">{{ $offer->sale_price }} ₴</div>
                        </div>
                    @endif
                    <div class="order_button_container">
                        <a class="order_button" href="#">
                            Замовити
                            <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="custom_h2 with_line_above"><a class="head" href="/catalog/discounted">Акційні комплектації</a></h2>
        <div class="tabs_block">
            @foreach($discounted_offers as $offer)
                <div class="tab">
                    <div class="intab_picture_container">
                        <img class="intab_picture" src={{ $offer->photo_path }} alt="" />
                        @if(in_array($offer->id, $popular_offers_ids))
                            <a href="/catalog/popular">
                                <img class="star_svg_popular" src="/storage/images/svg/star-svgrepo-com.svg" alt=""/>
                            </a>
                        @endif
                    </div>
                    <div class="tab_title">{{ $offer->types->singular_title }} №{{ $offer->number }}</div>
                    <div class="tab_material">Матеріал: {{ $offer->material }}</div>
                    <ul class="tab_list">
                        @foreach(explode(', ', $offer->components) as $component)
                            <li>{{$component}}</li>
                        @endforeach
                    </ul>
                    <div class="sale_price_container">
                        <a href="/catalog/discounted"><div class="regular_price">{{ $offer->price }} ₴</div></a>
                        <div class="sale_price">{{ $offer->sale_price }} ₴</div>
                    </div>
                    <div class="order_button_container">
                        <a class="order_button" href="#">
                            Замовити
                            <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="separated_button_block">
            Перегляньте усі пропозиції в каталозі
            <a class="separated_button" href="/catalog">
                Перейти в каталог
                <img class="inline_svg_catalog" src="/storage/images/svg/cut_catalog.svg" alt=""/>
            </a>
        </div>
    </section>
@endsection
