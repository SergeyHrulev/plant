@extends('layouts.appn')
@section('content')
    <div class="div" style="position: absolute;
     top: 0;
      background-image: url('img/bg1.jpg');
       background-repeat: no-repeat;
        background-size: cover;
         min-height: 800px;
         width: 100%;opacity: 0.8;">
    </div>
    <div class="container" style="min-height: 800px;">
        <div class="row">
            <div class="col">
                <div class="container" style="color: #fff;">
                    <div class="row pt-5 pb-2 align-top">
                        <div class="col align-self-start">
                            <img src="{{ asset('img/energom.png') }}" width="400" alt="">
                        </div>
                        <div class="col align-self-end d-flex flex-column" style="font-size: 16px;font-weight: bold;">
                            <div class="row">
                                <div class="float-right align-self-end" style="float: right">
                                    <a href="tel:+78124567006" class="align-self-end" style="color: #fff;">(812) 456-70-06</a>
                                </div>
                                <nav class="nav justify-content-center align-items-center">
                                    <a class="nav-link">Главная</a>
                                    <a class="nav-link active">Продукция</a>
                                    <a class="nav-link">О компании</a>
                                    <a class="nav-link">Проекты</a>
                                    <a class="nav-link">Контакты</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 py-4">
                <h2 style="font-size: 3rem;margin: 2rem 0;font-weight: 600;color: #4d4d4d">Продукция</h2>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('img/zpr.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Запорная арматура</h5>
                        <p class="card-text">
                            К данной категории относят задвижки и вентили. В зависимости от диаметра трубопровода и функциональных особенностей конкретной системы подбирают необходимые элементы. Если диаметр системы не превышает 125 мм, то рекомендуется установка вентилей, при большем диаметре — задвижки. При этом предусмотрено использование обоих типов, если диаметр трубопровода имеет параметры 70 …125 мм.

                            Запорная арматура, установленная на трубопроводной сети, всегда должна находиться в одном из двух положений — либо в рабочем (открытом), либо в закрытом.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('img/lp.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Регулировочное оборудование</h5>
                        <p class="card-text">
                            Поток рабочей среды в трубопроводе контролируется с помощью специального оборудования. Регулирование движения масс в системе происходит с помощью регулировочных вентилей различной конфигурации. От запорных вентилей данные элементы отличаются особенностью строения — профилем седла и клапана.

                            Для установок по спуску воды из рабочей системы, при выводе дренажа и для профилактических продувок сети устанавливают запорный и регулирующий вентили.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('img/pred.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Предохранительное оборудование</h5>
                        <p class="card-text">
                            В целях технической безопасности и для предотвращения аварийных ситуаций перед любыми видами питаемых агрегатов предусмотрена установка клапана, задача которого — предотвратить полное опустошение устройства в условиях нестандартной ситуации и обеспечить поддержку стабильного давления в сети. Обратные клапаны должны обладать высшим уровнем надежности и безопасности, поэтому, чтобы при эксплуатации оборудования человек не мог повлиять негативным образом на работу системы, шпинделя данного элемента не выводят за пределы корпуса.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--О компании--}}
    <div class="container my-5 py-5" style="border-bottom: #383d41 dotted 2px; border-top: #383d41 dotted 2px;">
        <div class="row">
            <h2 style="font-size: 3rem;margin: 2rem 0;font-weight: 600;color: #4d4d4d">О компании</h2>
            <p style="font-size: 14px;line-height: 2;">ООО «Энергомаштехнология» осуществляет поставку промышленной трубопроводной арматуры не только на гражданские объекты, но и на объекты предприятий атомной отрасли.</p><p>
                Атомная электростанция представляет собой современное сложное производство с высоким уровнем опасности. Трубопроводная сеть АЭС является важной частью всей станции, к её надёжности предъявляются самые высокие требования.
            </p>
        </div>
    </div>
{{--Тендеры--}}
    <div class="container">
        <div class="row">
            <div class="col-12 my-2 py-3">
                <h2 style="font-size: 3rem;margin: 2rem 0;font-weight: 600;color: #4d4d4d">Проекты</h2>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
        </div>
    </div>


    {{--Адрес--}}

    <div class="row my-3" style="background-color: #3da8e3;color: #fdfdfd;">
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <p style="font-size:1.5rem;font-weight: 600">Адрес:</p>
                <p>196158, Санкт-Петербург, ул.Пулковская, д. 2, лит. А, пом. 63Н, оф.2</p><br>
                Тел. (812) 456-70-06
                e-mail: office@energotex.net

                </p>
            </div>
            <div class="col">
                <p style="font-size:1.5rem;font-weight: 600">График работы:</p>
                <p>пн-пт: с 9:00 до 18:00</p>
            </div>
            <div class="col">
                <p style="font-size:1.5rem;font-weight: 600">Главная</p>
                <p>Продукция</p>
                <p>О компании</p>
                <p>Проекты</p>
                <p>Контакты</p>
            </div>
            <div class="col">
                <p style="font-size:1.5rem;font-weight: 600">Продукция:</p>
                <p>Трубы</p>
                <p>Трубы</p>
                <p>Трубы</p>
                <p>Трубы</p>
            </div>
            <div class="col">
                <p style="font-size:1.5rem;font-weight: 600">Мы в соцсетях</p>

            </div>
        </div>
    </div>
    </div>
    @endsection
