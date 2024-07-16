<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>NuraGroup</title>
    <meta property="og:title" content="NuraLight Nura Nurauz">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="{{asset('front/assets/splide.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{asset('front/temp.css')}}">
    <link rel="stylesheet" href="{{asset('front/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/mead.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/mobile.css')}}">
</head>
<style>
    .preloader {

        background-color: #3c79bf;
        width: 100%;
        height: 100%;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0px;
        left: 0px;
    }

    .preloader img {
        -webkit-animation: preload 2.7s infinite;
        animation: preload 2.7s infinite;
    }




    @-webkit-keyframes preload {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);

        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);

        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);

        }
    }

    @keyframes preload {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);

        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);

        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);

        }
    }
</style>

<body>
<div class="preloader"><img src="front/assets/preload.svg" alt=""></div>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="logo">
                <img src="front/local/templates/texx/img/logo.svg" alt="" id="nura">
            </div>
            <ul id="navs" class="animate__animated animate__fadeInDown">
                <li>
                    <a onclick="perexod()">{{$menu['brend']}}</a>
                </li>
                <li>
                    <a onclick="allPer(1)">{{$menu['haqimizda']}}</a>
                </li>
                <li>
                    <a onclick="allPer(2)">{{$menu['raqam']}}</a>
                </li>
                <li>
                    <a onclick="allPer(3)">{{$menu['jamoa']}}</a>
                </li>
                <li>
                    <a onclick="allPer(4)">{{$menu['mijoz']}}</a>
                </li>
                <li>
                    <a onclick="allPer(5)">{{$menu['yangilik']}}</a>
                </li>
                <li>
                    <a onclick="allPer(7)">{{$menu['kontakt']}}</a>
                </li>
            </ul>
            <h2 style="position: relative; top: 5px; font-size: 18px;"> <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.10938 17.9219H5.21875V19.3281H6.625V9.48438H5.21875V10.8906H3.8125V10.1875C3.8125 5.89689 7.28214 2.40625 11.5469 2.40625C15.8116 2.40625 19.2812 5.89689 19.2812 10.1875V10.8906H17.875V9.48438H16.4688V19.3281H17.875V17.9219H19.2812V20.0781C19.2812 21.2412 18.335 22.1875 17.1719 22.1875H13.5353C13.2451 21.3691 12.4635 20.7812 11.5469 20.7812C10.3838 20.7812 9.4375 21.7275 9.4375 22.8906C9.4375 24.0537 10.3838 25 11.5469 25C12.4635 25 13.2451 24.4121 13.5353 23.5938H17.1719C19.1104 23.5938 20.6875 22.0166 20.6875 20.0781V17.8009C21.5059 17.5107 22.0938 16.7291 22.0938 15.8125V13C22.0938 12.0834 21.5059 11.3018 20.6875 11.0116V10.1875C20.6875 5.12148 16.587 1 11.5469 1C6.50673 1 2.40625 5.12148 2.40625 10.1875V11.0116C1.58786 11.3019 1 12.0834 1 13V15.8125C1 16.9756 1.94627 17.9219 3.10938 17.9219ZM11.5469 23.5938C11.1592 23.5938 10.8438 23.2783 10.8438 22.8906C10.8438 22.5029 11.1592 22.1875 11.5469 22.1875C11.9346 22.1875 12.25 22.5029 12.25 22.8906C12.25 23.2783 11.9346 23.5938 11.5469 23.5938ZM20.6875 13V15.8125C20.6875 16.2002 20.3721 16.5156 19.9844 16.5156H17.875V12.2969H19.9844C20.3721 12.2969 20.6875 12.6123 20.6875 13ZM2.40625 13C2.40625 12.6123 2.72167 12.2969 3.10938 12.2969H5.21875V16.5156H3.10938C2.72167 16.5156 2.40625 16.2002 2.40625 15.8125V13Z" fill="white" stroke="white" stroke-width="1" />
                </svg>
                <span style="position: relative; top: -7px">(95) 476 76 76</span>
            </h2>
        </div>
    </div>
</header>
<div class="assets-preload">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <path id="arrow-left-a" d="M0 3h23.502V0H0v3z"></path>
            <path id="arrow-left-b" d="M0 7.01l-1.061-1.06-1.059 1.06 1.059 1.06L0 7.01zm5.939-8.07l-7 7.01L1.06 8.07l7-7.01L5.94-1.06zm-7 9.13l6.994 7.005 2.123-2.12L1.06 5.95-1.06 8.07z">
            </path>
            <path id="arrow-right-a" d="M0 3h23.502V0H0v3z"></path>
            <path id="arrow-right-b" d="M0 7.01l-1.061-1.06-1.059 1.06 1.059 1.06L0 7.01zm5.939-8.07l-7 7.01L1.06 8.07l7-7.01L5.94-1.06zm-7 9.13l6.994 7.005 2.123-2.12L1.06 5.95-1.06 8.07z">
            </path>
        </defs>
        <symbol id="arrow-left" viewbox="0 0 27 17">
            <desc>Created using Figma</desc>
            <use xlink:href="#arrow-left-a" transform="translate(3 7)"></use>
            <use xlink:href="#arrow-left-b" transform="translate(3 1.508)"></use>
        </symbol>
        <symbol id="arrow-right" viewbox="0 0 27 17">
            <desc>Created using Figma</desc>
            <use xlink:href="#arrow-right-a" transform="rotate(-180 12 5)"></use>
            <use xlink:href="#arrow-right-b" transform="rotate(-180 12 7.746)"></use>
        </symbol>
    </svg>
</div>
<div class="overflow-wrapper" style="display: none;">

    <div class="counter-navigate">
        <p id="current-page">01</p>
        <div class="counter-line" id="counter-line"></div>
        <p id="last-page">9</p>
    </div>
    <div class="main-slider">

        <div class="fixed-slider-arrow"><a href="" class="arrow prev">
                <svg style="filter: invert(72%) sepia(65%) saturate(7475%) hue-rotate(165deg) brightness(100%) contrast(101%)" viewbox="0 0 100 100" class="svgico arrow-icon">
                    <use xlink:href="#arrow-left"></use>
                </svg></a><a href="" class="arrow next">
                <svg style="filter: invert(72%) sepia(65%) saturate(7475%) hue-rotate(165deg) brightness(100%) contrast(101%)" viewbox="0 0 100 100" class="svgico arrow-icon">
                    <use xlink:href="#arrow-right"></use>
                </svg></a>
        </div>
        <div class="fixed-slider-arrow lang">
            <ul>
                <li <?
                    if ($c == "en")
                        echo "class='active'";
                    ?>>
                    <a onclick="addCookie('ens')" href="?lan=en">EN</a>

                </li>
                <li <?
                    if ($c == "ru")
                        echo "class='active'";
                    ?>>
                    <a onclick="addCookie('rus')" href="?lan=ru">RU</a>
                </li>
                <li <?
                    if ($c == "uz")
                        echo "class='active'";
                    ?>>
                    <a onclick="addCookie('uzs')" href="?lan=uz"> UZ</a>

                </li>
            </ul>
        </div>

        <div class="fixed-slider-counter">
            <span class="slider-current">01</span>

            <span class="slider-length">505</span>

            <img src="front/toboto.svg" style="position: fixed; width: 12px; width: 0.8vw; top: 23%;
left: 10%;
" alt="">

        </div>

        <div class="owl-carousel fixed-slider no-dots">

            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content animate__animated  animate__fadeInLeft">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid abs-container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text_content">
                                <h1>Nura Group <br>
                                    {{$header['title1']}}<br>
                                    {{$header['uzb']}}
                                </h1>

                                <p>
                                    {{$header['content1']}} <br>
                                    {{$header['content2']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mainpage" class="main-content">
        <div class="main-container">
            <section class="first">
                <div class="next-block">
                    <div class="name animate__animated animate__fadeInUp">{{$brend['brendlar']}}</div><a href="" class="link next-main-link active">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF" />
                        </svg>
                    </a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content">
                    <div class="section-container">
                        <div class="row col-container grid-mini animate__animated">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-container">
                                <div class="slide-sidebar">
                                    <p class="kok-title title_blue">{{$brend['brendlar']}}</p><a href="about/company/index.htm" class="bottom-link">

                                    </a>
                                </div>
                            </div>

                            <div class="grid-alert col-lg-9 col-md-9">
                                <div class="grid-img"> <img src="front/icons/1.svg" alt="" class="chint" data-modal="chint" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/3.svg" alt="" class="nuraLi" data-modal="nuraLi" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/4.svg" alt="" class="readray" data-modal="readray" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/2.svg" alt="" class="nuraEl" data-modal="nuraEl" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/5.svg" alt="" class="tekfor" data-modal="tekfor" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/6.svg" alt="" class="novatek" data-modal="novatek" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/7.svg" alt="" class="kbt" data-modal="kbt" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/8.svg" alt="" class="mutlusan" data-modal="mutlusan" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/10.svg" alt="" class="onka" data-modal="onka" id="imgtab"></div>
                                <div class="grid-img"> <img src="front/icons/9.svg" alt="" class="eaton" data-modal="eaton" id="imgtab"></div>
                            </div>
                        </div>
                    </div>

                    <div class="next-block">
                        <div class="name">{{$about['biz']}}</div><a href="" class="link next-main-link">
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF" />
                            </svg></a>
                        <div class="helper-ui-text">{{$sc}}</div>
                    </div>
            </section>
            <section class="fullscreen">
                <div class="content bg">
                    <div class="section-container">
                        <div class="onas fadeInBottom" id="onas">
                            <div class="head row">
                                <div class="col-md-3">
                                    <h1 class="title_blue">{{$about['biz']}}</h1>
                                </div>
                                <div class="col-md-7 txt_my animate__animated ">
                                    <p>{{$about['content1']}} </p>
                                    <span class="mt-5">
{{$about['content2']}}
</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$numbers['raqam']}}</div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF" />
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content">
                    <div class="section-container">
                        <div class="chisla" id="chisla">
                            <div class="head animate__animated">
                                <div class="col">
                                    <h1 class="title_blue">
                                        Nura Group <br>
                                        {{$numbers['raqamlarda']}}
                                    </h1>
                                </div>
                                <div class="col ">
                                    <div class="item">
                                        <div class="fl">
                                            <img src="front/./images/square.svg" alt="">
                                            <span class="counter" data-target="4000"></span>
                                        </div>
                                        <small>{{$numbers['info1']}}</small>
                                    </div>
                                    <div class="item ">
                                        <div class="fl">
                                            <img src="front/./images/square.svg" alt="">
                                            <span style="display: flex; align-items: flex-end; "> <span class="counter" data-target="14">-10</span>
<p>{{$numbers['info2']}}</p>
</span>

                                        </div>
                                        <small>{{$numbers['info3']}}</small>
                                    </div>
                                    <div class="item ">
                                        <div class="fl">
                                            <img src="front/./images/square.svg" alt="">
                                            <span class="counter" data-target="3000"></span>
                                        </div>
                                        <small>{{$numbers['info4']}}</small>
                                    </div>
                                    <div class="item ">
                                        <div class="fl">
                                            <img src="front/./images/square.svg" alt="">
                                            <span class="counter" data-target="8">-10</span>
                                        </div>
                                        <small>{{$numbers['info5']}}</small>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$team}}</div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF"></path>
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen ">
                <div class="content bg">
                    <div class="section-container">


                        <div class="group animate__animated" id="group">
                            <div class="head">
                                <div class="col">
                                    <h1 class="title_blue">
                                        {{$team}}
                                    </h1>
                                </div>
                                <div class="col" style="position: relative;">

                                    <div class="cards">
                                        <style>
                                            .mySlides {
                                                display: none
                                            }
                                        </style>
                                        @foreach($teams as $t)
                                            <div class="card mySlides animate__animated animate__fadeInRight" style="display: block;">
                                                <img src="{{URL::to($t->img)}}" alt="">
                                                <div class="text">
                                                    <h3>{{$t->$name_team}}</h3>
                                                    <p class="oriq">{{$t->$info_team}}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="slide-buttons" style="position: absolute;">
                                        <button onclick="minusSlides(8)"></button>
                                        <button onclick="plusSlides(8)"></button>
                                    </div>
                                    <script>
                                        function plusSlides(n) {
                                            const slider = document.querySelectorAll(".mySlides")
                                            slider.forEach((item) => {
                                                item.style.display = "none"
                                            })
                                            for (let i = n; n <= slider.length; i++) {
                                                slider[i].style.display = "block"
                                            }
                                        }
                                        minusSlides(8)

                                        function minusSlides(n) {
                                            const slider = document.querySelectorAll(".mySlides")
                                            slider.forEach((item) => {
                                                item.style.display = "block"
                                            })
                                            for (let i = n; n <= slider.length; i++) {
                                                slider[i].style.display = "none"
                                            }
                                        }
                                    </script>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$client['mijoz']}}</div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF"></path>
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content">
                    <div class="section-container">
                        <div class="sliders " id="sliders">
                            <div class="head">
                                <div class="col">
                                    <h1 class="title_blue">
                                        {{$client['mijoz']}}
                                    </h1>
                                    <div class="tab-link">
                                        <p class="tablinks active active" onclick="openCity(event, 'organ')">
                                            {{$client['info1']}}
                                        </p>
                                        <p class="tablinks" onclick="openCity(event, 'company')">
                                            {{$client['info2']}}
                                        </p>
                                        <p class="tablinks" onclick="openCity(event, 'party')">{{$client['info3']}}
                                        </p>
                                        <p class="tablinks" onclick="openCity(event, 'market')">{{$client['info4']}}
                                        </p>
                                    </div>

                                </div>
                                <div class="col animate__animated">
                                    <div id="organ" class="tabcontent">
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                    </div>
                                    <div id="company" class="tabcontent">
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>

                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                    </div>
                                    <div id="party" class="tabcontent">
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.png" alt="">
                                        </div>

                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                    </div>
                                    <div id="market" class="tabcontent">
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.png" alt="">
                                        </div>

                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.png" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/milliy stadium.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/ichki ishlar vazirlgi.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/dxxx.svg" alt="">
                                        </div>
                                        <div class="img">
                                            <img src="front/slide-1/uztelecom.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$yangilik}}</div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF"></path>
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content bg">
                    <div class="section-container">
                        <div class="news fadeInBottom" id="news">
                            <div class="head">
                                <div class="absolut">
                                    <img src="front/assets/plus.svg" alt="">
                                    <a href="{{url('/news')}}">
                                        <p>{{$yangiliklar}}</p>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <h1 class="title_blue">{{$yangilik}}</h1>
                                </div>
                                <div class="grids animate__animated">

                                    @foreach($news as $n)
                                        <a href="{{ url('/new/'.$n->id) }}">
                                            <div class="post">
                                                <img src="{{URL::to($n->img)}}" alt="">
                                                <div class="txt">
                                                    <p>{{$n->$title_news}}</p>
                                                    <small>{{$n->created_at}} </small>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$karta['title']}} </div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF"></path>
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content">
                    <div class="section-container mapic">
                        <div class="head">
                            <h1 class="title_blue">
                                {{$karta['title']}}
                            </h1>
                            <div class="map" style="position: relative;">

                                <div class="indiks">
                                    <div class=" toshkent-sh" style="z-index: 1; display: none;">
                                        <h2>
                                            144
                                        </h2>
                                        <span style="position: relative;"><span class="region">{{$karta['toshkent']}}</span></span>
                                        <img src="front/assets/tip.svg" alt="">
                                    </div>
                                    <div class=" toshkent">
                                        <h2>
                                            144
                                        </h2>
                                        <span style="position: relative;"><span class="region">{{$karta['toshkent']}}</span></span>
                                        <img src="front/assets/tip.svg" alt="">
                                    </div>
                                    <div class=" namangan">

                                        <h2>
                                            120
                                        </h2>
                                        <span><span class="region" style="display: flex;">{{$karta['namangan']}}</span></span>
                                        <img src="front/assets/mobile/arrow.svg" alt="">
                                    </div>
                                    <div class=" andijon">
                                        <img style="height: 100px;" src="front/assets/mobile/arrow.svg" alt="">
                                        <h2>
                                            68
                                        </h2>
                                        <span><span class="region">{{$karta['andijon']}}</span></span>

                                    </div>
                                    <div class=" fargona">
                                        <img style="height: 50px;" src="front/assets/mobile/arrow.svg" alt="">
                                        <h2>
                                            233
                                        </h2>
                                        <span><span class="region">{{$karta['fargona']}}</span></span>

                                    </div>
                                    <div class=" sirdaryo">
                                        <h2>
                                            109
                                        </h2>
                                        <span style="position: relative;"><span class="region">{{$karta['sirdaryo']}}</span></span>
                                        <img src="front/assets/mobile/arrow.svg" alt="">
                                    </div>

                                    <div class=" jizzax">

                                        <h2>
                                            27
                                        </h2>
                                        <span><span class="region" style="display: flex;">{{$karta['jizzax']}}</span></span>
                                        <img src="front/assets/mobile/arrow.svg" alt="">
                                    </div>

                                    <div class=" samarqand">
                                        <img src="front/assets/mobile/sam-arrow.svg" alt="" style=" margin-right: 10px;">
                                        <h2>
                                            367
                                        </h2>
                                        <span style="position: relative;left: -65px;top: 33px;"><span class="region">{{$karta['samarqand']}}</span></span>

                                    </div>


                                    <div class=" qashqadaryo">
                                        <h2 style="
                                            position: relative;
                                            left: -45px;
                                            top: 25px;
                                        ">
                                            417
                                        </h2>
                                        <span style="position: relative;top: 20px;padding-right: 10px;"><span class="region">{{$karta['qashqadaryo']}}</span></span>
                                        <img src="front/assets/mobile/q-arrow.svg" alt="">
                                    </div>

                                    <div class=" surxondaryo">
                                        <h2>
                                            108
                                        </h2>
                                        <span style="position: relative;right: -85px;background: #ffff;padding-right: 10px;"><span class="region">{{$karta['surxondaryo']}}</span></span>
                                        <img src="front/assets/mobile/s-arrow.svg" alt="">
                                    </div>

                                    <div class=" navoiy">

                                        <h2>
                                            130
                                        </h2>
                                        <span><span class="region">{{$karta['navoiy']}}</span></span>
                                        <img src="front/assets/mobile/arrow.svg" alt="">
                                    </div>

                                    <div class=" xorazm">
                                        <img style="height: 100px;margin-left: 40px;" src="assets/mobile/arrow.svg" alt="">
                                        <h2 style="
                                                    margin-left: 31px;
                                                ">
                                            270
                                        </h2>
                                        <span style="
                                                margin-left: 33px;
                                            "><span class="region">{{$karta['xorazm']}}</span></span>

                                    </div>

                                    <div class=" buxoro">
                                        <img style="height: 50px;" src="front/assets/mobile/arrow.svg" alt="">
                                        <h2>
                                            25
                                        </h2>
                                        <span><span class="region">{{$karta['buxoro']}}</span></span>

                                    </div>
                                    <div class=" qora">
                                        <img src="front/assets/mobile/arrow.svg" alt="">
                                        <h2>
                                            270
                                        </h2>
                                        <span><span class="region">{{$karta['qoraqalpogiston']}}</span></span>

                                    </div>

                                </div>
                                <div class="map-b">
                                    <div class="shadow">

                                    </div>
                                    <svg style="position: relative; z-index: 32;" viewBox="0 0 950 625" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path data-ser=".toshkent" id="toshkent" fill-rule="evenodd" clip-rule="evenodd" d="M727.313 326.988L728.245 326.435L728.347 327.353L728.74 328.168L730.116 329.733L730.997 328.816L731.048 329.107L730.728 329.828L731.413 331.066L733.073 331.496L734.82 329.268L737.616 326.719L739.706 325.671L739.138 325.081L739.531 324.396L738.963 323.544L738.206 323.057L739.051 321.6L738.847 320.413L736.808 319.103L735.111 318.87L733.808 317.952L731.944 317.974L729.017 320.93L728.58 323.253L727.146 326.821L727.313 326.988ZM843.705 259.163L843.888 259.228L843.065 262.002L841.011 263.451L836.46 264.784L828.669 270.631L826.398 271.177L823.682 271.053L821.41 271.657L820.449 274.373L820.289 278.633L819.677 279.878L817.769 280.606L812.272 281.24L810.575 282.259L805.122 286.948L802.719 289.795L801.102 293.283L799.806 295.227L798.146 296.349L796.348 297.222L793.056 299.836L784.129 305.093L782.972 307.001L783.984 309.375L786.015 310.445L793.784 311.319L793.792 311.326L793.806 311.334L793.814 311.341L795.874 312.593L796.799 313.438L797.607 314.486L798.954 317.035L799.792 317.814L800.76 317.858L800.134 319.591L799.631 320.53L796.937 324.141L796.777 324.556L796.704 325.095L796.843 325.94L796.857 327.076L797.047 327.462L797.236 327.724L798.758 327.942L798.954 328.532L798.699 329.551L798.539 330.01L797.491 332.246L797.389 332.69L797.403 333.178L797.52 333.673L797.877 334.263L798.983 335.755L800.105 337.656L800.352 339.265L800.462 344.689L800.061 346.379V346.393L799.384 345.651L796.93 344.624L794.855 345.177L793.333 352.881L790.275 356.471L786.285 358.888L780.562 361.167L775.348 365.194L765.183 368.397L763.967 369.009L762.875 369.927L760.56 372.868L759.242 374.048L757.764 374.499L756.067 373.866L755.368 373.232L754.8 372.468L753.788 370.742L753.176 370.007L751.786 369.089L751.138 368.507L748.99 365.15L747.745 363.978L745.982 363.803L745.123 363.271L744.431 362.536L743.696 361.939L742.699 361.83L740.907 362.419L740.026 362.907L739.24 363.563L737.835 365.383L736.983 367.276L736.597 369.453L736.568 372.126L736.946 375.992L736.721 376.975L735.927 377.455L732.578 377.739L730.604 379.101L730.582 380.601L732.803 384.365H732.81L733.99 388.443L734.529 389.739L735.963 392.339L736.56 393.707L736.91 395.309L736.502 398.848L734.725 399.154L732.599 398.338L731.15 398.52L731.376 400.661L735.388 404.28V405.991L733.313 406.945L730.568 406.858L725.609 405.365L723.716 404.404L723.723 404.382L724.015 403.435L724.801 400.566L724.699 399.511L724.342 398.906L723.556 396.911L724.706 390.278L724.852 389.783L725.18 389.047L725.485 388.509L726.265 387.482L726.498 386.856L726.403 386.208L726.206 385.574L726.097 384.992L725.748 384.533L725.172 383.98L725.056 383.39L726.097 382.807L725.595 382.429L725.049 382.239L724.451 382.196L723.833 382.261L724.459 379.662L724.983 378.657L726.374 378.023L726.352 377.506L726.01 376.989L725.507 376.756L724.976 377.062L724.393 377.659L723.847 378.06L723.418 377.798L723.439 377.259L724.342 376.385L724.546 375.766L724.277 375.082L723.265 374.237L722.617 372.424L721.597 372.337L719.274 372.788L720.155 371.31L720.359 370.575L719.842 370.262L718.998 370.545L718.226 371.062L717.454 371.317L716.602 370.808L717.33 369.854L717.207 368.871L716.595 367.982L715.845 367.283L715.452 367.145L715.066 367.211L714.68 367.189L714.316 366.832L714.265 366.512L714.367 365.66L714.316 365.339L713.748 364.16L713.449 363.781L712.845 363.301L711.374 362.551L710.996 362.259L710.588 361.706L709.947 360.468L709.452 359.82L708.622 359.216L707.42 358.677L706.204 358.458L705.309 358.822L705.127 357.563L704.967 357.075L704.726 357.082L704.238 357.446L703.947 357.257L703.809 356.718L703.736 354.985L703.561 354.25L703.124 353.616L700.328 351.031L700.831 350.813L702.527 350.063L703.088 349.371L703.641 348.687L704.654 345.76L705.666 342.833L706.416 341.973L707.18 341.114L709.081 340.277L710.966 339.44L711.651 338.245L712.343 337.059L712.692 336.585L713.056 336.112L713.624 335.923L714.192 335.741L715.372 335.588L716.559 335.428L717.549 334.94L718.546 334.452L719.5 333.804L720.439 333.148L720.913 332.682L721.386 332.216L721.597 331.794L721.823 331.372L722.253 327.877L722.682 324.389L722.66 323.785L722.638 323.18L722.558 322.751L722.486 322.321L722.405 322.19L722.325 322.059L722.202 321.964L722.063 321.87L721.808 321.542L721.554 321.222L721.481 320.916L721.401 320.61L721.532 320.348L721.655 320.093L721.881 319.896L722.107 319.714L723.381 319.081L724.655 318.455L725.172 318.295L725.689 318.134L726.206 318.331L726.716 318.535L726.993 317.77L727.269 317.006L727.939 316.336L728.616 315.666L730.116 314.705L731.624 313.751L732.075 313.649L732.519 313.554L733.335 313.853L734.15 314.144L734.558 314.086L734.959 314.028L736.022 313.343L737.092 312.651L737.5 312.535L737.922 312.418L739.56 312.724L741.206 313.023L741.526 312.826L741.854 312.644L741.817 312.266L741.781 311.887L741.322 311.035L740.864 310.19L740.769 309.804L740.66 309.411L741.024 308.45L741.381 307.489L742.116 306.95L742.844 306.411L744.417 305.909L745.982 305.414L748.793 303.2L751.596 300.972L752.383 300.055L753.176 299.137L753.635 298.766L754.108 298.395L757.829 297.353L761.55 296.312L764.623 296.196L767.695 296.079L768.846 295.591L769.989 295.103L770.834 294.106L771.671 293.116L772.05 292.548L772.428 291.98L772.858 291.63L773.287 291.288L774.831 290.713L776.375 290.145L778.661 288.448L780.962 286.744L781.654 285.922L782.353 285.106L784.224 281.859L786.088 278.611L786.489 278.196L786.882 277.788L787.348 277.512L787.828 277.242L788.331 277.06L788.826 276.885L789.285 276.645L789.736 276.405L790.086 276.012L790.428 275.611L790.639 274.963L790.836 274.308L791.52 272.801L792.204 271.279L793.377 270.252L794.564 269.225L797.258 268.053L799.945 266.881L800.345 266.961L800.753 267.034L801.262 267.398L801.765 267.755L802.209 268.257L802.646 268.752L802.857 269.233L803.061 269.721L803.258 270.42L803.454 271.111L803.884 271.548L804.299 271.985L804.881 272.218L805.457 272.451L806.112 272.538L806.774 272.633L807.626 272.218L808.493 271.803L809.075 270.704L809.665 269.611L810.175 268.257L810.677 266.903L811.318 265.694L811.966 264.485L812.738 263.561L813.51 262.636L813.801 262.141L814.099 261.646L814.318 260.954L814.536 260.262L814.937 259.723L815.33 259.192L815.993 259.163L816.648 259.134L817.929 259.49L819.204 259.847L820.245 259.694L821.286 259.541L822.32 259.01L823.354 258.471L825.225 256.935L827.097 255.398L828.298 254.255L830.745 252.449L832.492 252.209L834.247 252.937L841.98 258.507L843.705 259.163Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".toshkent-sh" id="toshkent-sh" fill-rule="evenodd" clip-rule="evenodd" d="M733.073 331.496L731.405 331.066L730.721 329.828L731.041 329.107L730.99 328.816L730.109 329.726L728.733 328.161L728.34 327.345L728.245 326.428L727.313 326.988L727.153 326.828L728.587 323.26L729.024 320.938L731.951 317.981L733.815 317.96L735.119 318.877L736.808 319.11L738.847 320.413L739.051 321.607L738.206 323.064L738.971 323.552L739.531 324.404L739.138 325.088L739.706 325.678L737.616 326.719L734.82 329.267L733.073 331.496Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".sirdaryo" id="sirdaryo" d="M718.393 411.336L715.823 409.479L702.913 412.005L700.554 415.136L699.695 416.687L699.462 417.481L699.411 418.027L699.426 418.5L699.506 418.901L699.717 419.571L699.892 419.964L699.928 420.037L700.044 420.292L700.496 421.588L700.678 422.279L700.758 422.673L700.802 423.342L700.634 425.716L700.438 426.102L700.241 426.131L700.059 425.847L699.841 425.563L699.549 425.389L699.207 425.345L698.763 425.614L698.719 425.905L698.828 426.189L699.083 426.437L700.066 427.071L700.336 427.303L700.496 427.58L700.416 427.995L700.248 428.505L699.957 429.138L699.943 430.245L699.797 430.981L700.394 431.228L702.265 429.553L703.168 430.238L704.639 432.641L705.382 433.027L705.753 432.561L705.877 431.847L705.884 431.49L705.869 431.388L706.263 430.311L706.452 430.194L707.027 430.092L707.238 429.947L707.908 428.57L707.923 427.558L706.692 424.923L706.161 423.372L705.964 422.025L706.343 421.464L707.493 422.265L708.615 424.733L709.459 427.842L710.719 429.801L713.063 428.818L712.881 427.223L708.025 420.503L707.748 419.782L707.668 419.105L707.784 417.627L707.595 417.081L706.619 416.294L706.503 415.646L707.217 414.321L708.083 415.02L709.335 417.27L710.049 417.044L712.008 415.333L713.122 414.969L717.134 415.602L718.386 415.399L718.838 414.517L718.925 413.469L718.75 412.369L718.393 411.336ZM726.396 386.215L726.199 385.581L726.09 384.999L725.74 384.54L725.165 383.987L725.048 383.397L726.09 382.814L725.587 382.436L725.041 382.247L724.444 382.203L723.825 382.268L724.451 379.669L724.976 378.664L726.366 378.031L726.345 377.514L726.002 376.997L725.5 376.764L724.968 377.07L724.386 377.667L723.84 378.067L723.41 377.805L723.432 377.266L724.335 376.392L724.539 375.773L724.269 375.089L723.257 374.244L722.609 372.431L721.59 372.344L719.267 372.795L720.148 371.317L720.352 370.582L719.835 370.269L718.99 370.553L718.219 371.07L717.447 371.325L716.595 370.815L717.323 369.861L717.199 368.878L716.588 367.99L715.838 367.291L715.444 367.152L715.059 367.218L714.673 367.196L714.309 366.839L714.258 366.519L714.36 365.667L714.309 365.347L713.741 364.167L713.442 363.788L712.838 363.308L711.367 362.558L710.988 362.267L710.58 361.713L709.94 360.475L709.445 359.827L708.615 359.216L707.413 358.677L706.197 358.458L705.302 358.822L705.119 357.563L704.959 357.075L704.719 357.082L704.231 357.446L703.94 357.257L703.802 356.725L703.729 354.992L703.554 354.257L703.117 353.624L700.321 351.039L699.134 351.563L698.362 352.095L697.598 352.619L697.292 353.471L696.994 354.33L696.87 354.25L696.753 354.162L696.491 354.06L696.236 353.959L696.105 353.893L695.989 353.82L695.974 354.221L695.967 354.621L696.032 355.437L696.105 356.252L696.069 356.609L696.032 356.958L695.858 357.366L695.676 357.781L695.494 357.912L695.319 358.051L695.159 358.24L695.006 358.422L694.897 358.983L694.802 359.543L695.071 362.594L695.355 365.645L695.537 366.337L695.719 367.014L695.945 367.313L696.171 367.604L696.433 367.757L696.702 367.91L697.401 368.077L698.093 368.245L698.071 368.696L698.042 369.147L698.144 369.613L698.239 370.079L698.421 370.524L698.61 370.975L698.843 371.375L699.083 371.783L699.025 372.024L698.974 372.271L698.304 373.378L697.634 374.477L698.159 374.761L698.697 375.038L698.53 375.519L698.355 375.999L697.765 376.349L697.183 376.698L696.447 376.596L695.705 376.487L694.605 375.941L693.498 375.395L693.178 375.337L692.865 375.278L692.603 375.453L692.348 375.628L692.042 376.261L691.846 376.516L691.634 376.771L690.804 376.727L690.462 377.07L690.127 377.419L689.945 377.79L683.45 374.368L679.183 372.118L679.06 375.045L678.324 375.824L675.295 376.341L674.574 376.516L674.261 376.654L674.006 376.873L673.875 377.244L673.81 378.97L673.446 381.671L673.569 382.043L673.868 382.312L674.793 382.203L675.776 381.89L676.3 381.846L676.446 382.764L669.929 397.749L669.703 398.739L669.55 399.882L669.769 401.855L670.002 402.438L670.329 402.991L670.533 403.268L672.048 403.515L684.579 403.792L701.1 399.693L701.341 399.7L701.399 399.86L701.108 400.363L700.845 400.727L700.612 401.113L700.394 401.63L699.637 404.382L699.404 404.899L699.222 405.51L699.877 406.792L699.892 406.814L699.913 406.836L702.979 406.02L704.202 405.911L707.399 406.472L708.687 406.297L710.61 405.19L711.709 404.739L720.68 403.341L721.939 403.552L723.68 404.433L723.687 404.411L723.978 403.464L724.765 400.596L724.663 399.54L724.306 398.935L723.519 396.94L724.67 390.307L724.816 389.812L725.143 389.076L725.449 388.538L726.228 387.511L726.461 386.885L726.396 386.215Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".surxondaryo" id="surxondaryo" fill-rule="evenodd" clip-rule="evenodd" d="M654.492 493.404L655.97 493.375L660.157 491.962V491.955H660.165H660.179L660.915 491.583L661.686 491.372L662.48 491.387L663.412 491.7L663.842 491.962L664.694 492.785L665.596 492.96L666.514 492.625L667.431 491.947L667.868 491.838L668.312 491.794L668.764 491.838L669.193 491.947H669.208L669.215 491.955L669.23 491.962L670.067 492.989L671.931 497.117L672.965 498.654L673.533 499.498L674.086 500.925L674.021 502.483L673.533 503.663L672.849 504.617L672.004 505.367L671.072 505.92L669.776 506.19L668.8 506.153L668.189 506.539L667.999 508.068L668.159 508.782L668.487 509.408L668.735 510.063L668.691 510.864L668.407 511.294L667.016 512.284L666.579 513.347L666.732 514.643L667.468 517.279L667.584 518.706L667.402 522.762L667.548 524.313L667.956 525.245L669.295 527.291L669.608 528.361L669.725 530.604L669.914 531.631L670.439 532.628L672.594 534.703L674.633 538.446L675.579 539.414L678.441 541.031L682.817 544.948L684.149 547.074L684.397 549.783L683.494 553.897L682.125 557.763L679.977 561.055L679.314 562.387V562.402H679.307L679.3 562.409L678.885 563.603L678.637 564.666L678.222 565.547L677.632 565.984L677.356 566.188L676.511 566.45L673.941 566.8L672.222 567.382L671.247 568.387L668.895 575.515L667.271 578.719L663.252 584.34L660.281 587.195L657.441 590.806L655.089 594.906L653.546 599.18L653.335 602.092L654.427 607.582L654.616 610.502L654.325 612.992L653.691 615.344L652.657 617.412L652.403 618.424L652.155 617.136L651.507 616.211L650.531 615.621L649.388 615.337L647.422 615.424L646.723 615.337L646.112 615.024L644.91 614.114L644.277 613.91L643.65 613.99L642.595 614.318L642.027 614.391L641.677 614.704L641.342 615.395L640.913 616.051L640.323 616.276L639.42 615.475L638.379 612.607L637.104 611.98L635.961 612.301L634.949 613.065L633.136 614.9L632.044 615.723L630.937 616.298L629.743 616.64L628.396 616.757L626.983 617.07L624.886 618.439L623.656 618.687L622.418 618.184L621.785 617.121L621.384 615.839L620.831 614.645L619.724 613.619L617.277 612.679L616.163 611.98L615.646 610.925L614.736 607.917L614.052 607.291L612.901 606.942L610.695 605.354L609.69 604.881L607.025 604.816L601.965 606.017L594.749 606.337L594.166 606.556L593.081 607.502L592.499 607.721L591.006 607.655L590.322 607.531L586.674 605.981L585.356 605.828L583.943 605.937L582.873 606.279L581.511 605.223L581.628 603.949L582.458 602.762L583.492 601.699L584.366 600.265L584.147 599.158L583.273 598.211L582.189 597.272L581.431 595.306L581.642 592.823L582.851 588.134L583.062 585.36L582.618 579.899L582.829 577.161L584.752 573.717L587.81 569.727L589.834 565.766L589.324 564.317L590.963 563.254L591.822 561.55L592.12 560.603L592.404 557.851L592.739 556.693L593.191 556.096L599.919 549.798L600.334 549.048L600.691 548.21L600.989 547.344L601.193 546.536L601.783 545.138L602.635 543.703L603.137 543.106L603.581 542.779L605.584 542.451L606.224 542.254L609.377 540.492L615.486 535.584L616.185 534.813L616.338 534.434L616.768 532.767L617.365 529.148L617.671 527.946L618.027 527.043L618.333 526.607L620.394 524.895L621.377 523.818L621.981 522.806L622.433 521.772L624.61 521.24L625.447 520.796L625.971 520.374L626.954 519.376L627.515 518.619L630.806 512.19L631.105 511.825L631.461 511.483L631.978 511.083L632.772 510.719L633.471 510.544L634.265 510.508L635.139 510.617L635.947 510.85L636.311 511.003L636.602 511.185L636.835 511.374L637.833 512.444L638.124 512.626L638.51 512.677L638.706 512.437L638.794 512.102L638.808 510.864L638.947 510.34L639.202 509.758L639.777 508.877L640.061 508.316L640.214 507.792V507.384L640.177 506.991L640.002 506.27L639.893 505.928L639.82 505.571L639.784 505.207V504.835L639.813 504.464L639.879 504.034L639.988 503.627L640.046 503.183L640.068 502.775L639.988 502.418L639.879 502.112L638.532 499.666L638.219 497.139L637.811 495.486L637.796 494.889L637.942 494.365L638.27 493.862L638.67 493.447L639.005 493.156L639.325 492.96L639.973 492.69L640.672 492.515L644.677 492.333L645.667 491.933L646.49 491.307L647.444 492.253L654.492 493.404Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".samarqand" id="samarqand" fill-rule="evenodd" clip-rule="evenodd" d="M588.421 384.285L588.851 384.606L595.805 384.868L598.098 385.538L598.987 385.785L599.875 385.916L601.135 385.858L602.591 385.545L602.919 385.516L603.217 385.727L603.494 386.193L603.923 387.111L604.135 387.802L604.258 388.487L604.2 389.484L603.88 390.54L603.399 391.639L603.29 392.069L603.232 392.528L603.217 393.016L603.304 396.423L603.436 397.632L604.215 401.382L604.338 401.753L604.528 402.125L604.965 402.43L606.101 402.984L606.37 403.239L606.559 403.545L606.508 404.054L606.377 404.477L606.355 405.001L606.537 405.583L608.037 407.44L608.001 409.107L607.768 409.763L607.6 409.996L607.317 410.222L606.283 410.571L605.991 410.746L605.853 411.073L605.809 411.459L606.057 414.7L606.232 415.064L606.494 415.384L607.12 415.537L607.593 415.566L608.03 415.493L608.372 415.384L609.428 414.845L609.698 414.78L610.047 414.765L610.477 414.831L610.863 415.107L611.139 415.559L611.176 416.542L611.008 417.008L611.023 417.605L611.11 417.983L613.025 420.117L613.768 419.833L614.015 419.796L614.277 419.695L614.926 420.809L619.272 422.01L619.906 422.09L620.787 422.039L621.173 421.93L621.552 421.901L622.447 422.483L622.833 422.673L623.335 422.745L623.874 422.542L625.178 422.709L634.724 424.5L635.648 425.993L637.141 432.692L636.922 433.252L636.078 433.485L635.648 433.522L634.163 433.857L632.976 434.294L631.258 435.204L630.406 435.837L629.961 436.281L629.852 436.587L629.736 437.082L629.678 438.131L629.707 438.772L629.779 439.267L629.874 439.624L630.005 440.366L630.02 440.767L629.976 441.619L629.86 442.063L629.619 442.383L629.117 442.587L628.658 442.653L626.991 442.711L626.241 442.878L625.92 443.556L625.738 444.116L625.622 449.075L626.19 450.262L626.969 451.186L629.27 453.225L633.435 456.939L632.925 457.587L632.233 460.339L631.869 463.208L631.811 465.836L631.112 468.232L630.697 470.598L630.333 470.73L629.838 470.577L629.248 470.773L629.146 470.868L615.959 467.54L613.025 467.402L613.011 467.759L613.098 468.465L613.105 468.822L613.062 469.179L612.945 469.55L612.734 469.856L612.472 470.103L612.173 470.249L611.503 470.395L605.416 470.628L604.622 470.467L604.222 470.314L603.865 470.111L603.559 469.87L603.341 469.448L603.261 468.873L603.363 467.781L603.712 465.8L603.508 464.802L602.402 462.691L601.215 462.509L596.533 461.584L592.193 460.871L591.465 460.885L590.475 461.169L589.616 461.657L589.164 462.036L588.815 462.407L587.023 465.145L586.499 465.654L582.378 467.322L581.934 467.366L581.213 467.176L580.332 466.717L577.07 464.104L575.664 463.208L574.616 463.273L566.657 465.116L566.388 465.13L561.124 467.737L559.966 468.494L559.107 468.785L557.141 468.793L553.449 467.802L553.092 467.533L552.837 467.096L552.714 466.273L552.67 465.742L552.663 465.269L552.735 464.14L552.721 463.04L552.546 462.611L552.386 462.276L550.995 461.206L549.357 460.07L546.474 457.252L545.876 456.414L545.578 455.897V455.883L545.549 455.846L545.425 455.475L544.894 453.152L544.755 452.839L544.566 452.555L544.318 452.308L544.042 452.133L543.677 452.002L543.153 451.922L541.42 451.856L540.823 451.966L540.357 452.279L540.248 452.635L540.197 453.021L540.241 454.106L540.219 454.463L540.139 454.827L539.957 455.14L539.709 455.417L538.551 456.261L537.365 456.888L536.717 457.099L513.176 456.502L510.234 450.618L509.557 448.5L509.608 448.063L511.232 444.378L511.377 443.81L511.501 443.148L511.552 442.092L511.487 441.531L509.819 435.502L509.339 434.825L508.938 434.366L507.846 433.383L506.2 431.519L505.778 430.609L505.873 430.26L506.128 429.998L506.47 429.808L506.972 429.677L509.695 429.299L513.016 428.425L513.431 428.119L513.89 427.697L514.101 426.452L514.232 426.022L514.523 425.512L514.865 425.359L515.266 425.389L517.13 426.452L518.775 427.18L520.312 427.413L521.884 427.398L522.605 427.172L523.086 426.838L523.443 425.971L524.382 422.25L524.535 421.821L525.409 419.935L525.612 419.345L525.656 418.952L525.591 418.624L525.358 418.347L525.052 418.165L524.68 418.056L524.302 418.005L524.12 417.743L524.163 417.27L525.576 415.158L525.751 414.816L525.853 414.576L525.955 414.241L526.035 413.869L526.137 412.406L526.129 411.525L526.173 411.153L526.326 410.688L526.661 410.003L526.981 409.654L527.345 409.472L528.146 409.522L533.178 411.78L534.27 411.991L534.452 412.078L535.013 412.187L536.425 414.183L537.292 415.1L539.527 415.901L540.576 416.731L541.653 417.292L542.804 416.906L545.199 418.442L547.529 418.923L559.427 416.367L560.039 416.039L563.599 412.726L564.094 412.115L564.378 411.525L564.386 410.957L564.24 410.498L563.912 410.069L563.512 409.865L562.988 409.785L562.5 409.806L561.459 409.996L561.058 409.959L560.818 409.828L560.716 409.435L560.825 408.882L562.252 405.51L562.682 403.872L563.024 402.94L563.505 402.015L564.881 400.028L565.157 399.525L565.223 398.833L564.378 398.12L564.182 397.756L564.043 397.224L564.109 396.758L564.852 395.127L565.245 393.547L565.041 390.962L564.444 389.251L564.458 388.712L564.735 388.276L565.806 387.759L566.206 387.38L566.643 386.543L566.679 385.989L566.432 385.399L566.046 384.773L565.558 383.514L565.573 382.327L565.74 381.176L566.446 379.203L566.898 378.286L567.407 377.463L568.048 376.727L568.725 376.225L569.446 375.977L570.225 376.072L571.048 376.472L572.191 377.324L573.189 377.892L574.165 378.286L575.06 378.417L576.16 378.271L577.448 377.674L581.431 374.951L581.948 374.74L582.436 374.812L583.062 375.154L584.613 376.531L586.492 378.708L586.645 378.999L586.725 379.319L586.681 380.004L586.354 381.154L586.346 381.482L586.404 381.744L586.528 382.057L586.718 382.392L587.344 383.222L588.421 384.285Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".navoiy" id="navoiy" fill-rule="evenodd" clip-rule="evenodd" d="M543.889 208.477L551.847 204.167L559.806 199.849L558.619 218.533L557.432 237.144L557.294 239.11L557.155 241.083L556.879 241.724L556.602 242.372L555.954 242.627L555.306 242.874L555.146 243.391L554.978 243.908L554.949 246.158L554.774 258.434L554.578 272.91L554.636 273.31L554.702 273.711L554.935 273.907L555.175 274.089L561.815 274.118L567.859 274.14L573.888 274.162L580.55 274.191L580.754 274.162L580.958 274.133L581.169 274.14L581.373 274.148L581.562 274.191L581.752 274.235L581.883 274.315L582.021 274.395L582.975 283.759L583.936 293.108L585.691 302.217L587.453 311.319L589.819 322.154L592.171 332.959L593.409 334.466L594.64 335.973L596.016 336.338L595.994 336.585L589.252 339.33L588.786 340.473L588.094 341.384L589.033 351.57L589.128 351.971L589.266 352.306L589.572 352.932L590.038 353.492L590.373 353.733L591.13 354.162L596.118 355.524L596.424 355.764L596.62 356.048L596.729 356.376L596.751 356.915L596.737 357.628L596.598 358.939V360.162L596.693 360.497L597.195 361.764L598.404 363.934L596.861 367.815L588.421 384.285L587.344 383.222L586.718 382.392L586.528 382.057L586.405 381.744L586.346 381.482L586.354 381.154L586.681 380.004L586.725 379.319L586.645 378.999L586.492 378.708L584.613 376.531L583.062 375.154L582.436 374.812L581.948 374.739L581.431 374.951L577.448 377.674L576.16 378.271L575.06 378.416L574.165 378.285L573.189 377.892L572.191 377.324L571.048 376.472L570.225 376.072L569.446 375.977L568.725 376.225L568.048 376.727L567.408 377.463L566.898 378.285L566.446 379.203L565.74 381.176L565.573 382.327L565.558 383.513L566.046 384.773L566.432 385.399L566.679 385.989L566.643 386.542L566.206 387.38L565.806 387.758L564.735 388.275L564.459 388.712L564.444 389.251L565.041 390.962L565.245 393.547L564.852 395.127L564.109 396.758L564.044 397.224L564.182 397.756L564.378 398.12L565.223 398.833L565.158 399.525L564.881 400.028L563.505 402.015L563.024 402.94L562.682 403.872L562.252 405.51L560.825 408.882L560.716 409.435L560.818 409.828L561.058 409.959L561.459 409.996L562.5 409.806L562.988 409.784L563.512 409.865L563.912 410.068L564.24 410.498L564.386 410.957L564.378 411.525L564.094 412.115L563.599 412.726L560.039 416.039L559.427 416.367L547.529 418.923L545.199 418.442L542.804 416.906L541.653 417.292L540.576 416.731L539.527 415.901L537.292 415.1L536.425 414.182L535.013 412.187L534.452 412.078L534.27 411.991L533.178 411.78L528.146 409.522L527.346 409.471L526.981 409.653L526.661 410.003L526.326 410.687L526.173 411.153L526.13 411.525L526.137 412.406L526.035 413.869L525.955 414.241L525.853 414.576L525.751 414.816L525.576 415.158L524.164 417.27L524.12 417.743L524.302 418.005L524.681 418.056L525.052 418.165L525.358 418.347L525.591 418.624L525.656 418.952L525.613 419.345L525.409 419.935L524.535 421.821L524.382 422.25L523.443 425.971L523.086 426.837L522.605 427.172L521.884 427.398L520.312 427.413L518.775 427.18L517.13 426.452L515.266 425.388L514.865 425.359L514.523 425.512L514.232 426.022L514.101 426.452L513.89 427.697L513.431 428.119L513.016 428.425L509.696 429.299L506.972 429.677L506.47 429.808L506.128 429.998L505.873 430.26L505.778 430.609L506.2 431.519L507.846 433.383L508.938 434.366L509.339 434.825L509.819 435.502L511.487 441.531L511.552 442.092L511.501 443.148L511.378 443.81L511.232 444.378L509.608 448.063L509.557 448.499L510.234 450.618L513.176 456.502L512.128 457.179L506.681 458.468L506.543 456.48L506.448 455.985L505.902 454.084L505.56 453.291L505.334 452.883L504.453 451.667L503.477 450.677L502.64 450.211L501.322 449.73L500.259 449.118L499.815 447.626L499.64 446.067L499.618 444.902L499.167 443.308L498.155 441.611L491.58 438.509L491.084 437.701L490.254 437.526L487.851 438.626L486.788 438.568L486.017 438.182L485.82 437.57L485.536 436.922L485.463 436.507L482.871 435.073L481.335 434.017L477.33 428.454L476.478 426.685L477.257 424.85L478.153 422.855L479.944 420.59L480.141 420.284L480.563 419.833L481 418.886L484.371 417.343L485.361 416.636L486.33 415.697L487.094 414.627L489.708 409.275L490.553 408.59L491.041 408.569L491.456 408.255L491.798 408.008L492.177 407.913L493.829 407.717L493.895 407.462L493.662 406.996L492.817 405.925L491.194 404.265L490.567 403.246L490.487 402.955L490.524 402.787L490.786 402.7L491.281 402.227L492.191 399.496L490.815 398.105L490.524 396.7L490.553 396.066L490.633 395.397L490.786 394.712L491.296 394.093L492.213 393.583L494.128 393.256L495.366 393.241L496.436 393.547L497.55 394.523L498.73 395.316L499.989 395.732L506.47 395.797L507.067 394.581L508.312 390.605L509.331 389.644L510.54 388.232L512.011 383.63L512.106 382.727L512.732 381.788L513.161 381.409L513.678 381.256L514.225 381.293L517.108 381.912L517.843 381.933L517.887 381.103L517.683 380.237L517.559 378.781L517.545 376.982L517.669 375.074L517.931 373.218L519.234 368.703L516.591 369.468L499.88 368.31L494.434 366.97L492.526 365.878L490.618 364.283L489.839 362.143L489.337 360.206L488.165 352.874L487.684 351.133L487.014 351.046L485.245 353.558L483.483 354.322L481.08 354.825L473.784 355.153L471.92 355.866L470.871 356.427L469.197 362.936L467.952 364.094L453.025 362.31L450.687 361.473L449.923 359.893L449.828 355.094L449.544 352.611L448.423 350.929L447.338 350.019L446.304 349.743L445.197 350.128L444.105 351.009L443.115 352.444L439.838 359.31L435.899 365.186L429.331 367.494L429.419 366.075L427.394 364.014L426.149 361.815L409.555 351.577L401.058 346.786L393.813 343.961L388.934 342.84L387.616 342.083L380.182 328.896L370.906 317.938L369.544 315.513L367.797 311.472L363.144 311.363L343.601 318.79L319.958 286.198L319.529 285.193L319.492 284.21L320.694 283.198L332.54 276.492L333.203 275.793L333.429 275.393L332.344 273.077L326.053 261.471L325.892 260.757V259.84L327.13 244.367L330.167 237.246L344.307 210.028L359.321 181.653L359.62 180.779L359.627 180.022L358.79 179.526L343.877 175.383L341.11 172.82L335.22 162.714L339.778 161.876L341.715 161.52L343.659 161.156L345.61 160.799L347.547 160.435L350.664 159.867L353.773 159.284L356.889 158.709L359.998 158.141L365.03 157.318L370.068 156.496L375.1 155.673L380.131 154.85L385.17 154.034L390.201 153.212L395.233 152.389L400.271 151.566L408.667 152.331L417.069 153.102L425.479 153.86L433.868 154.624L441.513 155.323L449.158 156.022L456.797 156.721L464.435 157.413L467.471 157.69L468.432 157.413L469.393 157.136L474.934 154.049L480.242 151.1L485.718 148.049L491.092 145.049L492.082 144.678L493.072 144.299L493.953 144.438L494.834 144.576L495.752 145.406L496.684 146.236L502.625 153.991L508.56 161.745L511.312 164.665L514.05 167.571L519.729 171.146L525.401 174.714L526.494 175.682L527.586 176.65L532.268 186.356L535.26 192.538L539.396 201.057L542.935 208.368L543.415 208.419L543.889 208.477Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".namangan" id="namangan" fill-rule="evenodd" clip-rule="evenodd" d="M810.357 352.269L810.27 351.017L809.556 349.255L808.791 348.002L807.51 346.845L805.988 346.189L805.1 346.422L805.741 347.93L805.799 347.988L806.716 348.934L808.333 351.119L809.265 352.014L810.357 352.269ZM867.501 316.54L867.829 315.943L868.054 315.142L868.309 314.734L868.899 314.981L869.198 316.161L869.714 316.401L870.159 316.015L870.202 314.464L870.552 314.151L871.011 314.341L871.447 314.748L876.624 322.503L877.513 324.68L877.833 327.098L877.695 330.229L877.986 333.316L879.42 334.015L883.797 333.258L885.129 334.372L885.974 335.58L886.928 336.09L888.573 335.093L889.76 334.015L891.042 333.17L892.389 332.959L893.794 333.796L894.427 335.209L894.69 337.204L894.784 339.294L895.294 343.117V344.551L894.915 345.862L894.165 347.602L895.84 347.092L895.52 348.279L894.202 354.352L893.779 354.745L893.532 354.883L893.197 355.029L892.367 355.182L889.054 355.32L888.151 355.495L887.182 355.386L879.959 353.631L878.445 353.776L877.12 353.675H875.918L875.277 353.864L872.977 354.971L871.149 354.053L865.448 355.582L864.734 356.653L864.042 357.155L862.251 358.822L862.018 359.245L862.069 359.74L862.732 360.614L863.605 362.441L862.018 364.007L857.453 365.529L852.56 368.201L851.482 369.118L849.749 371.79L846.145 375.198L844.878 375.453L844.091 375.205L841.594 373.837L840.473 372.919L839.854 372.693L838.842 372.497L838.266 372.315L837.866 372.082L836.3 370.443L835.893 370.247L833.737 370.007L833.432 369.693L836.941 364.895L830.701 365.23L828.939 364.982L828.582 364.669L828.138 364.356L827.271 363.992L826.157 363.985L823.565 366.322L822.83 366.424L821.293 366.264L820.551 366.322L819.619 366.766L819.007 367.436L818.497 368.186L817.908 368.856L816.488 369.752L816.612 369.147L817.085 366.694L814.973 365.47L809.935 364.298L809.068 363.177L808.937 361.924L809.454 361L810.554 360.876L812.469 362.55L813.553 362.958L813.663 361.611L813.204 360.97L803.148 349.561L801.408 348.031L801.233 347.813L801.095 347.565L800.039 346.4V346.386L800.44 344.697L800.33 339.272L800.083 337.663L798.962 335.762L797.855 334.27L797.498 333.68L797.382 333.185L797.367 332.697L797.469 332.253L798.517 330.017L798.678 329.559L798.932 328.539L798.736 327.95L797.214 327.731L797.025 327.469L796.835 327.083L796.821 325.947L796.682 325.103L796.755 324.564L796.916 324.149L799.61 320.537L800.112 319.598L800.738 317.865L801.095 317.879L802.981 317.159L809.731 313.256L811.602 312.972L812.643 313.627L813.575 314.88L816.67 320.246L817.194 321.746L817.296 323.297L816.481 327.804L816.575 329.085L817.26 330.083L818.148 329.945L819.218 329.428L820.463 329.304L821.519 329.748L822.51 330.469L823.42 331.401L824.177 332.457L825.182 333.418L826.281 333.534L828.655 333.178L831.276 333.658L832.507 334.226L833.643 335.129L834.647 335.69L836.701 335.966L837.582 336.687L838.98 339.046L839.846 339.636L840.385 338.224L840.269 336.687L839.999 335.376L840.145 334.364L841.288 333.738L842.599 333.847L843.225 334.736L843.902 337.495L844.426 338.522L845.133 339.279L845.868 339.228L846.458 337.823L847.834 336.046L851.606 339.308L852.844 338.238L853.142 335.697L852.654 323.042L852.997 322.11L853.754 322.299L856.411 324.804L858.792 325.838L860.678 325.467L862.2 323.865L864.035 319.882L864.821 317.413L865.062 315.95L864.858 314.603L863.307 312.6L862.753 311.377V311.363L862.746 311.355V311.348L863.838 308.523L864.508 307.707L865.732 307.212L866.94 307.402L867.639 308.385L867.931 309.812L867.938 311.348L866.918 315.484L866.969 316.379L867.501 316.54Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".xorazm" id="xorazm" fill-rule="evenodd" clip-rule="evenodd" d="M295.842 326.573L297.248 326.442L298.209 325.7L300.4 321.469L301.282 320.406L302.126 319.736L303.131 319.226L304.216 318.979L307.201 318.986L317.737 321.542L320.41 322.678L322.9 324.207L326.147 326.697L335.533 337.095L342.123 347.616L342.348 347.849L343.127 348.294L343.958 348.57L346.863 347.609L355.863 357.759L357.654 360.541L358.324 362.98L355.469 369.206L343.979 383.528H343.972L343.877 383.361L343.433 381.708L343.106 381.031L341.06 378.285L340.31 376.749L339.174 372.286L338.547 371.266L336.727 369.278L336.13 368.317L335.686 366.759L335.052 363.439L333.319 357.322L332.701 355.881L333.123 355.335L332.853 354.264L332.701 349.109L332.519 347.624L332.053 346.408L328.004 339.578L326.926 338.398L314.599 329.275L309.801 327.2L304.434 325.78L302.403 325.547L301.165 326.151L300.422 327.695L299.884 330.28L298.536 331.059L297.481 333.352L295.937 335.063L294.029 336.032L291.925 336.105L289.69 335.187L284.01 331.131L283.034 331.102L279.772 331.663L279.467 331L279.292 330.345L279.081 330.17L278.753 330.738L278.025 331.991L277.668 332.391L277.304 332.697L274.668 329.952L270.816 329.013L259.705 329.69L253.05 331.932L249.737 332.013L247.815 331.459L246.235 330.316L243.242 327.301L239.914 324.848L234.606 322.11L228.57 318.993L227.026 317.45L226.64 315.71L227.332 309.804L227.762 308.545L228.483 307.518L229.422 306.681L231.701 305.538L232.458 304.606L231.956 303.251L228.286 298.03L226.589 294.747L226.087 292.162L227.507 290.13L229.021 289.074L230.747 288.929L232.822 289.584L234.73 290.793L235.808 291.281L236.674 291.164L237.308 290.203L237.206 289.147L236.674 288.128L235.997 287.276L235.225 286.613L232.611 285.055L231.788 284.196L231.155 283.235H231.162L231.803 282.507L232.466 280.854L232.356 280.038L231.716 278.771L231.599 278.444L231.519 278.109L231.679 277.774L232.058 277.475L232.917 277.301L234.417 277.242L235.553 276.762L238.371 274.781L239.419 273.849L239.747 273.653L240.642 273.5L241.815 274.41L242.405 274.73L245.171 275.444L247.902 275.742L248.681 276.383L248.878 277.912L248.841 281.262L249.285 282.427L250.778 284.727L251.382 286.621L252.926 289.409L253.705 290.407L254.659 291.033L255.81 291.332L258.46 291.412L259.326 291.914L259.953 293.13L260.892 295.999L262.312 298.54L264.096 300.579L277.158 312.426L278.564 312.717L279.248 313.016L279.896 313.438L281.877 315.673L283.581 317.224L284.826 317.727L288.015 318.345L289.056 318.957L291.983 322.226L292.682 323.289L293.338 325.43L294.175 325.845L294.532 326.064L295.842 326.573Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".qashqadaryo" id="qashqadaryo" fill-rule="evenodd" clip-rule="evenodd" d="M557.141 468.793L559.107 468.785L559.966 468.494L561.124 467.737L566.388 465.13L566.658 465.116L574.616 463.273L575.665 463.208L577.07 464.104L580.332 466.718L581.213 467.176L581.934 467.366L582.378 467.322L586.499 465.654L587.024 465.145L588.815 462.407L589.164 462.036L589.616 461.657L590.475 461.169L591.465 460.885L592.193 460.871L596.533 461.584L601.215 462.509L602.402 462.691L603.508 464.803L603.712 465.8L603.363 467.781L603.261 468.873L603.341 469.448L603.559 469.87L603.865 470.111L604.222 470.315L604.623 470.467L605.416 470.628L611.503 470.395L612.173 470.249L612.472 470.103L612.734 469.856L612.945 469.55L613.062 469.179L613.105 468.822L613.098 468.465L613.011 467.759L613.025 467.402L615.96 467.54L629.146 470.868L628.731 471.239L628.469 471.552L628.352 472.047L628.258 473.067L628.666 475.877V475.899L630.216 477.341L636.879 479.729L641.364 479.897L643.541 480.778L643.782 481.047L644.219 481.841L644.524 482.176L644.903 482.241L645.82 482.045L646.177 482.161L646.672 483.006L646.68 483.02L646.782 483.996L646.155 489.508L646.432 491.234V491.248L646.49 491.307L645.667 491.933L644.677 492.333L640.672 492.515L639.973 492.69L639.325 492.96L639.005 493.156L638.67 493.447L638.27 493.862L637.942 494.365L637.796 494.889L637.811 495.486L638.219 497.139L638.532 499.666L639.879 502.112L639.988 502.418L640.068 502.775L640.046 503.182L639.988 503.627L639.879 504.034L639.813 504.464L639.784 504.835V505.207L639.821 505.571L639.893 505.928L640.003 506.27L640.177 506.991L640.214 507.384V507.792L640.061 508.316L639.777 508.877L639.202 509.758L638.947 510.34L638.808 510.864L638.794 512.102L638.707 512.437L638.51 512.677L638.124 512.626L637.833 512.444L636.835 511.374L636.602 511.185L636.311 511.003L635.947 510.85L635.139 510.617L634.265 510.508L633.471 510.544L632.772 510.719L631.979 511.083L631.462 511.483L631.105 511.825L630.806 512.19L627.515 518.619L626.954 519.376L625.971 520.374L625.447 520.796L624.61 521.24L622.433 521.772L621.981 522.806L621.377 523.818L620.394 524.895L618.333 526.607L618.028 527.043L617.671 527.946L617.365 529.148L616.768 532.767L616.338 534.434L616.185 534.813L615.486 535.584L609.377 540.492L606.224 542.254L605.584 542.451L603.581 542.778L603.137 543.106L602.635 543.703L601.783 545.138L601.193 546.536L600.989 547.344L600.691 548.21L600.334 549.048L599.919 549.798L593.191 556.096L592.739 556.693L592.404 557.851L592.12 560.603L591.822 561.55L590.963 563.254L589.324 564.317L588.647 562.409L588.633 562.402L586.776 561.069L584.781 560.101L582.669 559.518L578.453 559.496L576.742 558.979L571.15 556.351L568.58 553.103L566.963 551.552L565.165 550.715L561.59 549.696L558.168 546.943L556.624 546.128L552.983 545.538L547.42 542.844L545.563 542.677L543.983 543.317L541.318 545.473L539.899 546.273L536.112 546.579L532.399 545.341L523.319 539.189L517.843 535.468L510.402 530.415L505.196 525.653L497.856 518.954L494.15 516.624L486.031 513.748L478.946 509.641L467.34 499.819L464.209 495.748L464.216 495.741L465.068 494.845L470.1 489.319L472.684 487.542L480.272 484.477L483.235 483.406L492.41 480.072L492.723 479.882L492.978 479.591L493.109 479.001L493.065 478.586L492.912 478.229L492.723 477.945L490.961 475.776L490.575 475.215L490.313 474.596L490.225 474.268L490.167 473.926V473.562L490.225 473.169L490.56 472.564L491.092 471.844L495.293 467.249L495.621 466.994L496.028 466.798L496.698 466.718L497.208 466.761L497.856 466.521L498.548 465.982L504.082 460.441L506.681 458.468L512.128 457.179L513.176 456.502L536.717 457.099L537.365 456.888L538.552 456.262L539.709 455.417L539.957 455.14L540.139 454.827L540.219 454.463L540.241 454.106L540.197 453.021L540.248 452.635L540.357 452.279L540.823 451.966L541.42 451.856L543.153 451.922L543.678 452.002L544.042 452.133L544.318 452.308L544.566 452.555L544.755 452.839L544.894 453.152L545.425 455.475L545.549 455.846L545.578 455.883V455.897L545.877 456.414L546.474 457.252L549.357 460.07L550.995 461.206L552.386 462.276L552.546 462.611L552.721 463.04L552.736 464.14L552.663 465.269L552.67 465.742L552.714 466.273L552.838 467.096L553.092 467.533L553.449 467.802L557.141 468.793Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".qora" id="qora" fill-rule="evenodd" clip-rule="evenodd" d="M171.273 20.4437L174.87 22.8684L184.358 29.2832L194.668 36.2223L205.495 43.511L216.57 50.9452L227.601 58.3504L238.312 65.5079L248.412 72.265L257.622 78.4105L265.661 83.7696L272.243 88.1529L277.078 91.3713L280.522 93.6576L281.942 95.2595L282.94 97.3056L283.297 99.1769L283.653 103.167L284.192 104.966L287.432 110.194L293.76 117.045L296.774 120.322L299.803 123.599L303.67 128.062L306.83 131.732L310.004 135.402L313.172 139.064L316.339 142.719L319.434 146.302L322.536 149.877L325.638 153.452L328.732 157.02L332.868 161.767L333.989 162.255L335.096 162.736L335.22 162.714L341.11 172.82L343.877 175.383L358.789 179.527L359.627 180.022L359.62 180.779L359.321 181.653L344.307 210.028L330.167 237.246L327.13 244.367L325.892 259.84V260.757L326.053 261.471L332.344 273.077L333.429 275.393L333.203 275.793L332.54 276.492L320.693 283.198L319.492 284.211L319.529 285.194L319.958 286.198L343.601 318.79L359.277 340.612L359.321 341.617L346.863 347.609L343.957 348.57L343.127 348.294L342.348 347.85L342.122 347.617L335.533 337.095L326.147 326.697L322.9 324.207L320.41 322.678L317.737 321.542L307.201 318.986L304.216 318.979L303.131 319.227L302.126 319.736L301.281 320.406L300.4 321.469L298.209 325.7L297.248 326.442L295.842 326.573L294.532 326.064L294.175 325.845L293.337 325.43L292.682 323.29L291.983 322.226L289.056 318.957L288.015 318.346L284.826 317.727L283.58 317.224L281.877 315.673L279.896 313.438L279.248 313.016L278.564 312.717L277.158 312.426L264.096 300.579L262.312 298.54L260.892 295.999L259.953 293.13L259.326 291.914L258.46 291.412L255.809 291.332L254.659 291.033L253.705 290.407L252.926 289.409L251.382 286.621L250.778 284.728L249.285 282.427L248.841 281.262L248.878 277.912L248.681 276.383L247.902 275.742L245.171 275.444L242.404 274.73L241.815 274.41L240.642 273.5L239.747 273.653L239.419 273.849L238.371 274.781L235.553 276.762L234.417 277.242L232.917 277.301L232.058 277.475L231.679 277.774L231.519 278.109L231.599 278.444L231.715 278.771L232.356 280.038L232.465 280.854L231.803 282.507L231.162 283.235H231.155L229.895 281.291L228.271 279.893L222.475 277.686L219.614 277.796L218.827 277.439L218.216 276.383L218.303 275.407L218.922 274.679L219.898 274.395H219.912H219.934H219.949L223.218 273.121L223.051 270.194L221.966 266.539L222.475 263.095L223.378 262.432L224.507 261.966L225.417 261.303L225.599 260.051L224.929 259.083L223.655 258.318L221.208 257.357L219.279 255.602L217.743 253.199L216.002 251.284L213.505 251L211.044 251.299L206.253 250.869L194.602 252.668L191.748 252.58L190.372 252.049L188.173 249.675L186.877 249.224L184.066 248.918L182.486 248.051L181.751 246.726L181.103 241.018L180.571 239.59L179.792 238.331L176.29 234.661L174.965 233.824L173.552 233.969L171.95 234.748L170.363 235.185L168.746 235.28L166.285 234.836L162.412 233.081L158.72 229.644L146.851 215.613L145.512 214.834L144.492 216.538L143.735 222.909L142.57 225.093L140.291 225.77L137.458 225.596L134.626 224.933L128.677 222.516L127.337 222.465L126.303 222.792L123.384 224.591L121.301 225.508L120.296 226.266L119.787 227.365L120.1 228.807L121.126 229.732L128.036 232.994L129.98 234.515L131.677 237.137L133.148 240.617L137.24 247.294L139.461 249.93L140.087 250.512L140.342 251.168L140.145 251.779L139.461 252.194L135.915 252.733L135.019 252.5L134.371 251.495L134.386 250.338L134.684 249.063L134.866 247.702L134.306 245.044L132.886 243.136L131.014 241.76L125.539 239.161L124.33 238.942L123.333 239.11L121.338 239.976L120.442 240.056L119.554 239.539L118.294 237.654L117.5 236.867L116.452 236.496L115.199 236.452L113.976 236.685L112.971 237.151L112.381 237.901L111.894 238.775L110.488 240.399L108.988 241.069L108.056 241.862L108.369 243.843L109.549 246.391L109.644 247.549L109.163 249.289L106.92 254.459L106.127 255.347L104.022 256.032L103.571 257.007L103.971 258.18L104.678 258.981L104.845 259.687L103.637 260.568L102.573 260.801L98.809 260.626L97.7387 260.881L94.6878 262.388L92.1247 262.905L84.3264 261.536L79.0329 261.755L73.8413 264.296L69.4142 268.672L66.3852 274.373V274.395L64.3246 277.461L62.0528 279.194L56.7592 281.684L55.201 283.839L55.1865 286.693L56.4025 292.533L56.2714 295.315L55.8345 297.688L55.769 300.018L56.7592 302.654L57.9825 304.671L58.616 306.608L58.8199 308.727L58.7834 311.334L59.031 313.372L59.7737 315.411L60.8368 317.224L62.0382 318.593L62.8246 319.154L63.662 319.576L66.4289 320.253L66.8512 320.574L66.7347 321.076L66.1085 321.819L64.9362 322.663L62.3659 323.952L61.281 325.205L59.5771 328.314L58.514 328.933L51.7715 327.52L46.5653 326.421L34.2453 325.751L32.2429 325.641L20.8331 325.023L10.5664 324.455L1.61759 323.974L1.61031 307.089L1.59575 290.152L1.58847 273.158L1.58119 256.097L1.57391 238.972L1.56662 221.788L1.55934 204.545L1.54478 187.23L1.5375 169.85L1.53022 152.411L1.52294 134.899L1.51565 117.322L1.50837 99.672L1.49381 81.9565L1.48653 64.1682L1.47925 46.3143V46.307V46.2997V46.2925V46.2852V46.2779V46.2706V46.2633V46.2488V46.2415V46.2342V46.2269V46.2196L1.48653 46.2124V46.2051V46.1978V46.1905H1.49381V46.176V46.1687L1.50109 46.1614H1.50837V46.1541L1.51565 46.1468V46.1395H1.52294L1.53022 46.1323V46.125H1.5375V46.1177H1.54478L1.55206 46.1104L1.55934 46.1031H1.56662H1.57391L1.58119 46.0959L1.58847 46.0886H1.59575L1.60303 46.0813H1.61031H1.61759L6.78007 44.4139L11.9498 42.7537L17.1123 41.0936L22.2966 39.4261L27.4664 37.766L32.6361 36.0986L37.7986 34.4384L41.8252 33.1423L42.9684 32.771L48.1381 31.1108L53.3079 29.4434L58.4776 27.776L63.6401 26.1086L68.8172 24.4411L73.9869 22.7737L79.1567 21.099L84.3264 19.4316L91.2146 17.3127L98.1027 15.1938L104.998 13.0749L111.894 10.9488L115.083 9.99493L118.265 9.04834L121.454 8.10177L124.651 7.14063L127.971 6.18678L131.291 5.21837L134.611 4.24993L137.932 3.28881L142.395 2L143.691 2.12379L145.198 2.7864L149.429 5.65525L150.63 6.47803L154.067 8.80078L159.434 12.4415L166.467 17.1962L171.273 20.4437Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".jizzax" id="jizzax" fill-rule="evenodd" clip-rule="evenodd" d="M666.397 344.413L666.732 344.143L667.06 343.867L667.417 343.699L667.759 343.532L668.101 343.583L668.444 343.641L668.742 344.027L669.033 344.413L669.419 343.597L669.798 342.774L670.388 342.716L670.977 342.658L671.087 343.437L671.189 344.209L671.196 344.296L671.203 344.376L671.13 344.711L671.065 345.046L671.327 345.134L671.589 345.221L671.676 345.301L671.749 345.367L671.116 345.84L670.475 346.306L670.242 346.422L670.002 346.539L670.227 346.663L670.453 346.786L670.592 346.961L670.715 347.136L670.941 347.558L671.174 347.988L671.167 349.036L671.152 350.07L670.883 351.294L670.613 352.524L670.198 353.718L669.798 354.912L669.368 355.866L668.946 356.806L668.647 357.286L668.342 357.767L667.934 358.225L667.526 358.684L667.075 359.048L666.609 359.42L665.64 359.856L664.672 360.293L664.431 360.519L664.177 360.745L664.089 361.029L664.002 361.32L664.184 361.444L664.366 361.575L665.458 361.815L666.55 362.048L667.388 362.529L668.225 363.002L670.752 365.514L673.271 368.011L675.113 369.475L676.97 370.946L679.198 372.118L679.074 375.045L678.339 375.824L675.31 376.341L674.589 376.516L674.276 376.654L674.021 376.873L673.89 377.237L673.824 378.963L673.46 381.664L673.584 382.035L673.883 382.305L674.8 382.196L675.79 381.89L676.307 381.846L676.46 382.756L669.943 397.741L669.718 398.731L669.565 399.875L669.791 401.848L670.024 402.43L670.351 402.991L670.555 403.261L672.07 403.508L684.601 403.785L701.122 399.678L701.362 399.693L701.421 399.853L701.137 400.348L700.875 400.712L700.642 401.098L700.423 401.615L699.659 404.367L699.433 404.884L699.251 405.489L699.906 406.77L699.928 406.792L699.943 406.814L697.7 407.411L696.55 408.219L697.977 409.799L700.438 411.357L702.389 412.107L702.913 412.005L700.562 415.136L699.702 416.695L699.477 417.481L699.418 418.027L699.44 418.5L699.513 418.908L699.731 419.571L699.899 419.971L699.935 420.037L700.052 420.299L700.511 421.588L700.685 422.287L700.765 422.673L700.809 423.342L700.634 425.716L700.438 426.102L700.241 426.131L700.059 425.847L699.841 425.563L699.549 425.389L699.207 425.352L698.763 425.614L698.719 425.913L698.829 426.189L699.091 426.437L700.074 427.071L700.343 427.296L700.511 427.573L700.43 427.988L700.263 428.498L699.972 429.131L699.95 430.238L699.812 430.973L699.673 430.915L699.032 430.864L698.464 432.415L697.911 443.978L697.613 445.696L696.877 447.101L695.545 448.507L693.193 450.014L692.45 451.084L692.632 451.521L693.033 452.424L693.04 452.453L691.948 452.956L688.562 453.859L685.824 454.113L683.123 453.917L678.616 452.3L670.366 452.046L651.522 447.145L648.937 447.087L646.883 447.75L641.75 451.434L637.345 452.133L636.253 453.196L636.639 456.363L636.449 456.625L636.224 456.829L635.961 456.968L635.692 457.026L634.272 456.829L633.435 456.939L629.27 453.225L626.969 451.186L626.19 450.262L625.622 449.075L625.738 444.116L625.92 443.555L626.241 442.878L626.991 442.711L628.658 442.653L629.117 442.587L629.619 442.383L629.86 442.063L629.976 441.619L630.02 440.767L630.005 440.366L629.874 439.624L629.78 439.267L629.707 438.772L629.678 438.131L629.736 437.082L629.852 436.587L629.962 436.281L630.406 435.837L631.258 435.204L632.976 434.294L634.163 433.857L635.648 433.522L636.078 433.485L636.923 433.252L637.141 432.692L635.648 425.993L634.724 424.5L625.178 422.709L623.874 422.542L623.336 422.745L622.833 422.673L622.447 422.483L621.552 421.901L621.173 421.93L620.787 422.039L619.906 422.09L619.273 422.01L614.926 420.809L614.278 419.695L614.015 419.796L613.768 419.833L613.025 420.117L611.11 417.983L611.023 417.605L611.008 417.008L611.176 416.542L611.139 415.559L610.863 415.107L610.477 414.831L610.047 414.765L609.698 414.78L609.428 414.845L608.372 415.384L608.03 415.493L607.593 415.566L607.12 415.537L606.494 415.384L606.232 415.064L606.057 414.699L605.809 411.459L605.853 411.073L605.991 410.746L606.283 410.571L607.317 410.221L607.601 409.996L607.768 409.763L608.001 409.107L608.037 407.44L606.537 405.583L606.355 405.001L606.377 404.476L606.508 404.054L606.559 403.544L606.37 403.239L606.101 402.984L604.965 402.43L604.528 402.125L604.338 401.753L604.215 401.382L603.436 397.632L603.305 396.423L603.217 393.016L603.232 392.528L603.29 392.069L603.399 391.639L603.88 390.54L604.2 389.484L604.258 388.487L604.135 387.802L603.923 387.11L603.494 386.193L603.217 385.727L602.919 385.516L602.591 385.545L601.135 385.858L599.875 385.916L598.987 385.785L598.098 385.538L595.805 384.868L588.851 384.606L588.421 384.285L596.861 367.815L598.404 363.934L597.195 361.764L596.693 360.497L596.598 360.162V358.939L596.737 357.628L596.751 356.915L596.73 356.376L596.62 356.048L596.424 355.764L596.118 355.524L591.13 354.162L590.373 353.733L590.038 353.492L589.572 352.932L589.266 352.306L589.128 351.971L589.033 351.57L588.094 341.384L588.786 340.473L589.252 339.33L595.994 336.585L596.016 336.338L596.904 336.571L599.176 337.16L605.584 336.775L610.965 336.454L619.003 335.974L624.901 335.617L631.935 335.194L636.413 334.925L643.563 334.488L650.619 334.066L651.245 334.248L651.871 334.415L653.036 335.027L654.194 335.631L654.798 335.85L655.403 336.061L655.934 335.988L656.458 335.908L658.06 334.845L659.655 333.782L660.354 333.33L661.053 332.872L661.395 333.92L661.723 334.962L661.788 335.012L661.854 335.056L662.043 335.464L662.24 335.872L663.456 337.481L664.672 339.083L664.956 339.731L665.232 340.379L665.451 341.799L665.669 343.211L666.033 343.816L666.397 344.413Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".fargona" id="fargona" d="M842.264 415.886L840.859 416.265L840.567 416.432L839.956 416.928L839.679 417.03L839.264 416.971L839.053 416.84L838.863 416.68L835.769 415.384L834.276 414.394L833.33 413.2L832.572 411.226L831.648 409.464L830.395 408.678L828.662 409.632L827.708 411.882L827.388 413.149L827.33 414.343L827.636 415.508L828.997 418.508L829.623 419.411L830.344 419.796L831.815 420.11L832.449 420.619L832.703 422.716L830.344 426.437L830.439 428.265L831.131 428.614L831.91 428.134L832.667 427.384L833.279 426.939L834.327 426.99L834.589 427.609L834.72 428.403L835.368 429L836.184 429.073L838.791 428.374L840.64 428.33L841.405 428.046L841.994 427.172L842.104 424.959L839.672 422.338L839.548 420.481L840.444 419.6L842.999 417.809L843.371 416.68L842.948 416.01L842.264 415.886ZM897.653 386.834L897.588 386.506L897.107 384.839L896.976 383.841L897.129 382.545L897.325 381.191L897.369 380.332L897.354 379.931L897.296 379.56L896.517 378.861L893.656 378.002L893.022 377.936L892.629 377.608L891.551 376.028L890.772 375.468L890.226 375.956L889.622 376.705L888.69 376.8L885.362 376.094L882.784 375.227L881.212 375.329L880.105 375.533L878.794 375.322L878.285 375.155L877.841 374.914L875.627 371.871L875.132 371.026L874.673 370.487L874.061 370.13L871.178 369.14L870.29 369.075L869.685 369.162L869.409 369.359L868.863 369.293L868.134 369.031L866.642 368.266L866.059 368.245L865.724 368.463L865.63 369.744L865.397 369.599L864.851 368.813L863.642 366.482L862.004 363.992L857.438 365.514L852.545 368.186L851.467 369.104L849.735 371.776L846.13 375.184L844.863 375.439L844.077 375.191L841.579 373.822L840.458 372.905L839.839 372.679L838.827 372.482L838.252 372.3L837.851 372.067L836.286 370.429L835.878 370.232L833.723 369.992L833.417 369.679L836.927 364.881L830.687 365.216L828.924 364.968L828.568 364.655L828.123 364.342L827.257 363.978L826.143 363.97L823.551 366.308L822.815 366.41L821.279 366.249L820.536 366.308L819.604 366.752L818.993 367.422L818.483 368.172L817.893 368.842L816.473 369.737L816.466 369.766L815.614 370.305L815.418 370.604L815.323 370.946L815.134 371.23L814.231 371.434L813.765 371.667L812.978 372.293L812.155 373.058L808.806 375.817L806.869 378.227L806.163 378.832L805.333 379.225L804.517 379.451L803.746 379.793L802.996 380.543L801.67 382.807L801.117 383.535L800.585 383.754L796.792 384.649L795.154 385.712L794.28 387.118L794.367 388.64L794.455 388.982L794.549 389.178L795.277 390.249L795.248 390.22L795.365 390.329L795.838 390.897L795.991 391.203L795.248 393.722L797.993 394.945L799.151 395.28L800.36 395.171L801.394 394.851L802.442 394.741L803.658 395.251L805.122 397.661L805.857 401.003L806.84 404.076L809.061 405.678L811.384 405.824L813.75 405.627L821.607 403.202L826.492 402.758L827.628 402.867L829.623 400.829L832.827 400.275L839.228 401.2L840.975 401.025L841.754 399.809L842.242 398.207L843.101 396.889L843.888 396.649L844.448 397.101L844.936 397.858L845.511 398.528L846.276 398.855L847.186 398.943L848.919 398.761L850.033 398.841L851.766 400.472L854.234 401.236L854.766 402.103L855.203 403.173L856.208 404.134L857.38 404.877L858.64 405.365L861.232 405.882L862.593 405.751L863.074 404.921L863.205 403.668L863.54 402.285L864.545 401.382L865.52 402.234L866.3 403.872L866.685 405.336L866.671 408.299L867.013 409.399L868.127 409.887L868.892 409.661L871.79 407.942L872.678 407.091L873.275 406.108L874.309 403.814L876.02 402.088L878.03 401.972L880.2 402.503L882.377 402.685L883.018 402.481L883.338 402.43L883.775 402.525L884.437 402.802L885.311 402.947L886.09 402.751L886.447 401.964L886.141 401.397L885.777 401.156L885.377 400.887L883.782 400.144L882.748 399.387L882.355 398.302L882.661 397.283L887.43 394.851L888.886 393.394L889.687 391.37L890.022 390.016L890.532 389.266L894.202 387.234L895.126 386.994L897.646 386.863L897.653 386.834ZM871.87 421.224L869.853 422.738L868.899 423.211L867.516 423.284L866.62 424.355L867.159 425.389L868.346 426.248L869.409 426.757L870.821 427.187L871.68 427.02L872.219 426.131L873.472 421.537L873.239 420.787L871.87 421.224Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".buxoro" id="buxoro" fill-rule="evenodd" clip-rule="evenodd" d="M429.331 367.495L435.899 365.186L439.838 359.31L443.115 352.444L444.105 351.01L445.197 350.129L446.304 349.743L447.338 350.019L448.423 350.93L449.544 352.612L449.828 355.094L449.923 359.893L450.687 361.473L453.025 362.31L467.952 364.094L469.197 362.937L470.871 356.427L471.92 355.866L473.784 355.153L481.08 354.825L483.483 354.323L485.245 353.558L487.014 351.046L487.684 351.133L488.165 352.874L489.337 360.206L489.839 362.143L490.618 364.284L492.526 365.878L494.434 366.97L499.88 368.31L516.591 369.468L519.234 368.703L517.931 373.218L517.669 375.074L517.545 376.982L517.559 378.781L517.683 380.237L517.887 381.103L517.843 381.934L517.108 381.912L514.225 381.293L513.678 381.256L513.161 381.409L512.732 381.788L512.106 382.727L512.011 383.63L510.54 388.232L509.331 389.644L508.312 390.606L507.067 394.581L506.47 395.797L499.989 395.732L498.73 395.317L497.55 394.523L496.436 393.547L495.366 393.241L494.128 393.256L492.213 393.584L491.296 394.093L490.786 394.712L490.633 395.397L490.553 396.067L490.524 396.7L490.815 398.105L492.191 399.496L491.281 402.227L490.786 402.7L490.524 402.787L490.487 402.955L490.567 403.246L491.194 404.265L492.817 405.926L493.662 406.996L493.895 407.462L493.829 407.717L492.177 407.913L491.798 408.008L491.456 408.256L491.041 408.569L490.553 408.591L489.708 409.275L487.094 414.627L486.33 415.697L485.361 416.636L484.371 417.343L481 418.886L480.563 419.833L480.141 420.284L479.944 420.59L478.153 422.855L477.257 424.85L476.478 426.685L477.33 428.454L481.335 434.017L482.871 435.073L485.463 436.507L485.536 436.922L485.82 437.57L486.017 438.182L486.788 438.568L487.851 438.626L490.254 437.527L491.084 437.701L491.58 438.51L498.155 441.611L499.167 443.308L499.618 444.903L499.64 446.068L499.815 447.626L500.259 449.118L501.322 449.73L502.64 450.211L503.477 450.677L504.453 451.667L505.334 452.883L505.56 453.291L505.902 454.084L506.448 455.985L506.543 456.48L506.681 458.468L504.082 460.441L498.548 465.982L497.856 466.521L497.208 466.761L496.698 466.717L496.028 466.798L495.621 466.994L495.293 467.249L491.092 471.844L490.56 472.564L490.225 473.169L490.167 473.562V473.926L490.225 474.268L490.313 474.596L490.575 475.215L490.961 475.775L492.723 477.945L492.912 478.229L493.065 478.586L493.109 479.001L492.978 479.591L492.723 479.882L492.41 480.071L483.235 483.406L480.272 484.477L472.684 487.542L470.1 489.319L465.068 494.845L464.216 495.741L464.209 495.748L462.542 493.578L461.231 492.763L459.563 492.959L455.297 495.1L453.877 495.413L452.246 495.1L450.593 494.234L441.717 487.87L434.02 482.343L427.911 477.953L424.555 474.494L418.635 466.186L415.133 462.851L407.473 457.383L389.291 444.386L380.335 437.978L372.821 432.583L366.362 427.952L363.18 424.733L362.583 424.391L358.629 419.389L358.025 417.466L357.057 413.418L356.904 411.765L357.137 410.207L357.595 408.896L357.901 407.593L357.683 406.057L355.994 402.372L355.768 400.894L355.724 398.979L355.52 397.545L355.069 396.234L353.649 393.373L353.307 392.033L353.139 388.975L352.608 388.327L348.042 385.691L345.428 384.904L344.234 384.001L343.972 383.528H343.979L355.469 369.206L358.324 362.98L357.654 360.541L355.862 357.759L346.863 347.609L359.321 341.617L359.277 340.612L343.601 318.79L363.144 311.363L367.797 311.472L369.544 315.513L370.906 317.938L380.182 328.896L387.616 342.083L388.934 342.84L393.813 343.961L401.058 346.786L409.555 351.578L426.149 361.815L427.394 364.014L429.419 366.075L429.331 367.495Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                        <path data-ser=".andijon" id="andijon" fill-rule="evenodd" clip-rule="evenodd" d="M923.735 357.519L930.841 356.871L932.968 357.454L933.208 359.587L933.062 360.803L933.769 360.694L936.317 358.91L940.402 357.009L941.283 357.614L942.047 358.684L943.169 359.478L946.416 359.274L947.661 359.558L948.113 359.66H948.12L948.411 361.131L946.722 363.366L944.108 364.859L938.931 366.781L934.205 369.766L930.23 370.779L928.293 371.609L926.982 373.64L926.334 378.482L924.732 379.225L922.701 378.293L921.696 378.286L921.266 379.494L921.194 380.565L920.939 381.599L920.407 382.494L919.563 383.171L917.371 383.295L913.483 380.616L911.356 380.339L909.769 379.545L907.942 377.412L906.107 375.788L904.476 376.531L904.286 377.725V377.732L905.466 379.727L905.48 379.742L905.473 381.038L905.102 382.225L905.116 383.033V383.04L905.597 383.696L907.985 385.429H907.992L908.233 386.033L908.568 386.863L908.575 386.878L908.517 388.574L907.92 390.402L906.798 391.945L905.502 392.215L904.01 391.654L900.748 389.739L899.939 389.433L897.442 389.55L896.743 389.324L896.75 389.302L897.012 388.647L897.646 388.458L898.585 388.37L899.386 388.108L899.612 387.373L899.597 387.365L899.087 386.95L898.083 386.834L897.66 386.856L897.653 386.834L897.588 386.499L897.107 384.832L896.976 383.834L897.136 382.531L897.333 381.176L897.376 380.317L897.354 379.917L897.296 379.545L896.517 378.853L893.663 377.987L893.022 377.922L892.629 377.594L891.559 376.014L890.779 375.453L890.233 375.941L889.629 376.691L888.697 376.793L885.369 376.079L882.792 375.213L881.219 375.315L880.112 375.519L878.802 375.307L878.292 375.133L877.848 374.9L875.634 371.856L875.132 371.011L874.673 370.473L874.061 370.123L871.178 369.126L870.29 369.067L869.685 369.155L869.409 369.351L868.862 369.293L868.134 369.031L866.649 368.266L866.066 368.237L865.732 368.463L865.637 369.745L865.411 369.599L864.858 368.82L863.656 366.49L862.011 364L863.605 362.434L862.732 360.606L862.069 359.725L862.018 359.23L862.251 358.808L864.042 357.14L864.741 356.638L865.455 355.568L871.156 354.039L872.991 354.963L875.292 353.857L875.933 353.667H877.134L878.467 353.769L879.981 353.624L887.204 355.378L888.165 355.488L889.076 355.306L892.381 355.175L893.219 355.022L893.546 354.869L893.801 354.73L894.216 354.337L895.534 348.257L895.847 347.07L899.022 346.102L901.046 345.818L901.461 345.483L902.095 343.554L902.386 343.029L903.398 342.214L904.133 342.716L905.713 345.199L906.864 345.927L908.422 346.386L911.356 346.67L911.648 346.896L911.801 347.194L911.822 347.566L911.735 348.01L911.721 349.684L912.718 350.201L914.087 350.296L915.15 350.711L917.517 354.41L919.228 356.289L921.368 357.235L923.735 357.519Z" fill="#1C9CD9" fill-opacity="0.2" stroke="white" stroke-width="2.5" stroke-miterlimit="10"></path>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-block">
                    <div class="name">{{$footer['aloqa']}}/
                        {{$footer['manzil']}}
                    </div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 20.7071C8.31658 21.0976 7.68342 21.0976 7.29289 20.7071L0.928932 14.3431C0.538408 13.9526 0.538408 13.3195 0.928932 12.9289C1.31946 12.5384 1.95262 12.5384 2.34315 12.9289L8 18.5858L13.6569 12.9289C14.0474 12.5384 14.6805 12.5384 15.0711 12.9289C15.4616 13.3195 15.4616 13.9526 15.0711 14.3431L8.70711 20.7071ZM9 -1.20277e-08L9 20L7 20L7 1.20277e-08L9 -1.20277e-08Z" fill="#3C79BF"></path>
                        </svg></a>
                    <div class="helper-ui-text">{{$sc}}</div>
                </div>
            </section>
            <section class="fullscreen">
                <div class="content">
                    <div class="section-container">
                        <div class="footer " id="footer">
                            <div class="head  animate__animated ">
                                <div class="col-md-4">
                                    <h1 class="title_blue">
                                        {{$footer['aloqa']}}/ <br>
                                        {{$footer['manzil']}}
                                    </h1>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <b>{{$footer['telefon']}}:</b>
                                        <p>+998 (95) 476 76 76</p>
                                    </div>
                                    <div>
                                        <b>{{$footer['pochta']}}:</b>
                                        <p>
                                            info@chint.uz
                                        </p>
                                    </div>
                                    <div>
                                        <b>{{$footer['manzil']}}:</b>
                                        <p>{{$footer['adres1']}}, <br>
                                            {{$footer['adres2']}},<br>
                                            {{$footer['adres3']}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5988.86437547434!2d69.245593!3d41.364694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIxJzUyLjkiTiA2OcKwMTQnNDQuMSJF!5e0!3m2!1sru!2s!4v1634725986375!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="next-block bg">
                    <div class="name">{{$footer['home']}}</div><a href="" class="link next-main-link">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.70711 0.292892C8.31658 -0.0976315 7.68342 -0.0976315 7.29289 0.292892L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 21L9 1L7 1L7 21L9 21Z" fill="#3C79BF" />
                        </svg>
                    </a>
                    <div class="helper-ui-text">скролить</div>
                </div>
            </section>
        </div>
    </div>
</div>



<div class="mobile">
    <div class="m-header">
        <div class="m-head">
            <div class="m-logo">
                <img src="front/assets/mobile/logo-m.svg" alt="">
            </div>
            <button id="nav-open">
                <img src="front/assets/mobile/logo-tg.svg" alt="">
            </button>
        </div>
        <div class="tg-menu">
            <ul style="position: relative;" id="navs" class="animate__animated animate__fadeInDown">
                <li style="position: absolute; top: 0px; right: 20px; cursor: pointer;" ontouchstart="scrollcho('500')">
                    <a>&times;</a>
                </li>
                <li ontouchstart="scrollcho('0')">
                    <a>{{$menu['brend']}}</a>
                </li>
                <li ontouchstart="scrollcho('1020')">
                    <a>{{$menu['haqimizda']}}</a>
                </li>
                <li ontouchstart="scrollcho('1955')">
                    <a>{{$menu['raqam']}}</a>
                </li>
                <li ontouchstart="scrollcho('2524')">
                    <a>{{$menu['jamoa']}}</a>
                </li>
                <li ontouchstart="scrollcho('3358')">
                    <a>{{$menu['mijoz']}}</a>
                </li>
            </ul>
            <div class="fixed-slider-arrow lang">
                <ul>
                    <li <?
                        if ($c == "en")
                            echo "class='active'";
                        ?>>
                        <a onclick="addCookie('ens')" href="?lan=en">EN</a>

                    </li>
                    <li <?
                        if ($c == "ru")
                            echo "class='active'";
                        ?>>
                        <a onclick="addCookie('rus')" href="?lan=ru">RU</a>
                    </li>
                    <li <?
                        if ($c == "uz")
                            echo "class='active'";
                        ?>>
                        <a onclick="addCookie('uzs')" href="?lan=uz"> UZ</a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="m-slider">
            <div id="m-slider" class="splide slide-4">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <h1>
                                {{$header['title1']}}
                                {{$header['uzb']}}
                            </h1>
                            <p class="oriq">
                                {{$header['content1']}}
                                {{$header['content2']}}
                            </p>
                        </li>
                        <li class="splide__slide">
                            <h1>
                                {{$header['title1']}}
                                {{$header['uzb']}}
                            </h1>
                            <p class="oriq">
                                {{$header['content1']}}
                                {{$header['content2']}}
                            </p>
                        </li>
                        <li class="splide__slide">
                            <h1>
                                {{$header['title1']}}
                                {{$header['uzb']}}
                            </h1>
                            <p class="oriq">
                                {{$header['content1']}}
                                {{$header['content2']}}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="one" class="m-brend">
        <div class="m-title">
            <h1>{{$brend['brendlar']}}</h1>
        </div>
        <div class="m-brend-body">
            <div class="m-ustun ">
                <div class="row" id="modalOpen" data-modal="chint">
                    <hr>

                    <p>CHINT</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="nuraLi">
                    <hr>

                    <p>NURA CABELS</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="readray">
                    <hr>

                    <p>REDRAY</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="nuraEl">
                    <hr>

                    <p>NURA ELECTRICS</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="tekfor">
                    <hr>

                    <p> TEKFOR</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>

                </div>
                <div class="row" id="modalOpen" data-modal="novatek">
                    <hr>
                    <p> NOVATEK ELECTRO</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="kbt">
                    <hr>

                    <p>KBT</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>

                </div>
                <div class="row" id="modalOpen" data-modal="mutlusan" style="position: relative;bottom: -10px;">
                    <hr>
                    <p> MUTLUSAN</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>
                </div>
                <div class="row" id="modalOpen" data-modal="onka" style="position: relative;bottom: -10px">
                    <hr>

                    <p> ONKA</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>

                </div>
                <div class="row" id="modalOpen" data-modal="onka" style="position: relative;bottom: -10px;">
                    <hr>

                    <p> EATON</p>
                    <div class="row">


                        <p class="animate__animated animate__fadeIn" style="color: #3c79bf;text-transform: uppercase;position: relative;top: 4px;left: 14px;">
                            {{$brend['batafsil']}}
                        </p>

                    </div>

                </div>
            </div>
            <div class="m-ustun">

                <img src="front/icons/1.svg" alt="" class="chint" data-modal="chint" id="imgtab">
                <img src="front/icons/3.svg" alt="" class="nuraLi" data-modal="nuraLi" id="imgtab">
                <img src="front/icons/4.svg" alt="" class="readray" data-modal="readray" id="imgtab">

                <img src="front/icons/2.svg" alt="" class="nuraEl" data-modal="nuraEl" id="imgtab">
                <img src="front/icons/5.svg" alt="" class="tekfor" data-modal="tekfor" id="imgtab">

                <img src="front/icons/6.svg" alt="" class="novatek" data-modal="novatek" id="imgtab">
                <img src="front/icons/7.svg" alt="" class="kbt" data-modal="kbt" id="imgtab">
                <img src="front/icons/8.svg" alt="" class="mutlusan" data-modal="mutlusan" id="imgtab">
                <img src="front/icons/10.svg" alt="" class="onka" data-modal="onka" id="imgtab">
                <img src="front/icons/9.svg" alt="" class="eaton" data-modal="eaton" id="imgtab">
            </div>
        </div>

    </div>

</div>
<div id="two" class="m-about">
    <div class="m-title white">
        <h1>{{$about['biz']}}</h1>
    </div>
    <div class="m-about-body">
        <p>
            {{$about['content1']}}
        </p>
        <span class="oriq">
                {{$about['content2']}}
            </span>
    </div>
</div>
<div id="three" class="m-chisla">
    <div class="m-title">
        <h1>Nura Group {{$numbers['raqamlarda']}}</h1>
    </div>
    <div class="m-ustun ">
        <div class="item">
            <div class="fl">
                <img src="front/./images/square.svg" alt="">
                <span>4000</span>
            </div>
            <small class="oriq">{{$numbers['info1']}}</small>
        </div>
        <div class="item ">
            <div class="fl">
                <img src="front/./images/square.svg" alt="">
                <span style="display: flex; align-items: flex-end; "> <span>14</span>
                        <p>{{$numbers['info2']}}</p>
                    </span>

            </div>
            <small class="oriq">{{$numbers['info3']}}</small>
        </div>
        <div class="item ">
            <div class="fl">
                <img src="front/./images/square.svg" alt="">
                <span>3000</span>
            </div>
            <small class="oriq">{{$numbers['info4']}}</small>
        </div>
        <div class="item ">
            <div class="fl">
                <img src="front/./images/square.svg" alt="">
                <span>8</span>
            </div>
            <small class="oriq">{{$numbers['info5']}}</small>
        </div>
    </div>
</div>
<div id="four" class="m-komanda">
    <div class="m-title white">
        <h1>{{$team}}</h1>
    </div>




    <!-- qaytish kerak -->
    <style>
        .m-mySlides {
            display: none;
        }
    </style>
    <div class="m-cards">

        @foreach($teams as $t)
            <div class="card m-mySlides animate__animated animate__fadeInRight">
                <img src="{{URL::to($t->img)}}" alt="">
                <div class="text">
                    <h3>{{$t->$name_team}}</h3>
                    <p class="">{{$t->$info_team}}</p>
                </div>
            </div>
        @endforeach

    </div>
    <div class="m-slide-buttons">
        <button ontouchstart="MminusSlides(6)"></button>
        <button ontouchstart="MplusSlides(6)"></button>
    </div>
    <script>
        function MplusSlides(n) {
            const slider = document.querySelectorAll(".m-mySlides")
            slider.forEach((item) => {
                item.style.display = "none"
            })
            for (let i = n; i <= n + 5; i++) {
                slider[i].style.display = "flex"
            }
        }
        MminusSlides(6)

        function MminusSlides(n) {
            const slider = document.querySelectorAll(".m-mySlides")
            slider.forEach((item) => {
                item.style.display = "flex"
            })
            for (let i = n; n <= slider.length; i++) {
                slider[i].style.display = "none"
            }
        }
    </script>
</div>
<div id="five" class="m-klient">
    <div class="m-title">
        <h1>{{$client['mijoz']}}</h1>
    </div>
    <div class="col animate__animated">
        <div class="m-slide-1 splide">

            <div class="title">
                <p class="oriq">{{$client['info1']}}</p>
            </div>
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <img src="front/./slide-1/dxxx.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/ichki ishlar vazirlgi.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/milliy stadium.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/uztelecom.svg">

                    </li>

                </ul>
            </div>

        </div>

        <div class="m-slide-2 splide">
            <div class="title">
                <p class="oriq">{{$client['info2']}}</p>
            </div>
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <img src="front/./slide-1/dxxx.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/ichki ishlar vazirlgi.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/milliy stadium.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./slide-1/uztelecom.svg">

                    </li>

                </ul>
            </div>
        </div>

        <div class="m-slide-3 splide">
            <div class="title">
                <p class="oriq">{{$client['info3']}}</p>
            </div>
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <img src="front/./assets/slider/Untitled-1.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./assets/slider/Untitled-2.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./assets/slider/Untitled-3.svg">

                    </li>
                    <li class="splide__slide">
                        <img src="front/./assets/slider/Untitled-4.svg">

                    </li>

                </ul>
            </div>
        </div>



    </div>
</div>
<div class="m-news">
    <div class="m-title">
        <h1>{{$yangilik}}</h1>
    </div>
    <div class="m-news-body">
        @foreach($news as $n)
            <div class="m-post">
                <div class="img">
                    <img src="{{URL::to($n->img)}}" alt="">
                </div>
                <div class="post-txt">
                    <h3>
                        {{$n->$title_news}}
                    </h3>
                    <small>{{$n->created_at}}</small>
                </div>
            </div>
        @endforeach

        <div class="show-all">
            <img src="front/assets/plus.svg" alt="">
            <a href="{{url('/news')}}">
                <p>{{$yangiliklar}}</p>
            </a>
        </div>
    </div>
</div>
<div class="m-map">
    <div class="m-title white">
        <h1> {{$karta['title']}}</h1>
    </div>
    <div id="m-slider" class="splide slide-5">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['namangan']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/namangan.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['fargona']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/fargona.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['andijon']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/andijon.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['toshkent']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/toshkent.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['sirdaryo']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/sirdaryo.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['jizzax']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/jizzax.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['samarqand']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/samarqand.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['buxoro']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/buxoro.svg" alt="">
                </li>
                <li class="splide__slide">
                    <div class="name">
                        <p>{{$karta['navoiy']}}</p>
                        <h2>120</h2>
                    </div>
                    <img src="front/assets/mobile/navoiy.svg" alt="">
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="m-footer footer aos-init aos-animate" data-aos="zoom-in-up">
    <div class="head  animate__animated ">
        <div class="m-title">
            <h1>
                {{$footer['aloqa']}}/
                {{$footer['manzil']}}
            </h1>
        </div>
        <div style="opacity: .7;">
            <div>
                <b>{{$footer['telefon']}}:</b>
                <p>+998 (95) 476 76 76</p>
            </div>
            <div>
                <b>{{$footer['pochta']}}:</b>
                <p>
                    info@chint.uz
                </p>
            </div>
            <div>
                <b>{{$footer['manzil']}}:</b>
                <p>{{$footer['adres1']}}, <br>
                    {{$footer['adres2']}},<br>
                    {{$footer['adres3']}}
                </p>
            </div>
        </div>
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.798506149414!2d69.29032861479428!3d41.31324680855213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef5c18225d463%3A0x208f0c7fb03dc27!2s2GIS!5e0!3m2!1suz!2s!4v1633769158481!5m2!1suz!2s" width="300" height="170" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>

</div>
</div>

</div>
<style>
    .onas a {
        color: #126eb4 !important;
        font-size: 20px;
    }
</style>
<div class="modals">
    <div class="alert-modal" id="chint">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/1.svg" alt="">
                    <p>{{$brend['chint']}}</b>
                    </p>
                    <a href="#">www.chint.uz</a>
                </div>

            </div>
        </div>

    </div>
    <div class="alert-modal" id="nuraEl">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/2.svg" alt="">
                    <p>{{$brend['nura']}}</b>
                    </p>
                    <a href="#">www.nura-light.uz</a>
                </div>

            </div>
        </div>

    </div>
    <div class="alert-modal" id="nuraLi">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/3.svg" alt="">
                    <p>{{$brend['nura_e']}}
                    </p>
                    <a href="#">www.Nura-light.uz</a>
                </div>

            </div>
        </div>

    </div>
    <div class="alert-modal" id="readray">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/4.svg" alt="">
                    <p>{{$brend['redray']}}</b>
                    </p>
                    <a href="#">www.readray.uz</a>
                </div>

            </div>
        </div>

    </div>
    <div class="alert-modal" id="tekfor">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/5.svg" alt="">
                    <p>{{$brend['tekfor']}}</b>
                    </p>
                    <a href="#">www.tekfor.uz</a>
                </div>

            </div>
        </div>

    </div>

    <div class="alert-modal" id="novatek">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/6.svg" alt="">
                    <p>{{$brend['novatek']}}</b>
                    </p>
                    <a href="#">www.novatek.uz</a>
                </div>

            </div>
        </div>

    </div>
    <div class="alert-modal" id="kbt">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/7.svg" alt="">
                    <p>{{$brend['kbt']}}
                    </p>
                    <a href="#">www.kbt.uz</a>
                </div>

            </div>
        </div>

    </div>

    <div class="alert-modal" id="mutlusan">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/8.svg" alt="">
                    <p>{{$brend['mutlusan']}}
                    </p>
                    <a href="#">www.mutlusan.uz</a>
                </div>

            </div>
        </div>

    </div>

    <div class="alert-modal" id="eaton">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/9.svg" alt="">
                    <p>{{$brend['eaton']}}
                    </p>
                    <a href="#">www.eaton.uz</a>
                </div>

            </div>
        </div>

    </div>

    <div class="alert-modal" id="onka">
        <div class="onas fadeInBottom" id="onas">
            <div class="head row">
                <div class="col-md-4">
                    <div class="row nazad" id="nazad"><img src="front/nazad.svg" alt="">
                        <h1>{{$brend['qaytish']}}</h1>
                    </div>
                </div>
                <div class="col-md-8 txt_my">
                    <img src="front/icons/10.svg" alt="">
                    <p>{{$brend['onka']}}
                    </p>
                    <a href="#">www.onka.uz</a>
                </div>

            </div>
        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>

<script src="{{asset('front/net.js')}}"></script>




<script type="text/javascript" src="{{asset('front/bitrix/cache/js/s1/texx/template_60d764e4aad94d9b4d5f5dbfae0fd914/template_60d764e4aad94d9b4d5f5dbfae0fd914.js')}}">
</script>



<script>
    function addCookie(lan) {
        document.cookie = `lang=${lan}`;
        var url = window.location.href;
        window.location.reload(url);
    }
</script>`
</script>


<script>
    document.querySelectorAll(".mobile ul li a").forEach((item) => {
        item.addEventListener('touchstart', function() {
            document.querySelector(".tg-menu").style.left = "-100%";
        })
    });
    document.querySelector("#nav-open").addEventListener('touchstart', function() {
        document.querySelector(".tg-menu").style.left = "0%";
    })

    var myVar = setInterval(consoleClera, 3000);

    function consoleClera() {
        console.clear()
    }


    setTimeout(() => {
        document.querySelector(".overflow-wrapper").style.display = ""
        document.querySelector(".mobile").style.display = ""
        document.querySelector(".preloader").style.display = "none"
    }, 2000);
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="{{asset('front/assets/keyframe.js')}}"></script>
<script>
    function scrollcho(id) {
        document.body.scrollTop = id
    }
</script>








</body>

</html>
