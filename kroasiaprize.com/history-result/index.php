<!--

 _  __  ____     ___       _      ____    ___      _
| |/ / |  _ \   / _ \     / \    / ___|  |_ _|    / \
| ' /  | |_) | | | | |   / _ \   \___ \   | |    / _ \
| . \  |  _ <  | |_| |  / ___ \   ___) |  | |   / ___ \
|_|\_\ |_| \_\  \___/  /_/   \_\ |____/  |___| /_/   \_\

-->




<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Official Lottery Website">
    <title>History Result Kroasia Prize - Official Lottery Website</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="stylesheet" id="wp-block-library-css" href="../assets/style.min.css" type="text/css" media="all">
    <meta name="generator" content="WordPress 6.4.2">
    <link rel="canonical" href="https://kroasiaprize.com/history-result">
    <link rel="shortlink" href="https://kroasiaprize.com/history-result">
    <link rel="icon" href="../assets/fav.png" sizes="32x32">
    <link rel="icon" href="../assets/fav.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../assets/fav.png">
    <meta name="msapplication-TileImage" content="../assets/fav.png">
    <!-- link -->
    <link rel="shortcut icon" href="../assets/fav.png">
    <!-- style -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/flipclock.css">
    <!-- script -->
    <script src="../setting.js?v=<?=time();?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flipclock@0.7.8/compiled/flipclock.min.js"></script>
    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="../assets/ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="../assets/dataTables.bootstrap4.min.js"></script>
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-9 wp-custom-logo">
    <style>
        .result-title {
            display: block;
            position: relative;
            margin-right: 20px;
            width: 30px;
            height: 30px;
            background-color: var(--color-5);
            z-index: 99;
        }

        .result-title::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            background-color: var(--color-5);
            transform: rotate(-25deg);
        }

        .result-title::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            background-color: var(--color-5);
            transform: rotate(25deg);
        }

        .result-title h5 {
            display: block;
            position: relative;
            line-height: 30px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            z-index: 99;
        }

        .prize-wrapper .prize-block {
            position: relative;
            display: inline-block;
            margin: 0 0.5px;
            padding: 2.5px;
            width: 45px;
            height: 45px;
            background-color: var(--color-2);
            border: 2px solid var(--color-8);
            border-radius: 50px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.65);
        }

        .prize-wrapper .prize-block:last-child,
        .prize-wrapper .prize-block:nth-last-child(2) {
            background-color: var(--color-2);
            border: 2px solid var(--color-8);
        }

        .prize-wrapper .prize-block.winner {
            background-color: var(--color-8);
            border: 2px solid var(--color-2);
        }

        .prize-wrapper .prize-block.winner:last-child,
        .prize-wrapper .prize-block.winner:nth-last-child(2) {
            background-color: var(--color-8);
            border: 2px solid var(--color-2);
        }

        .prize-wrapper .prize-block.mini {
            margin: 0 1.5px;
            width: 35px;
            height: 35px;
            padding: 1.5px;
        }

        .prize-wrapper .prize-block:after {
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

        .prize-wrapper .prize-block.mini:after {
            width: 10px;
        }

        .prize-wrapper .prize-block:before {
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

        .prize-wrapper .prize-block .prize-digit {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 2px;
            left: 2px;
            right: 2px;
            bottom: 2px;
            width: auto;
            height: auto;
            color: var(--color-3);
            border-radius: 50px;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        .prize-wrapper .prize-block:nth-last-child(2) .prize-digit {
            color: var(--color-3);
        }

        .prize-wrapper .prize-block:nth-last-child(1) .prize-digit {
            color: var(--color-3);
        }

        .prize-wrapper .prize-block.mini .prize-digit {
            font-size: 18px;
            color: var(--color-8);
        }

        .prize-wrapper .prize-block.winner.mini .prize-digit,
        .prize-wrapper .prize-block.mini:last-child .prize-digit,
        .prize-wrapper .prize-block.mini:nth-last-child(2) .prize-digit {
            color: var(--color-5);
        }

        .prize-wrapper .prize-block.mini:last-child .prize-digit,
        .prize-wrapper .prize-block.mini:nth-last-child(1) .prize-digit {
            color: var(--color-5);
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
            background-color: var(--color-1);
            font-family: 'Asap Condensed', sans-serif;
        }

        .btn,
        button {
            border: 0 !important;
            box-shadow: none !important;
            outline: 0 !important;
        }

        header {
            display: block;
            position: relative;
            z-index: 1;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
        }

        header .logo-wrapper {
            position: relative;
            max-width: 200px;
        }

        header .logo-wrapper .web-logo {
            width: 100%;
        }

        header .header-welcome {
            display: block;
            position: relative;
            margin: 0 auto;
            max-width: 900px;
        }

        header .navbar.navbar-main .navbar-nav>.nav-item {
            margin-right: 5px;
        }

        header .navbar.navbar-main .navbar-nav>.nav-item:last-child {
            margin-right: 0;
        }

        header .navbar.navbar-main .navbar-nav>.nav-item>.nav-link {
            position: relative;
            min-width: 97px;
            padding: 0 10px;
            background-color: var(--color-6);
            border: 3px solid transparent;
            border-bottom: 0;
            border-radius: 12px 12px 0 0;
            color: var(--color-12);
            font-size: 12px;
            font-weight: 700;
            line-height: 40px;
            text-transform: uppercase;
        }

        header .navbar.navbar-main .navbar-nav>.nav-item.active>.nav-link {
            color: var(--color-10);
        }

        header .navbar.navbar-main .navbar-nav>.nav-item>.nav-link::before {
            content: "";
            position: absolute;
            bottom: -3px;
            left: -3px;
            right: -3px;
            width: auto;
            height: 3px;
            background-color: transparent;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
        }

        header .navbar.navbar-main .navbar-nav>.nav-item.active>.nav-link {
            background-color: var(--color-9);
            border-color: var(--color-6);
        }

        header .navbar.navbar-main .navbar-nav>.nav-item.active>.nav-link::before {
            background-color: var(--color-11);
            border-left: 3px solid var(--color-6);
            border-right: 3px solid var(--color-6);
        }

        section {
            display: block;
            position: relative;
        }

        section.widget-wrapper {
            border-top: 3px solid var(--color-6);
            border-bottom: 3px solid var(--color-6);
        }

        section .jackpot-date {
            display: block;
            position: relative;
            font-size: 24px;
            font-weight: 400;
        }

        section .result-separator {
            display: block;
            position: relative;
            margin: 25px auto 45px;
            width: auto;
            height: 3px;
            background-image: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.5), transparent);
        }

        footer {
            display: block;
            position: relative;
        }

        footer .logo-wrapper {
            display: block;
            position: relative;
            margin: 0 auto;
            max-width: 200px;
            z-index: 1;
        }

        footer .logo-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            right: -30px;
            bottom: 0;
            width: 100px;
            height: auto;
            background-color: var(--white);
            border-radius: 0 0 12px 0;
            transform: skewX(-25deg);
            z-index: -1;
        }

        footer .logo-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            left: -30px;
            bottom: 0;
            width: 100px;
            height: auto;
            background-color: var(--white);
            border-radius: 0 0 0 12px;
            transform: skewX(25deg);
            z-index: -1;
        }

        footer .logo-wrapper .web-logo {
            display: block;
            position: relative;
            width: 100%;
        }

        footer .footer-wrapper {
            display: block;
            position: relative;
        }

        footer .navbar .navbar-nav .nav-item .nav-link {
            padding: 0 10px;
            color: var(--color-9);
            font-size: 16px;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 30px;
        }

        footer .navbar .navbar-nav .nav-item.active .nav-link {
            color: var(--color-4);
        }

        footer .navbar .navbar-nav .nav-item:first-child .nav-link {
            padding-left: 0;
        }



        .line-height-1 {
            line-height: 1 !important;
        }

        .pagination .paginate_button a {
            background-color: var(--color-3) !important;
            border-color: var(--color-3) !important;
            box-shadow: none !important;
            color: var(--white) !important;
            outline: none !important;
        }

        .pagination .paginate_button.active a {
            background-color: var(--color-6) !important;
            border-color: var(--color-6) !important;
            font-weight: 700;
        }

        /**** endof custom style ****/

        :root {
            /**** begin countdown colors ****/
            --flipclock-bg-color: #F3EBDD;
            --flipclock-color: #F34A4A;
            /**** endof countdown colors ****/

            /**** begin custom colors ****/
            --color-1: #3a5199;
            --color-2: #1a2a88;
            --color-3: #D5D6D2;
            /* WARNA DASAR */
            --color-4: #2988bc;
            --color-5: #E05858;
            --color-6: #353C3F;
            --color-7: #556dac;
            --color-8: #F34A4A;
            --color-9: #344D90;
            /* WARNA DASAR */
            --color-10: #E05858;
            --color-11: #353C3F;
            --color-12: #F3EBDD;

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

        .bg-color-10 {
            background-color: var(--color-10) !important;
        }

        .bg-color-11 {
            background-color: var(--color-11) !important;
        }

        .bg-color-12 {
            background-color: var(--color-12) !important;
        }

        /**** endof custom background colors ****/

        .text-2 {
            color: var(--color-2) !important;
        }

        .text-3 {
            color: var(--color-3) !important;
        }

        .text-5 {
            color: var(--color-5) !important;
        }

        .text-10 {
            color: var(--color-10) !important;
        }

        .text-8 {
            color: var(--color-8) !important;
        }

        .text-7 {
            color: var(--color-7) !important;
        }
    </style>

    <!-- component header below -->
    <header class="bg-color-3">
        <div class="container px-3 pt-4 pb-0 py-lg-1">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="logo-wrapper mb-3 mb-lg-8 mx-auto">
                        <a href="https://kroasiaprize.com/"><img class="web-logo" src="../assets/kroasiaa-lg.png"></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="header-welcome">
                        <p class="text-2 text-center mb-3">
                            <span class="text-5"><b>Kroasia Prize</b></span><span> is an legal lottery information site
                                that provide lottery and such games results. And thank you for giving us the opportunity
                                to introduce you to one of the most popular sites today. We do not affiliated and nor
                                connected with any official or non official lottery or gambling companis whose their
                                logo appear or doesn’t appear on this site.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-3 py-0">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-12 col-lg-auto">
                    <p class="text-5 text-center mb-3 mb-lg-0">
                        <span>DON'T WASTE YOUR TIME! WIN TODAY!</span>
                    </p>
                </div>
                <div class="col-12 col-lg-auto">
                    <nav class="navbar navbar-main navbar-dark navbar-expand px-0 py-0">
                        <div class="navbar-collapse text-center my-0">
                            <ul class="navbar-nav ml-auto mr-auto">
                                <li id="menu-item-28"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 nav-item">
                                    <a title="Home" href="https://kroasiaprize.com/" class="nav-link"
                                        aria-current="page">Home</a>
                                </li>
                                <li id="menu-item-30"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 nav-item">
                                    <a title="Live Draw" href="https://kroasiaprize.com/live-draw/"
                                        class="nav-link">Live Draw</a>
                                </li>
                                <li id="menu-item-29"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30 nav-item active">
                                    <a title="History Result" href="https://kroasiaprize.com/history-result/"
                                        class="nav-link">History Result</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- content page home below -->
    <section class="widget-wrapper bg-color-9">
        <div class="container px-3 py-3">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-12 col-lg">
                    <h3 class="text-white text-center text-lg-left mb-0">
                        <span><b>History Result</b></span>
                    </h3>
                    <p class="text-white text-center text-lg-left mb-0">
                        <span>Explore past lotto results online, discover all winning numbers, and check if you were one
                            of the lucky winners of the most recent jackpots!</span>
                    </p>
                </div>
                <div class="col-12 col-lg-auto">
                    <div class="time-wrapper mt-3 mt-lg-0">
                        <div class="row no-gutters justify-content-between justify-content-lg-end align-items-center">
                            <div class="col-auto col-lg-12">
                                <h5 class="text-white text-center text-lg-right text-uppercase font-weight-bold my-2">
                                    <span>Next Live Result</span>
                                </h5>
                            </div>
                            <div class="col-auto col-lg-12">
                                <div class="row no-gutters justify-content-center justify-content-lg-end">
                                    <div class="col-auto">
                                        <div data-time="48916" id="countdown-lottery" class="clock m-0 text-center">
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                // Result time 05:45
                                                const manualHour = 5; // 5 - hours
                                                const manualMinute = 45; // 45 - minues

                                                const now = new Date();
                                                let targetTime = new Date();
                                                targetTime.setHours(manualHour, manualMinute, 0, 0);
                                                if (now > targetTime) {
                                                    targetTime.setDate(targetTime.getDate() + 1);
                                                }
                                                let remainingTime = Math.floor((targetTime - now) / 1000);
                                                let countdown = $("#countdown-lottery").FlipClock(remainingTime, {
                                                    countdown: true,
                                                    callbacks: {
                                                        stop: function () {
                                                            countdown.setTime(0);
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-3 p-md-4">
        <div class="row" id="contentLoad">
            <script> 
            dataPastResult.forEach(
                item => {  
                    const winNumbersSrt = item.winner.toString()
                    document.write(`
            <div class="content-item col-12 col-lg-6">
                <div class="p-3">
                    <div class="card card-result shadow bg-color-1 border-0 mb-0">
                        <div class="card-body border-0 px-0 py-0">
                            <div class="row no-gutters rounded">
                                <div class="col-12 col-lg">
                                    <div class="wrapper-number bg-color-5 px-3 py-3 px-lg-4 py-lg-4 rounded-left">
                                        <div class="row no-gutters justify-content-center">
                                            <div class="col-auto">
                                                <h5 class="text-center text-uppercase mb-2">
                                                    <span>Winning Numbers</span>
                                                </h5>
                                                <h3 class="d-none d-lg-block text-center text-uppercase mb-2">
                                                    <span>${formatDateS(item.date)}</span>
                                                </h3>
                                                <h6 class="d-block d-lg-none text-center text-uppercase  mb-2">
                                                    <span>${formatDateS(item.date)}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <hr class="my-2">
                                        <div class="row no-gutters justify-content-center">
                                            <div class="col-auto">
                                                <h6 class="text-center mb-0">
                                                    <span>Live Draw scheduled everyday :
                                                    </span>
                                                    <span>05:45 AM</span>
                                                    <span>&ensp;-&ensp;</span>
                                                    <span>06:00 AM</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto">
                                    <div class="row no-gutters align-items-center h-100">
                                        <div class="col-12">
                                            <div class="wrapper-result px-3 py-3 px-lg-4 py-lg-4">
                                                <h5 class="text-dark text-center text-uppercase font-weight-bold mb-2">
                                                    <span>Draw Number</span>
                                                    <span> : </span>
                                                    <span>#${item.period}</span>
                                                </h5>
                                                <hr class="my-2">
                                                <h3 class="text-white text-center text-uppercase font-weight-bold mb-2">
                                                    <span>4D Result</span>
                                                </h3>
                                                <div id="history-toto-45-result-1" class="text-center result-wrapper">

                                                    <div class="result-container my-3 my-lg-0">
                                                        <div class="row no-gutters justify-content-center">
                                                            <div class="col-auto prize">
                                                                <div id="lastdraw-lottery-main-1"
                                                                    class="text-center prize-wrapper">
                                                                    <div
                                                                        class="prize-block d-inline-block winner ball-5">
                                                                        <div class="prize-digit">
                                                                            <span>${winNumbersSrt[0]}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="prize-block d-inline-block winner ball-5">
                                                                        <div class="prize-digit">
                                                                            <span>${winNumbersSrt[1]}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="prize-block d-inline-block winner ball-5">
                                                                        <div class="prize-digit">
                                                                            <span>${winNumbersSrt[2]}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="prize-block d-inline-block winner ball-5">
                                                                        <div class="prize-digit">
                                                                            <span>${winNumbersSrt[3]}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `); });
            </script>
            <div class="col-12">
                <div class="d-flex justify-content-between p-3">
                    <button class="btn btn-lg bg-color-1 w-100 mr-2" id="loadMoreBtn">Load More</button>
                    <button class="btn btn-lg bg-color-5 w-100 ml-2" id="collapseBtn" style="display:none;">Show
                        Less</button>
                </div>
            </div>
        </div>

    </section>

    <!-- component footer below -->
    <section class="bg-color-9">
        <div class="container-fluid px-0 py-2">
            <div class="tradingview-widget-container" style="width: 100%; height: 44px;">
                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        /* @mixin sf-pro-display-font; */
                        font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                        color: #B2B5BE !important;
                    }

                    .tradingview-widget-copyright .blue-text {
                        color: #2962FF !important;
                    }

                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #B2B5BE !important;
                    }

                    .tradingview-widget-copyright a:visited {
                        color: #B2B5BE !important;
                    }

                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #1E53E5 !important;
                    }

                    .tradingview-widget-copyright a:active .blue-text {
                        color: #1848CC !important;
                    }

                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2962FF !important;
                    }
                </style>
            </div>
        </div>
    </section>
    <div class="bg-color-9">
        <div class="col-12 col-lg">
            <div class="footer-wrapper px-3 py-4 ">
                <p class="text-white mb-0">
                    <span><b>Kroasia Prize</b></span>
                    <span>provides a very fast and strong responsible decision. customers must play in moderation and
                        their finances or lives may not make everyone play gambling. To play the lottery, you are
                        required to be over 18 years old and not for those who are 17 years old, we also ask that you
                        urge the public not to play before the age of 18+.</span>
                </p>
                <p class="text-5 mb-0">
                    <small>Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> <b>Kroasia Prize</b>, All rights
                        reserved.
                    </small>
                </p>
            </div>
        </div>
    </div>

    <script>
        const initialContentCount = 8;
        const additionalContentCount = 4;
        let currentVisibleCount = initialContentCount;
        const contentContainer = document.getElementById("contentLoad");
        const loadMoreBtn = document.getElementById("loadMoreBtn");
        const collapseBtn = document.getElementById("collapseBtn");
        function updateContent() {
            const contentItems = contentContainer.getElementsByClassName("content-item");
            for (let i = 0; i < contentItems.length; i++) {
                if (i < currentVisibleCount) {
                    contentItems[i].style.display = "block";
                } else {
                    contentItems[i].style.display = "none";
                }
            }
            if (currentVisibleCount >= contentItems.length) {
                loadMoreBtn.style.display = "none";
                loadMoreBtn.innerHTML = "Load More";
            } else {
                loadMoreBtn.style.display = "block";
            }
            if (currentVisibleCount > initialContentCount) {
                collapseBtn.style.display = "block";
            } else {
                collapseBtn.style.display = "none";
            }
        }
        loadMoreBtn.addEventListener("click", () => {
            currentVisibleCount += additionalContentCount;
            updateContent();
        });
        collapseBtn.addEventListener("click", () => {
            currentVisibleCount = initialContentCount;
            updateContent();
        });
        updateContent();
    </script>
</body>

</html>