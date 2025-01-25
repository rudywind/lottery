<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- wp_head -->
    <title><?=$pageTitle?> Albania Lottery &#8211; Official Website</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='stylesheet' id='wp-block-library-css' href='./assets/assets/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2&v=<?=time();?>'  type='text/css' media='all' />
    <link rel="canonical" href="https://albanialottery.net/" />
    <link rel='shortlink' href='https://albanialottery.net/' />
    <link rel="icon" href="./assets/albania-fav.png" sizes="32x32" />
    <link rel="icon" href="./assets/albania-fav.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="albania-fav.png" />
    <meta name="msapplication-TileImage" content="albania-fav.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Official Website">
    <link rel="shortcut icon" href="albania-fav.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/wp-content/themes/lottery/assets/css/flipclock.css">
    <link rel="stylesheet" href="./assets/wp-content/themes/lottery_albania/assets/css/lottery.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/wp-content/themes/lottery/assets/js/flipclock.js"></script>
    <script src="./assets/wp-content/themes/lottery_albania/assets/js/lottery.js"></script>
</head>
<body class="home page-template-default page page-id-8 wp-custom-logo">
    <style>
        :root {
            /**** begin countdown colors ****/
            --flipclock-bg-color: #176D81;
            --flipclock-color: #F6F1F1;
            /**** endof countdown colors ****/

            /**** begin custom colors ****/
            --color-1: #0D3446;
            --color-2: #388186;
            --color-3: #176D81;
            --color-4: #71ADB5;
            --color-5: #F6F1F1;
            --color-6: #68B0AB;
            --color-7: #E1AA74;
            --color-8: #009F9D;
            --color-9: #EFFAD3;
            /**** endof custom colors ****/
        }

        /**** begin custom background colors ****/
        .bg-color-1 {
            background-color: var(--color-1) !important;
        }

        .bg-color-2 {
            background-color: var(--color-2) !important;
        }

        .bg-color-3 {
            background-color: var(--color-3) !important;
        }

        .bg-color-4 {
            background-color: var(--color-4) !important;
        }

        .bg-color-5 {
            background-color: var(--color-5) !important;
        }

        .bg-color-6 {
            background-color: var(--color-6) !important;
        }

        .bg-color-7 {
            background-color: var(--color-7) !important;
        }

        .bg-color-8 {
            background-color: var(--color-8) !important;
        }

        .bg-color-9 {
            background-color: var(--color-9) !important;
        }

        .bg-gradient-1 {
            background: linear-gradient(to bottom, var(--color-1), var(--color-3));
        }

        .bg-gradient-2 {
            background: linear-gradient(to bottom, var(--color-3), var(--color-1));
        }

        .text-1 {
            color: var(--color-1) !important;
        }

        .text-3 {
            color: var(--color-3) !important;
        }

        .text-9 {
            color: var(--color-9) !important;
        }

        /**** endof custom background colors ****/

        /**** begin card style ****/
        .card.card-result {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            border-radius: 12px;
        }

        .card.card-result .wrapper-number {
            border-radius: 12px 12px 0 0;
        }

        .card.card-result .pattern-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card.card-result .pattern-circles div {
            position: absolute;
            border-radius: 50%;
            background-color: var(--color-3);
            opacity: .1;
        }

        .card.card-result .pattern-circles .circle1 {
            width: 55px;
            height: 55px;
            top: 25%;
            right: 3%;
        }

        .card.card-result .pattern-circles .circle2 {
            width: 109px;
            height: 109px;
            top: 0;
            right: 0;
            transform: translate(16%, -30%);
        }

        .card.card-result .pattern-circles .circle3 {
            width: 144px;
            height: 144px;
            right: 0;
            bottom: 0;
            transform: translate(-50%, 67%);
        }

        .card.card-result .pattern-circles .circle4 {
            width: 288px;
            height: 288px;
            bottom: 0;
            left: 0;
            top: 100%;
            transform: translate(-50%, -52%);
        }

        .card.card-result .pattern-circles .circle5 {
            top: 0;
            left: 5%;
            transform: translateY(-54%);
            width: 88px;
            height: 88px;
        }

        .card.card-result .pattern-circles .circle6 {
            top: 100%;
            left: 11%;
            transform: translateY(-50%);
            width: 144px;
            height: 144px;
            bottom: 0;
        }

        .card.card-result .result-wrapper .result-block {
            position: relative;
            display: inline-block;
            margin: 0 2.5px;
            width: 45px;
            height: 45px;
            background-color: var(--color-4);
            border: 2px solid #176D81;
            border-radius: 50px;
            padding: 5px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.65);
        }

        .card.card-result .result-wrapper .result-block:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 16px;
            height: 8px;
            margin: 0 auto;
            background-color: rgba(225, 225, 225, 0.45);
            border-radius: 50px;
        }

        .card.card-result .result-wrapper .result-block:before {
            content: "";
            position: absolute;
            bottom: -9px;
            left: 0;
            right: 0;
            width: auto;
            height: 6px;
            border-radius: 50%;
            background-color: #07133080;
            filter: blur(3px);
        }

        .card.card-result .result-wrapper .result-block .result-digit {
            position: relative;
            width: 31px;
            height: 31px;
            line-height: 30px;
            color: var(--color-1);
            border-radius: 50px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .card.card-result .number-wrapper .number-block {
            position: relative;
            display: inline-block;
            margin: 0 2.5px;
            width: 35px;
            height: 35px;
            background-color: var(--color-1);
            border: 2px solid #071330;
            border-radius: 50px;
            padding: 2.5px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.65);
        }

        .card.card-result .number-wrapper .number-block:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 16px;
            height: 8px;
            margin: 0 auto;
            background-color: rgba(112, 112, 112, 0.45);
            border-radius: 50px;
        }

        .card.card-result .number-wrapper .number-block:before {
            content: "";
            position: absolute;
            bottom: -9px;
            left: 0;
            right: 0;
            width: auto;
            height: 6px;
            border-radius: 50%;
            background-color: #07133080;
            filter: blur(3px);
        }

        .card.card-result .number-wrapper .number-block .number-digit {
            position: relative;
            width: 26px;
            height: 26px;
            line-height: 26px;
            color: var(--color-5);
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        /**** endof card style ****/

        /**** begin countdown colors ****/
        .flip-clock-wrapper ul,
        .flip-clock-wrapper ul li a div div.inn,
        .flip-clock-divider .flip-clock-dot {
            background-color: var(--flipclock-bg-color);
        }

        .flip-clock-wrapper ul li a div div.inn {
            color: var(--flipclock-color);
        }

        /**** endof countdown colors ****/

        /**** begin custom style ****/
        body {
            margin: 0;
            padding: 0;
            font-family: 'Oswald', sans-serif;
            background-image: url(/wp-content/themes/lottery_albania/assets/images/pattern.png);
        }

        button {
            outline: none !important;
        }

        hr {
            border-color: var(--color-6);
            border-width: 5px;
            border-style: dashed;
            border-top: 0;
            border-left: 0;
            border-right: 0;
        }

        header {
            display: block;
            position: relative;
        }

        header .navbar .navbar-toggler {
            outline: none !important;
        }

        header .navbar .navbar-nav .nav-item .nav-link {
            text-transform: uppercase;
            font-weight: 700;
            color: var(--color-2) !important;
        }

        header .navbar .navbar-nav .nav-item.active .nav-link {
            color: var(--color-9) !important;
        }

        header .logo-wrapper .web-logo {
            width: 200%;
        }

        section {
            display: block;
            position: relative;
        }

        section.content-result {
            background-image: var(--color-3) !important;
        }

        section.content-result .pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: .2;
            background: url(/wp-content/themes/lottery_albania/assets/images/pattern.png) repeat top left scroll;

        }

        section .circle-number {
            position: relative;
            width: 40px;
            height: 40px;
            border: 2px solid var(--color-9);
            border-radius: 50px;
            color: var(--color-9) !important;
            font-size: 24px;
            font-weight: 700;
            line-height: calc(40px - 4px);
            text-align: center;
        }

        footer {
            display: block;
            position: relative;
        }

        footer {
            display: block;
            position: relative;
        }

        footer p.text-description {
            line-height: 1.2;
        }

        .dataTables_info {
            color: var(--white);
        }

        /**** endof custom style ****/
    </style>
    <!-- component header below -->
    <header class="shadow">
        <div class="row no-gutters">
            <div class="col-12 bg-gradient-1">
                <div class="container px-2 py-2">
                    <div class="row no-gutters align-items-center justify-content-between">
                        <div class="col-12 col-lg-auto">
                            <div class="logo-wrapper">
                                <a href="https://albanialottery.net"><img class="web-logo w-100" src="./assets/albania-logo.png"></a></div>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <div class="time-wrapper mt-3 mt-lg-12">
                                <div class="row no-gutters justify-content-between align-items-center">
                                    <div class="col-auto col-lg-12">
                                        <h6
                                            class="text-white text-center text-lg-right text-uppercase font-weight-bold mb-2">
                                            <span>Next Draw Remains</span>
                                        </h6>
                                    </div>
                                    <div class="col-auto col-lg-12">
                                        <div class="row no-gutters justify-content-center justify-content-lg-end">
                                            <div class="col-auto">
                                                <div data-time="16118" id="countdown-toto-45"
                                                    class="clock m-0 text-center"></div>
                                                <script
                                                    type="text/javascript">    $(document).ready(function () { $("#countdown-toto-45").FlipClock($("#countdown-toto-45").attr("data-time"), { countdown: true, callbacks: { stop: function () { window.location.href = "https://albanialottery.net/live-draw/"; } } }); });</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 bg-color-4">
                <nav class="navbar navbar-dark navbar-expand px-2 py-2 my-0">
                    <div class="collapse navbar-collapse text-center mt-0" id="navbarMain-1">
                        <ul class="navbar-nav ml-auto mr-auto">
                            <li id="menu-item-150"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item active menu-item-150 nav-item active ">
                                <a title="Home" href="/" class="nav-link" aria-current="page">Home</a></li>
                            <li id="menu-item-152"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152 nav-item">
                                <a title="Live Draw" href="/live-draw/" class="nav-link">Live Draw</a></li>
                            <li id="menu-item-151"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151 nav-item">
                                <a title="History Result" href="/history-result/" class="nav-link">History Result</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
