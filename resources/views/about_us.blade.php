@extends('layout')

@section('content')
    <section>
        <h1>Про нас</h1>
        <div class="main_tab">
            <div class="half_tab">
                <img class="aboutus_image" src="/storage/images/about/1.jpg" alt="" />
                <div class="aboutus_text">
                    Наша фірма займається виготовленням та встановленням пам’ятників з 2005 року.
                    За цей час ми якісно реалізували незліченну кількість проєктів, від найдешевших до найдорожчих.
                    Ми пропонуємо широкий вибір пам’ятників по каталогах, а також виконуємо індивідуальні замовлення.
                    Наша особливість також в тому, що керівником є художник з багаторічним досвідом,
                    який особисто виконує гравірування портретів.
                </div>
            </div>
            <div class="artificial_space"></div>
            <div class="half_tab">
                <div class="aboutus_text">
                    Наші принципи. По-перше, це совісність. Ми всю роботу виконуємо виключно на совість,
                    не допускаючи халтуру і впевнюючись у якості виконаних робіт. По-друге, гнучкість.
                    До замовлення можна вносити зміни допоки відповідні його елементи не пішли в роботу.
                    По-третє, універсальність. Ми можемо виконати проєкт абсолютно будь-якої складності,
                    це може лише потребувати більше часу.
                </div>
                <img class="aboutus_image" src="/storage/images/about/2.jpg" alt="" />
            </div>
        </div>
        <div class="separated_button_block">
            Перегляньте наші пропозиції в каталозі
            <a class="separated_button" href="/catalog">
                Перейти в каталог
                <img class="inline_svg_catalog" src="/storage/images/svg/cut_catalog.svg" alt=""/>
            </a>
        </div>
    </section>
@endsection
