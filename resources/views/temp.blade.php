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
                            <img class="img-fluid" src="{{ asset('img/energom.png') }}" width="400" alt="">
                        </div>
                        <div class="col align-self-end d-flex flex-column" style="font-size: 16px;font-weight: bold;">
                            <div class="row">
                                {{--<div class="float-right align-self-end" style="float: right">--}}
                                    {{--<a href="tel:+78124567006" class="align-self-end" style="color: #fff;">(812) 456-70-06</a>--}}
                                {{--</div>--}}
                                <nav class="nav justify-content-center align-items-center">
                                    <a class="nav-link" href="tel:+78124567006" style="color: #fff;">(812) 456-70-06</a>
                                    <a class="nav-link">Главная</a>
                                    <a class="nav-link" href="#contacts" style="color: #fff;">Контакты</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center" style="height: 100vh;">
            <div class="col align-self-center">
                <h1 style="text-align: center;">Извините, на сайте проводятся регламентные работы</h1>
            </div>
        </div>
    </div>

    {{--Адрес--}}

    <div class="row my-3" style="background-color: #3da8e3;color: #fdfdfd;">
        <div class="container">
            <div class="row py-5 px-5" id="contacts">
                <div class="col">
                    <p style="font-size:1.5rem;font-weight: 600">Адрес:</p>
                    <p>196158, Санкт-Петербург, ул.Пулковская, д. 2, лит. А, пом. 63Н, оф.2</p><br>
                    Тел. (812) 456-70-06
                    e-mail: office@energotex.net

                    </p>
                </div>
                {{--<div class="col align-items-center">--}}
                    {{--<p style="font-size:1.5rem;font-weight: 600">Разделы</p>--}}
                      {{--<p>Контакты</p>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<p style="font-size:1.5rem;font-weight: 600">Мы в соцсетях</p>--}}

                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
