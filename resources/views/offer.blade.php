@extends('layout')

@section('content')
    <div class="offer">
        <div class="offer_photo">
            <img class="offer_full_picture" src="/storage/images/template.png" alt=""/>
        </div>
        <div class="offer_information">
            <div class="offer_title">
                <h2 class="h2 offer">Чорний №1</h2>
            </div>
            <div class="middle_level_offer">
                <form class="classic ofr" action="/thank_you" id="thank you" method="post">
                    @csrf
                    <button class="order_button offer">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </button>
                </form>
                <div class="price ofr">
                    11000₴
                </div>
            </div>
            <div class="offer_other_info">
                <div class="offer_infoblock">
                    <div class="tab_material">Матеріал: матеріал {{--{{ $offer->material }}--}}</div>
                    <ul class="tab_list">
                        {{--@foreach(explode(', ', $offer->components) as $component)--}}
                            <li>Компонент 1{{--{{$component}}--}}</li>
                            <li>Компонент 2{{--{{$component}}--}}</li>
                            <li>Компонент 3{{--{{$component}}--}}</li>
                            <li>Компонент 4{{--{{$component}}--}}</li>
                            <li>Компонент 5{{--{{$component}}--}}</li>
                            <li>Компонент 6{{--{{$component}}--}}</li>
                        {{--@endforeach--}}
                    </ul>
                </div>
                <div class="offer_infoblock two">
                    <div class="tab_material">Модифікації:</div>
                    <div class="drop-down_container">
                        <select class="drop-down_box purpose" name="Мета" id="purpose" form="thank you">
                            <option value="improve">Вдосконалити</option>
                            <option value="cheapen">Здешевити</option>
                        </select>
                    </div>
                    <input type="checkbox" id="sandstream" name="sandstream" value="piskostruy">
                    <label for="sandstream"> Піскоструйні літери (+1000₴)</label><br>
                    <input type="checkbox" id="wider flower garden" name="wider flower garden" value="shyrshyi kvitnyk">
                    <label for="wider flower garden"> Ширший квітник (+600₴)</label><br>
                    <input type="checkbox" id="vase" name="vase" value="vaza">
                    <label for="vase"> Ваза (+800₴)</label>
                </div>
            </div>
        </div>
    </div>
@endsection
