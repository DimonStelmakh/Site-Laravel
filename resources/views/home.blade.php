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
        <h2>Найпопулярніші комплектації</h2>
        <div class="tabs_block">
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №1</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="price">9500 ₴</div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="custom_h2 with_line_above">Акційні комплектації</h2>
        <div class="tabs_block">
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №2</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="sale_price_container">
                    <div class="regular_price">13000₴</div>
                    <div class="sale_price">11200 ₴</div>
                </div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №2</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="sale_price_container">
                    <div class="regular_price">13000₴</div>
                    <div class="sale_price">11200 ₴</div>
                </div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="tab">
                <img class="intab_picture" src="/storage/images/template_cut_lt.png" alt="" />
                <div class="tab_title">Чорний №2</div>
                <div class="tab_material">Матеріал: базальт</div>
                <ul class="tab_list">
                    <li>Стела зображеної форми</li>
                    <li>Портрет гравірований</li>
                    <li>ПІБ та роки гравіровані</li>
                    <li>Надгробна плита</li>
                    <li>Тумба</li>
                    <li>Квітник</li>
                </ul>
                <div class="sale_price_container">
                    <div class="regular_price">13000₴</div>
                    <div class="sale_price">11200 ₴</div>
                </div>
                <div class="order_button_container">
                    <a class="order_button" href="#">
                        Замовити
                        <img class="inline_svg_order" src="/storage/images/svg/cut_order.svg" alt=""/>
                    </a>
                </div>
            </div>
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
