    <div class="footer">
        <div class="footer_content">
            <div class="footer_content_part left">
                <div class="base_text">Адреса прийому замовлень і місцезнаходження потужностей виробництва:</div>
                <div class="bold_text">м. Костопіль, вул. Нечая, 22</div>
                <a class="button_map" href="/map">
                    Переглянути на мапі
                    <img class="inline_svg_mappin" src="/storage/images/svg/cut_map-pin.svg" alt="" />
                </a>
                <div class="base_text">
                    <div class="base_with_space">Графік роботи:</div>
                </div>
                <div class="bold_text">ПН-ПТ: 09:00 - 18:00<br>СБ: 10:00 - 16:00</div>
            </div>
            <div class="footer_content_part center">
                <div class="circles_line">
                    <img class="circle" src="/storage/images/svg/cut_phone_in_sircle.svg" alt="" />
                    <img class="circle" src="/storage/images/svg/telegram-svgrepo-com.svg" alt="" />
                    <img class="circle" src="/storage/images/svg/viber-color-svgrepo-com.svg" alt="" />
                </div>
                <div class="bold_text">+38 (097) 235 73 87</div>
                <div class="circles_line">
                    <img class="circle single" src="/storage/images/svg/cut_phone_in_sircle.svg" alt="" />
                </div>
                <div class="bold_text">+38 (097) 481 60 45</div>
                <div class="callback desktop">
                    <form id="callback" action="/submitted" method="post">
                        @csrf
                        <div class="callback_text">Замовте зворотний дзвінок</div>
                        <div class="callback_field">
                            <input type="number" class="callback_field_text" name="number"
                                   placeholder="Введіть номер телефону" value="">
                            <input type="submit" class="callback_button" value="Чекаю&#10;дзвінка!">
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer_content_part right">
                <div class="button_container">
                    <a class="button_facebook" href="https://www.facebook.com/profile.php?id=100085148445856" target="_blank">
                        Facebook сторінка
                        <img class="inline_svg_facebook" src="/storage/images/svg/cut_facebook_inverted.svg" alt="" />
                    </a>
                </div>
                <div class="facebook_images">
                    <div class="facebook_images_row first">
                        <img class="facebook_image" src="/storage/images/ready/1.jpg" alt="" />
                        <img class="facebook_image" src="/storage/images/ready/2.jpg" alt="" />
                    </div>
                    <div class="facebook_images_row second">
                        <img class="facebook_image" src="/storage/images/ready/3.png" alt="" />
                        <img class="facebook_image" src="/storage/images/ready/4.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="mobile_big_container">
                <div class="footer_mobile_column left">
                    <div class="address_container">
                        <div class="base_text">Адреса прийому замовлень і місцезнаходження потужностей виробництва:</div>
                        <div class="bold_text">м. Костопіль, вул. Нечая, 22</div>
                        <a class="button_map">
                            Переглянути на мапі
                            <img class="inline_svg_mappin" src="/storage/images/svg/cut_map-pin.svg" alt="" />
                        </a>
                    </div>

                    <div class="numbers_container">
                        <div class="circles_line">
                            <img class="circle" src="/storage/images/svg/cut_phone_in_sircle.svg" alt="" />
                            <img class="circle" src="/storage/images/svg/telegram-svgrepo-com.svg" alt="" />
                            <img class="circle" src="/storage/images/svg/viber-color-svgrepo-com.svg" alt="" />
                        </div>
                        <div class="bold_text numbers">+38 (097) 235 73 87</div>
                        <div class="circles_line">
                            <img class="circle single" src="/storage/images/svg/cut_phone_in_sircle.svg" alt="" />
                        </div>
                        <div class="bold_text numbers">+38 (097) 481 60 45</div>
                    </div>



                </div>
                <div class="footer_mobile_column right">
                    <div class="worktime">
                        <div class="base_text">Графік роботи:</div>
                        <div class="bold_text">ПН-ПТ: 09:00 - 18:00<br>СБ: 10:00 - 16:00</div>
                    </div>
                    <div class="button_container">
                        <a class="button_facebook" href="https://www.facebook.com/profile.php?id=100085148445856" target="_blank">
                            Facebook сторінка
                            <img class="inline_svg_facebook" src="/storage/images/svg/cut_facebook_inverted.svg" alt="" />
                        </a>
                    </div>
                    <div class="facebook_images">
                        <div class="facebook_images_row first">
                            <img class="facebook_image" src="/storage/images/ready/1.jpg" alt="" />
                            <img class="facebook_image" src="/storage/images/ready/2.jpg" alt="" />
                        </div>
                        <div class="facebook_images_row second">
                            <img class="facebook_image" src="/storage/images/ready/3.png" alt="" />
                            <img class="facebook_image" src="/storage/images/ready/4.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="callback mobile">
                <form id="callback" action="/submitted" method="post">
                    @csrf
                    <div class="callback_text">Замовте зворотний дзвінок</div>
                    <div class="callback_field">
                        {{--<div class="callback_field_text">Введіть номер телефону</div>
                        <a class="callback_button" href="#">Чекаю<br>дзвінка!</a>--}}
                        <input type="number" class="callback_field_text" name="number"
                               placeholder="Введіть номер телефону" value="">
                        <input type="submit" class="callback_button" value="Чекаю&#10;дзвінка!">
                    </div>
                </form>
            </div>
        </div>
    </div>
