<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Giro - всё о гироскутерах</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
<style>*, ::after, ::before {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    --hot-color: #ff4600;
}

body {
    font-family: "Roboto", sans-serif;
    padding-top: 44px;
    background: linear-gradient(180deg, rgba(245, 245, 245, 0) 0%, #f5f5f5 60%);
}

/*::-webkit-scrollbar {*/
/*    width: 15px;*/
/*}*/

/*::-webkit-scrollbar-thumb {*/
/*    background: #c5cae9;*/
/*    border-radius: 10px 0 0 10px;*/
/*}*/

.logo {
    width: 101px;
    height: 58px;
}

.container {
    max-width: 1200px;
    margin: auto;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 44px;
}

.phone {
    font-size: 24px;
    padding: 8px 8px 8px 35px;
    background: #1890ff url(img/phone.svg) no-repeat left 11px center;
    align-items: center;
    border-radius: 4px;
    border: 1px solid #1890ff;
    color: #fff;
    text-decoration: none;
}

.promo {
    background: #C5CAE9 url(img/promo.png) no-repeat center right -50px / 400px;
    color: #333;
    padding: 68px 50px;
}

.promo strong {
    color: #e23f3f;
    background: #eee;
    border-radius: 5px;
    padding: 2px 4px;
}

.promo-title {
    font-style: normal;
    font-weight: bold;
    font-size: 39px;
    line-height: 46px;
}

.promo-text {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 28px;
    max-width: 538px;
}

.section-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.section-title {
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 42px;
    margin: 0;
    color: #000000;
}


#modal-back {
    z-index: 130;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    padding: 20px;
}

#modal {
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    outline: 0;
    max-width: 600px;
    border-radius: 10px;
}

#modal-close {
    margin: 5px;
    float: right;
    background: #aaa;
    padding: 5px;
    font-family: Consolas, monospace;
    border-radius: 5px;
    cursor: pointer;
}

#modal-content {
    overflow: auto;
    max-height: calc(100vh - 80px);
}

#modal-content h2 {
    text-align: center;
}

#modal-content p {
    text-align: justify;
}

#modal-content img {
    width: 300px;
    float: right;
    margin-left: 30px;
}

#modal-content .float-left {
    float: left;
    margin-right: 30px;
    margin-left: 0;
}

.modal-content {
    display: none;
    padding: 20px;
}

#modal-input-close:checked ~ #modal-back {
    display: none;
}

#modal-input-elsa:checked ~ #modal-back #modal-content-elsa {
    display: block;
}

#modal-input-sigv:checked ~ #modal-back #modal-content-sigv {
    display: block;
}

#modal-input-gyro:checked ~ #modal-back #modal-content-gyro {
    display: block;
}


.brand-card {
    min-width: 200px;
    max-width: 200px;
    padding: 15px;
    margin: 5px;
}

.brand-image {
    width: 170px;
    height: 70px;
    margin: auto;
}


#items-filter {
    display: flex;
}

.filter-header, .filter-label {
    margin: 5px;
    line-height: 20px;
}

.filter-label {
    text-decoration: line-through;
    width: 50px;
    height: 50px;
    background: #ccc url(img/2wheel.svg) no-repeat 10px;
    background-size: 30px 30px;
    border-radius: 25px;
    transition: all .2s ease-out;
}

#filter-gyro:checked ~ .cards .card-gyro,
#filter-velo:checked ~ .cards .card-velo,
#filter-mowe:checked ~ .cards .card-mowe,
#filter-sigv:checked ~ .cards .card-sigv {
    display: block;
}

#filter-gyro:checked ~ .section-heading #filter-label-gyro,
#filter-velo:checked ~ .section-heading #filter-label-velo,
#filter-mowe:checked ~ .section-heading #filter-label-mowe,
#filter-sigv:checked ~ .section-heading #filter-label-sigv {
    background-color: #1890ff;
    border-radius: 5px;
}

#items-empty {
    text-align: center;
}

#filter-gyro:checked ~ .cards #items-empty,
#filter-velo:checked ~ .cards #items-empty,
#filter-mowe:checked ~ .cards #items-empty,
#filter-sigv:checked ~ .cards #items-empty {
    display: none;
}

#filter-label-gyro {
    background-image: url(img/2wheel.svg);
}

#filter-label-velo {
    background-image: url(img/electricbike.svg);
}

#filter-label-mowe {
    background-image: url(img/monowheelsvg.svg);
}

#filter-label-sigv {
    background-image: url(img/monopattino.svg);
}


.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    background-color: #000d;
    color: #fff;
    text-align: center;
    padding: 5px;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    bottom: 120%;
    right: 0;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

.tooltip .tooltiptext::after {
    content: " ";
    position: absolute;
    top: 100%;
    right: 25px;
    border-width: 5px;
    border-style: solid;
    border-color: black transparent transparent transparent;
}


.cards {
    display: flex;
    align-items: flex-start;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.items .card {
    display: none;
}

.card {
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 7px;
    overflow: hidden;
    margin-bottom: 30px;
    flex-basis: 31%;
    cursor: pointer;
    transition: all .5s;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.14);
}

.hot-card {
    border: 3px solid var(--hot-color);
}

.hot-card .card-tag {
    background: var(--hot-color);
}

.hot-card .card-title {
    color: var(--hot-color);
}

.card-image {
    width: 100%;
    max-height: 250px;
    object-fit: cover;
}

.card-text {
    padding: 20px 23px 35px;
}

.card-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.card-title {
    margin: 0;
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 32px;
}

.card-tag {
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    background-color: #000000;
    border-radius: 2px;
    padding: 1px 8px;
    white-space: nowrap;
}

.card-info {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.rating {
    margin-right: 26px;
    color: #ffc107;
    font-weight: bold;
    font-style: 18px;
    line-height: 32px;
}

.category,
.price {
    color: #8c8c8c;
    font-size: 18px;
    line-height: 32px;
}

.price {
    margin-right: 10px;
}

.category {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    max-width: 150px;
}

.price::after {
    content: "";
    width: 5px;
    height: 5px;
    background-color: #8c8c8c;
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    margin-left: 10px;
}


.about-items-card {
    text-decoration: inherit;
    color: inherit;
}

.about-items-card-image {
    object-fit: fill;
}


#scrolTop {
    position: fixed;
    bottom: 25px;
    right: 35px;
    background: rgba(82, 82, 82, 0.64);
    padding: 5px 25px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    z-index: 99;
    width: 65px;
    height: 65px;
}

#scrolTop:before {
    content: " ";
    display: block;
    position: absolute;
    top: 38px;
    left: 20px;
    border: 6px solid #fff;
    border-top: none;
    border-right: none;
    width: 1.5rem;
    height: 1.5rem;
    -webkit-transform: translateY(-50%) rotate(135deg);
    -ms-transform: translateY(-50%) rotate(135deg);
    transform: translateY(-50%) rotate(135deg);
}


#support {
    position: fixed;
    bottom: 25px;
    left: 35px;
    overflow: hidden;
    display: flex;
    transition: all ease-out .5s;
    padding: 15px;
    border-radius: 35px;
    color: #fff;
    background: #1890ff;
    text-decoration: none;
    z-index: 99;
    opacity: 70%;
}

#support:hover, #support-btn:checked ~ #support {
    opacity: 100%;
}

#support-icon {
    cursor: pointer;
    width: 40px;
    height: 40px;
}

#support-content {
    display: none;
    transition: all ease-out .5s;
}

#support-content p {
    line-height: 40px;
    margin: 0 10px;
    text-decoration: none;
}

#support-header {
    font-weight: bold;
}

#support-input {
    min-width: 90%;
    min-height: 20px;
    max-width: 400px;
    max-height: 200px;
    border-radius: 5px;
}

#support-btn:checked ~ #support {
    border-radius: 15px;
}

#support-btn:checked ~ #support > #support-content {
    display: block;
}


.subscrib {
    margin: 10px -8px;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
}

.subscrib-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    padding: 0 5px;
    color: #eee;
    max-width: 1200px;
}

.subscrib p {
    font-weight: bold;
}

.formInput {
    padding: 10px;
    border: 1px solid #999;
    border-radius: 5px;
    margin: 5px;
}

.formInput[type="submit"] {
    cursor: pointer;
}

.formInput[type="submit"] {
    text-decoration: none;
    float: right;
    color: #eee;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 200% 100%;
    padding: 10px 30px;
    border-radius: 8px;
    transition: all .6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.formInput[type="submit"]:hover {
    filter: drop-shadow(0px 2px 2px #222a);
    transform: scale(1.05, 1.05) translateY(-2px);
    background-position: 100%;
}


.footer {
    padding: 40px 8px;
    background: #fff;
    margin: -8px;
}

.footer-block {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.footer-nav {
    margin-right: auto;
    margin-left: 35px;
}

.footer-link {
    display: inline-block;
    color: #595959;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 21px;
    text-decoration: none;
}

.footer-link:not(:last-child) {
    margin-right: 15px;
}

.social-links {
    display: flex;
    align-items: center;
}

.social-link:not(:last-child) {
    margin-right: 21px;
}

@media (max-width: 1200px) {
    .container {
        min-width: 960px;
    }

    .rating {
        margin-right: 15px;
    }

    .category,
    .price {
        font-size: 14px;
    }
}

@media (max-width: 992px) {
    .container {
        min-width: 750px;
    }

    .promo {
        padding: 50px;
        background-size: 350px;
    }

    .promo-text {
        font-size: 18px;
    }

    .card {
        flex-basis: 45%;
    }

    .footer-link {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .container {
        min-width: 560px;
    }

    .card-info {
        flex-wrap: wrap;
    }

    .rating {
        flex-basis: 100%;
    }

    .card-title {
        font-size: 18px;
    }

    .promo {
        background-position: bottom right -50px;
        background-size: 300px;
    }

    .promo-title {
        font-style: 24px;
        line-height: 1.4;
    }

    .promo-text {
        margin-top: 0;
    }

    #modal-back {
        padding: 0;
    }

    #modal {
        box-shadow: none;
        transform: none;
        border-radius: 0;
        position: static;
        height: 100%;
    }

    #modal-content {
        max-height: 100%;
    }
}

@media (max-width: 578px) {
    .container {
        min-width: 90%;
    }

    .header {
        flex-wrap: wrap;
    }

    .promo {
        background-size: 0;
    }

    .promo-title {
        margin-bottom: 10px;
    }

    .section-title {
        font-size: 20px;
    }

    .card {
        flex-basis: 100%;
    }

    .card-image {
        width: 100%;
    }

    .footer {
        padding: 30px 0;
    }

    .footer-nav {
        order: 0;
        margin-left: 0;
        margin-right: 0;
        display: flex;
        flex-direction: column;
    }

    .footer-logo {
        order: 1;
        margin-right: 15px;
    }

    .social-links {
        order: 2;
    }
}

@media (max-width: 480px) {
    .phone {
        margin-top: 15px;
        order: 5;
    }

    .button-text {
        display: none;
    }

    .button {
        min-height: 40px;
    }

    .button-icon {
        padding-right: 0;
    }

    .promo {
        padding: 20px;
    }

    .section-heading {
        flex-wrap: wrap;
    }

    .footer-block {
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;
    }

    .footer-logo {
        order: 0;
        margin-bottom: 0;
    }

    .footer-nav {
        margin-bottom: 20px;
        text-align: center;
    }

    .footer-link:not(:last-child) {
        margin-right: 0;
    }
}


.slider-wrapper {
    height: 350px;
    margin: 0 auto 100px auto;
    position: relative;
    width: 100%;
    box-shadow: 0px 7px 12px rgba(158, 158, 163, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

.slider {
    height: inherit;
    overflow: hidden;
    position: relative;
    width: inherit;
}

.slides {
    height: inherit;
    opacity: 0;
    position: absolute;
    width: inherit;
    z-index: 0;
    -webkit-transform: scale(1.5);
    -moz-transform: scale(1.5);
    -o-transform: scale(1.5);
    transform: scale(1.5);
    -webkit-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
    -moz-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
    -o-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
    transition: transform ease-in-out .5s, opacity ease-in-out .5s;
}

.slide1 {
    background-color: #C5CAE9;
}

.slide2 {
    background-color: #c5e7e8;
    background-image: url(img/promo2.png);
}

.slide3 {
    background-color: #e23f3f;
    background-image: url(img/promo3.png);
    color: #eee;
}

.slide4 {
    background-color: #d9e6c3;
    background-image: url(img/promo4.png);
}

.slide5 {
    background-color: #43455a;
    color: #ddd;
    background-image: url(img/promo5.png);
}

#slide1:checked ~ .slider > .slide1,
#slide2:checked ~ .slider > .slide2,
#slide3:checked ~ .slider > .slide3,
#slide4:checked ~ .slider > .slide4,
#slide5:checked ~ .slider > .slide5 {
    opacity: 1;
    z-index: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.slider-wrapper > input {
    display: none;
}

.slider-wrapper .controls {
    left: 50%;
    margin-left: -98px;
    position: absolute;
    margin-top: -30px;
    z-index: 1;
}

.slider-wrapper label {
    cursor: pointer;
    display: inline-block;
    height: 12px;
    margin: 0 12px;
    position: relative;
    width: 12px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: background ease-in-out .5s;
    -moz-transition: background ease-in-out .5s;
    -o-transition: background ease-in-out .5s;
    transition: background ease-in-out .5s;
}

.slider-wrapper label:hover,
#slide1:checked ~ .controls label:nth-of-type(1),
#slide2:checked ~ .controls label:nth-of-type(2),
#slide3:checked ~ .controls label:nth-of-type(3),
#slide4:checked ~ .controls label:nth-of-type(4),
#slide5:checked ~ .controls label:nth-of-type(5) {
    background: #eee;
}

.slider-wrapper label:after {
    border: 2px solid #eee;
    content: " ";
    display: block;
    height: 12px;
    position: absolute;
    width: 12px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}</style></head><body><div class="container"><header class="header"><img alt="logo" class="logo" src="img/scooter2.svg"><a class="phone" href="#">+7 800 555 35 35</a></header></div><main class="main"><div class="container"><section class="slider-wrapper"><input id="slide1" name="point" type="radio"><input checked id="slide2" name="point" type="radio"><input id="slide3" name="point" type="radio"><input id="slide4" name="point" type="radio"><input id="slide5" name="point" type="radio"><div class="slider"><div class="slides slide1 promo"><h1 class="promo-title">Онлайн-магазин гироскутеров</h1><p class="promo-text">Топовые устройства по лучшим ценам с гарантией и доставкой</p></div><div class="slides slide2 promo"><h1 class="promo-title">Официальный дилер производителя</h1><p class="promo-text">Собственный сервисный центр, <br/>только оригинальный запчасти</p></div><div class="slides slide3 promo"><h1 class="promo-title">Скидки и подарки</h1><p class="promo-text"><strong>Скидка 15%</strong>
10 дней до и после дня рождения<br><br><strong>Вейп в подарок</strong>
всем пенсионерам</p></div><div class="slides slide4 promo"><h1 class="promo-title">Гарантия лучшей цены</h1><p class="promo-text">Найдете дешевле - вернем разницу баллами</p></div><div class="slides slide5 promo"><h1 class="promo-title">Спиннер в подарок</h1><p class="promo-text">При единовременной покупке от 123 456 ₽</p></div></div><div class="controls"><label for="slide1"></label><label for="slide2"></label><label for="slide3"></label><label for="slide4"></label><label for="slide5"></label></div></section><section class="about-items"><div class="section-heading"><h2 class="section-title">Что выбрать?</h2></div><div class="about-items-cards cards"><label class="card about-items-card" for="modal-input-elsa"><img alt="image" class="card-image about-items-card-image" src="img/monopattino.svg"><div class="card-text about-items-card-text"><div class="about-items-card-heading"><h3 class="about-items-card-title">Электросамокат</h3></div><div class="about-items-card-info">По внешнему виду электросамокат напоминает классический самокат, однако для его работы применяется электродвигатель. На сегодняшний день такой аппарат является одним из наиболее маневренных и мобильных видов транспорта. Электросамокат может проехать даже там, куда воспрещен въезд мотоциклам и автомобилям, также он с легкостью объезжает пробки.</div></div></label><label class="card about-items-card" for="modal-input-sigv"><img alt="image" class="card-image about-items-card-image" src="img/2wheel.svg"><div class="card-text about-items-card-text"><div class="about-items-card-heading"><h3 class="about-items-card-title">Сигвей</h3></div><div class="about-items-card-info">Сигвеи, как и гироскутеры, благодаря своим широким возможностям и уникальным характеристикам быстро набрали популярность как у любителей активного образа жизни, так и среди тех, кто предпочитает быстрое и безопасное передвижение по городу.
Как и гироскутеры, сигвеи управляются при помощи сложной электроники и гироскопических датчиков.</div></div></label><label class="card about-items-card" for="modal-input-gyro"><img alt="image" class="card-image about-items-card-image" src="img/monowheelsvg.svg"><div class="card-text about-items-card-text"><div class="about-items-card-heading"><h3 class="about-items-card-title">Гироскутер</h3></div><div class="about-items-card-info">Гироскутер – транспортное средство, на котором Вы сможете ездить по асфальтированным дорогам практически без каких-либо ограничений. Главное, чтобы у Вас хватало сноровки преодолевать препятствия и маневрировать в толпе, не навлекая на себя праведный гнев окружающих, по чьим ногам Вам суждено было проехать.</div></div></label></div></section><section class="brands"><div class="section-heading"><h2 class="section-title">Бренды</h2></div><div class="cards brands-card"><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 0px 0px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 510px 140px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 680px 70px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 340px 140px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 0px 70px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 340px 70px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 680px 0px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 510px 70px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 170px 0px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 340px 0px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 170px 70px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 170px 140px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 510px 0px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 0px 140px;"></div></a><a class="card brand-card" href="#items"><div class="brand-image" style="background:url(img/brands.png) 680px 140px;"></div></a></div></section><section class="items" id="items"><input checked hidden id="filter-gyro" type="checkbox" value="Гироскутер"><input checked hidden id="filter-velo" type="checkbox" value="Электровелосипед"><input checked hidden id="filter-sigv" type="checkbox" value="Сигвей"><input checked hidden id="filter-mowe" type="checkbox" value="Моноколесо"><div class="section-heading"><h2 class="section-title">Ассортимент</h2><div id="items-filter"><label class="filter-label tooltip" for="filter-gyro" id="filter-label-gyro"><span class="tooltiptext">Фильтр: гироскутеры</span></label><label class="filter-label tooltip" for="filter-velo" id="filter-label-velo"><span class="tooltiptext">Фильтр: электровелосипеды</span></label><label class="filter-label tooltip" for="filter-sigv" id="filter-label-sigv"><span class="tooltiptext">Фильтр: сигвеи</span></label><label class="filter-label tooltip" for="filter-mowe" id="filter-label-mowe"><span class="tooltiptext">Фильтр: моноколеса</span></label></div></div><div class="cards"><div class="card card-velo"><img alt="image" class="card-image" src="img/velo3.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">20 Double E-motions</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">2.8</div><div class="price">От 134 990 ₽</div><div class="category">Электровелосипед</div></div></div></div><div class="card hot-card card-velo"><img alt="image" class="card-image" src="img/velo1.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Wellness Bad Dual 1000w</h3><span class="card-tag tag">РАСПРОДАЖА</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.8</div><div class="price">От 107 990 ₽</div><div class="category">Электровелосипед</div></div></div></div><div class="card hot-card card-sigv"><img alt="image" class="card-image" src="img/segway1.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Ninebot Mini Robot 36v</h3><span class="card-tag tag">РАСПРОДАЖА</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.6</div><div class="price">13 490 ₽</div><div class="category">Сигвей</div></div></div></div><div class="card card-gyro"><img alt="image" class="card-image" src="img/gyro1.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Smart Balance Premium</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">3.8</div><div class="price">От 9 900 ₽</div><div class="category">Гироскутер</div></div></div></div><div class="card card-velo"><img alt="image" class="card-image" src="img/velo2.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Elbike Pobeda</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">3.8</div><div class="price">34 990 ₽</div><div class="category">Электровелосипед</div></div></div></div><div class="card card-gyro"><img alt="image" class="card-image" src="img/gyro2.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Smart Balance Galaxy</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.4</div><div class="price">От 12 900 ₽</div><div class="category">Гироскутер</div></div></div></div><div class="card card-sigv"><img alt="image" class="card-image" src="img/segway5.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Ninebot Mini Robot 36v</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.2</div><div class="price">23 320 ₽</div><div class="category">Сигвей</div></div></div></div><div class="card card-mowe"><img alt="image" class="card-image" src="img/weel2.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">NineBot One Z10</h3><span class="card-tag tag">Нет в наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">5.0</div><div class="price">99 990 ₽</div><div class="category">Моноколесо</div></div></div></div><div class="card card-sigv"><img alt="image" class="card-image" src="img/segway2.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Smart Balance A8</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.5</div><div class="price">11 990 ₽</div><div class="category">Сигвей</div></div></div></div><div class="card card-sigv"><img alt="image" class="card-image" src="img/segway3.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">Smart Balance A8+</h3><span class="card-tag tag">В наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.4</div><div class="price">От 12 990 ₽</div><div class="category">Сигвей</div></div></div></div><div class="card card-mowe"><img alt="image" class="card-image" src="img/weel1.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">i-Wheel 132</h3><span class="card-tag tag">Нет в наличии</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">3.6</div><div class="price">От 25 990 ₽</div><div class="category">Моноколесо</div></div></div></div><div class="card hot-card card-sigv"><img alt="image" class="card-image" src="img/segway4.jpg"><div class="card-text"><div class="card-heading"><h3 class="card-title">El-Sport Mini Robot</h3><span class="card-tag tag">РАСПРОДАЖА</span></div><div class="card-info"><div class="rating"><img alt="rating" class="rating-star" src="img/rating.svg">4.3</div><div class="price">32 490 ₽</div><div class="category">Сигвей</div></div></div></div><div id="items-empty"><p>Упс, ничего нет!</p><p>Попробуйте поменять фильтр</p></div></div></section></div></main><a href="#" id="scrolTop"></a><input checked hidden id="modal-input-close" name="modal" type="radio"><input hidden id="modal-input-elsa" name="modal" type="radio"><input hidden id="modal-input-sigv" name="modal" type="radio"><input hidden id="modal-input-gyro" name="modal" type="radio"><div id="modal-back"><div id="modal"><label aria-label="Закрыть" for="modal-input-close" id="modal-close">X</label><div id="modal-content"><div class="modal-content" id="modal-content-elsa"><h2>Электросамокат для города ‒ удобное и простое средство передвижения</h2><img src="img/modal/1.1.jpg"><p>По внешнему виду электросамокат напоминает классический самокат, однако для его работы применяется электродвигатель. На сегодняшний день такой аппарат является одним из наиболее маневренных и мобильных видов транспорта. Электросамокат может проехать даже там, куда воспрещен въезд мотоциклам и автомобилям, также он с легкостью объезжает пробки. Такой аппарат имеет некоторые преимущества по сравнению с другими транспортными средствами, например, велосипедами и мопедами.</p><h2>Достоинства</h2><p>Основные преимущества:</p><ul><li>Небольшие размеры. Такие транспортные средства обладают складной или полускладной конструкцией, благодаря чему занимают мало места и с легкостью транспортируются. Владельцу электросамоката нет необходимости искать место на автопарковке.</li><li>Доступность. Нет никаких ограничений на использование этого транспортного средства, ведь подходит электросамокат для города взрослым и детям. В каталоге гипермаркета гироскутеров можно найти модели, рассчитанные как на самых маленьких, так и на старших любителей езды по городу.</li><li>Скорость. Данное транспортное средство способно развить скорость до 30 км/ч, чего вполне достаточно для комфортной езды по городу. Ведь перемещение со скоростью более указанной будет чревато последствиями для ездока и окружающих.</li><li>Экономичность. Для работы электросамокату не требуется топливо. Работает данное транспортное средство от аккумуляторной батареи, заряд которой расходуется крайне экономично. В среднем, без подзарядки электросамокат может проехать порядка 35-50 км. Для полного восполнения аккумуляторной батареи может потребоваться 7-12 часов.</li></ul></div><div class="modal-content" id="modal-content-sigv"><h2>Сигвей － сочетание современных технологий и стиля</h2><img src="img/modal/2.1.jpeg"><p>Сигвеи, как и гироскутеры, благодаря своим широким возможностям и уникальным характеристикам быстро набрали популярность как у любителей активного образа жизни, так и среди тех, кто предпочитает быстрое и безопасное передвижение по городу.</p><p>Как и гироскутеры, сигвеи управляются при помощи сложной электроники и гироскопических датчиков. За счет слаженной работы систем, устройство способно:</p><ul><li>определять положение руля относительно поверхности, на которой стоит устройство;</li><li>устанавливать максимально допустимые углы наклона;</li><li>фиксировать показатели заряда аккумуляторов;</li><li>самостоятельно контролировать рабочие процессы;</li><li>производить корректировку настроек, в зависимости от ситуации.</li></ul><p>Движение осуществляется за счет двух двигателей, установленных для каждого из колес. Такая компоновка позволяет повысить маневренность транспорта, что особенно удобно при передвижении в плотном потоке.</p><p>Для движения в ночное и вечернее время предусмотрена подсветка, которая освещает дорогу и сигнализирует о Вашем присутствии. Сзади также могут находиться габаритные огни, которые также повышают безопасность во время движения.</p></div><div class="modal-content" id="modal-content-gyro"><h2>Гироскутер 10 дюймов: неровные дороги ‒ не помеха</h2><p>Гироборды с колесами 10 дюймов позволяют передвигаться по поверхностям разных типов. Функционал подобных устройств продуман таким образом, чтобы обеспечивать максимальную безопасность для владельца во время езды. Прочный корпус защищает внутренние части агрегата от повреждения даже во время столкновений с препятствиями</p><h2>Характеристики</h2><img src="img/modal/3.1.jpg"><p>Кликнув на понравившуюся модель в нашем интернет-магазине, Вы сможете более подробно ознакомиться с ее характеристиками. Модели с колесами 10 дюймов обладают небольшим весом в 13 кг, благодаря чему их можно с легкостью переносить. Устройства, представленные в данной категории, способны развивать скорость от 10 км/ч. Запас хода без подзарядки аккумулятора составляет 20 км. А для того, чтобы полностью подзарядить сигвей, потребуется от 2 до 4 часов.</p><h2>Интересные факты о гироскутерах</h2><h3>Факт № 1</h3><p>В русском и английском языках не предусмотрено единого названия для этого транспортного средства. На просторах интернета можно встретить большое разнообразие наименований гироскутеров ‒ мини-сигвеи, гироборды, смарт-скутеры и прочие вариации.</p><h3>Факт № 2</h3><p>Разброс цен на такой электротранспорт очень большой. Это зависит от того, какую ценовую политику ведет компания-производитель. Так, например, некоторые организации в стремлении сэкономить изготавливают гироскутеры с применением дешевых комплектующих.</p><p>В итоге, от этого больше всего страдает потребитель, так как срок эксплуатации подобных устройств оказывается крайне мал. В нашем же интернет-магазине Вы сможете найти только надежный электротранспорт, с оптимальным соотношением цена-качество.</p><h3>Факт № 3</h3><p>Аккумуляторная батарея является одной из основных и дорогостоящих составляющих любого гироскутера. При производстве аккумуляторов для гиробордов часто используются литиево-ионные элементы от компаний LG и Samsung.</p><h3>Факт № 4</h3><p>Корпуса гироскутеров бывают изготовлены из обычного или ударопрочного полистирола. При этом их показатели прочности существенно различаются. Так, например, обычный полистирол, хотя и является достаточно прочным материалом, все же подвержен деформации при сильных ударах.</p><img class="float-left" src="img/modal/3.2.jpg"><h3>Факт № 5</h3><p>Наверное, многие пользователи замечали единообразный дизайн гироскутеров от разных брендов и изготовителей. Это связано с тем, что большинство производителей пользуются одинаковыми пресс-формами.</p><h3>Факт № 6</h3><p>Несмотря на то, что устройство гироскутеров не такое простое, они, как и любая другая техника, легко ремонтируются. Большинство запчастей в этих устройствах можно с легкостью заменить. Основная сложность заключается в том, чтобы мастер правильно диагностировал причину поломки. Обратиться за ремонтом гиробордов можно в наш магазин ‒ здесь профессионалы смогут за относительно небольшие деньги починить Ваше устройство.</p></div></div></div></div><input hidden id="support-btn" name="support" type="checkbox"><div id="support"><label for="support-btn" id="support-label"><img id="support-icon" src="img/user.svg"></label><div id="support-content"><div><p id="support-header">Нужна помощь?</p><p id="support-info">Оператор онлайн и готов помочь Вам</p><textarea id="support-input" placeholder="Ваш вопрос"></textarea><p style="line-height: 16px">Наши контакты: <br/>Номер: <strong>+7 800 555 35 35</strong><br/>
E-mail: <strong>mygiro@giro.my</strong></p></div></div></div><div class="subscrib"><div class="subscrib-content"><p>Подпишитесь на нашу E-mail рассылку</p><form action="#" method="post"><input class="formInput" placeholder="Ваше имя" required type="text"><input class="formInput" placeholder="Ваш e-mail" required type="email"><input class="formInput" type="submit" value="Подписаться"></form></div></div><footer class="footer"><div class="container"><div class="footer-block"><img alt="" class="logo footer-logo" src="img/scooter2.svg"><nav class="footer-nav"><a class="footer-link" href="https://github.com/C0smoCat">О нас</a><a class="footer-link" href="#">Партнёрам</a><a class="footer-link" href="#">Пресс-центр</a><a class="footer-link" href="#">Контакты</a></nav><div class="social-links"><a class="social-link" href="#"><img alt="instagram" src="img/instagram.svg"></a><a class="social-link" href="#"><img alt="facebook" src="img/fb.svg"></a><a class="social-link" href="#"><img alt="vk" src="img/vk.svg"></a></div></div></div></footer></body></html>