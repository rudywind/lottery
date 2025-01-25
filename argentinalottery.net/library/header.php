<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?=$pageTitle;?> Argentina Lottery &#8211; Official Lottery Website</title>
        <link rel='stylesheet' id='wp-block-library-css' href='./assets/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2' type='text/css' media='all' />
        <link rel="canonical" href="https://argentinalottery.net/" />
        <link rel='shortlink' href='https://argentinalottery.net/' />
        <link rel="icon" href="./assets/ARGENTINA-fav.png" sizes="32x32" />
        <link rel="icon" href="./assets/ARGENTINA-fav.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="./ARGENTINA-fav.png" />
        <meta name="msapplication-TileImage" content="./assets/ARGENTINA-fav.png" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="Official Lottery Website">
        <link rel="shortcut icon" href="./assets/ARGENTINA-fav.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="./assets/wp-content/themes/lottery/assets/css/flipclock.css">
        <link rel="stylesheet" href="./assets/wp-content/themes/lottery_argentina/assets/css/lottery.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script src="./assets/wp-content/themes/lottery_argentina/assets/js/flipclock.js"></script>
        <script src="./assets/wp-content/themes/lottery_argentina/assets/js/lottery.js"></script>
    </head>

    <body class="home page-template page-template-page-home page-template-page-home-php page page-id-8 wp-custom-logo">
    <style>
        :root {
            /**** begin countdown colors ****/
            --flipclock-bg-color: #FFFEC4;
            --flipclock-color: #637A9F;
            /**** endof countdown colors ****/

            /**** begin custom colors ****/
            --color-1: #637A9F;
            --color-2: #C9D7DD;
            --color-3: #C0DBEA;
            --color-4: #e7cc82;
            --color-5: #ffb969;
            --color-6: #f5f4b3;
            --color-7: #A7C5EB;
            --color-8: #ffffff;
            --color-9: #ffffff;

            --gradient-1: radial-gradient(circle at center, var(--color-4), var(--color-6)) !important;
            --gradient-2: radial-gradient(circle at center, var(--color-7), var(--color-1)) !important;
            --gradient-3: linear-gradient(to right, transparent, var(--color-6), var(--color-7), var(--color-6), transparent) !important;
            /**** endof custom colors ****/
        }

        /**** begin custom background colors ****/
        .bg-color-1 { background-color: var(--color-1) !important; }
        .bg-color-2 { background-color: var(--color-2) !important; }
        .bg-color-3 { background-color: var(--color-3) !important; }
        .bg-color-4 { background-color: var(--color-4) !important; }
        .bg-color-5 { background-color: var(--color-5) !important; }
        .bg-color-6 { background-color: var(--color-6) !important; }
        .bg-color-7 { background-color: var(--color-7) !important; }
        .bg-color-8 { background-color: var(--color-8) !important; }
        .bg-color-9 { background-color: var(--color-9) !important; }

        .bg-gradient-1 { background-image: var(--gradient-1) !important; }
        .bg-gradient-2 { background-image: var(--gradient-2) !important; }
        /**** endof custom background colors ****/

        /**** begin countdown colors ****/
        .flip-clock-wrapper ul,
        .flip-clock-wrapper ul li a div div.inn,
        .flip-clock-divider .flip-clock-dot {
            background-color: var(--flipclock-bg-color);
        }
        .flip-clock-wrapper ul li a div div.inn {
            color: var(--flipclock-color);
        }

        .text-1 { color: var(--color-1) !important;}
        .text-4 { color: var(--color-4) !important;}
        .text-5 { color: var(--color-5) !important;}
        .text-7 { color: var(--color-7) !important;} 
        /**** endof countdown colors ****/

        /**** begin custom style ****/
        body {
            margin: 0;
            padding: 0;
            background-color: var(--color-8);
            font-family: 'Rajdhani', sans-serif;
        }

        header {
            display: block;
            position: relative;
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
            background-image: url(/wp-content/themes/lottery_argentina/assets/images/argentina.png);
            background-position: bottom left;
            background-repeat: repeat-x;
            background-size: 90px;
            opacity: .1;
        }
        header .logo-container {
            display: block;
            position: relative;
        }
        header .logo-container .logo-wrapper {
            display: block;
            position: relative;
            margin: 0 auto;
            max-width: 250px;
        }
        header .logo-container .logo-wrapper .web-logo {
            display: block;
            position: relative;
            width: 100%;
        }
        header .time-wrapper {
            display: block;
            position: relative;
            margin: 0 auto;
            padding: 6px;
            max-width: 220px;
            border-radius: 12px;
        }
        header .time-wrapper .countdown {
            display: block;
            position: relative;
            padding: 6px;
            border-radius: 10px;
        }
        section {
            display: block;
            position: relative;
        }
        section .navbar-main .navbar-nav > .nav-item {
            margin-right: 10px;
        }
        section .navbar-main .navbar-nav > .nav-item:last-child {
            margin-right: 0;
        }
        section .navbar-main .navbar-nav > .nav-item > .nav-link {
            position: relative;
            padding: 0 10px 0 20px;
            color: var(--color-8);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }
        section .navbar-main .navbar-nav > .nav-item.active > .nav-link,
        section .navbar-main .navbar-nav > .nav-item:hover > .nav-link {
            padding-left: 20px;
            color: var(--color-7);
        }
        section .navbar-main .navbar-nav > .nav-item > .nav-link::before {
            content: "";
            display: block;
            position: absolute;
            top: calc(50% - 3px);
            left: 0;
            width: 6px;
            height: 6px;
            background-color: var(--color-8);
            border-radius: 50px;
        }
        section .navbar-main .navbar-nav > .nav-item.active > .nav-link::before,
        section .navbar-main .navbar-nav > .nav-item:hover > .nav-link::before {
            background-color: var(--color-7);
        }
        footer {
            display: block;
            position: relative;
        }
        footer .footer-separator {
            display: block;
            position: relative;
            width: auto;
            height: 1px;
            background-image: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.5), transparent);
        }
        footer .navbar.navbar-footer .navbar-nav > .nav-item {
            margin-right: 15px;
        }
        footer .navbar.navbar-footer .navbar-nav > .nav-item:last-child {
            margin-right: 0;
        }
        footer .navbar.navbar-footer .navbar-nav > .nav-item > .nav-link {
            color: var(--white);
            font-weight: 700;
        }
        .pagination .paginate_button a {
            background-color: var(--color-6) !important;
            border-color: var(--color-6) !important;
            box-shadow: none !important;
            color: var(--white) !important;
            outline: none !important;
        }
        .pagination .paginate_button.active a {
            background-color: var(--color-7) !important;
            border-color: var(--color-7) !important;
            box-shadow: none !important;
            color: var(--color-8) !important;
            font-weight: 700;
            outline: none !important;
        }
        /**** endof custom style ****/

        .prize-wrapper .prize-block {
            position: relative;
            display: inline-block;
            margin: 0 2.5px;
            width: 35px;
            height: 35px;
            background-image: var(--gradient-1);
            border: 2px solid var(--color-2);
            border-radius: 50px;
            padding: 2.5px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.65);
        }
        .prize-wrapper .prize-block.winner .prize-digit {
            color: var(--color-6);
        }
        .prize-wrapper .prize-block .prize-digit {
            position: relative;
            width: 26px;
            height: 26px;
            line-height: 26px;
            color: var(--color-1);
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
                    section .navbar-main .navbar-nav > .nav-item {
                        margin-right: 10px;
                    }

                    section .navbar-main .navbar-nav > .nav-item:last-child {
                        margin-right: 0;
                    }

                    section .navbar-main .navbar-nav > .nav-item > .nav-link {
                        position: relative;
                        padding: 0 10px 0 20px;
                        color: var(--color-8);
                        font-size: 18px;
                        font-weight: 700;
                        text-transform: uppercase;
                    }

                    section .navbar-main .navbar-nav > .nav-item.active > .nav-link, section .navbar-main .navbar-nav > .nav-item:hover > .nav-link {
                        padding-left: 20px;
                        color: var(--color-1);
                    }

                    section .navbar-main .navbar-nav > .nav-item > .nav-link::before {
                        content: "";
                        display: block;
                        position: absolute;
                        top: calc(50% - 3px);
                        left: 0;
                        width: 6px;
                        height: 6px;
                        background-color: var(--color-8);
                        border-radius: 50px;
                    }

                    section .navbar-main .navbar-nav > .nav-item.active > .nav-link::before, section .navbar-main .navbar-nav > .nav-item:hover > .nav-link::before {
                        background-color: var(--color-1);
                    }
        .card.card-result .card-body .banner-wrapper .banner-separator {
            display: block;
            position: relative;
            margin: 0 15px;
            width: 2px;
            height: 60px;
            background-color: var(--color-1);
            border-radius: 50px;
        }
        .card.card-result .card-body .title-separator {
            display: block;
            position: relative;
            margin: 10px 0;
            width: 100px;
            height: 4px;
            background-color: var(--color-1);
            border-radius: 50px;
        }
        footer .navbar.navbar-footer .navbar-nav > .nav-item > .nav-link {
            color: var(--white);
            font-weight: 700;
        }
        footer .navbar.navbar-footer .navbar-nav > .nav-item.active > .nav-link {
            color: var(--color-1);
            font-weight: 700;
        }

    </style>
        
<!-- component header below -->
<header class="bg-color-6">
    <div class="container px-2 py-3 px-lg-0 py-lg-4">
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="col-5 col-lg-auto">
                <div class="logo-container px-0 py-0">
                    <div class="logo-wrapper px-3 py-2 px-lg-0 py-lg-0">
                        <a href="https://argentinalottery.net"><img class="web-logo" src="./assets/ARGENTINA-log.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-7 col-lg-auto">
                <div class="time-wrapper bg-color-3 mt-3 mt-lg-0">
                    <div class="row no-gutters justify-content-end justify-content-center align-items-center">
                        <div class="col-12">
                            <h5 class="text-white text-center text-uppercase font-weight-bold my-2">
                                <span>Next Live Draw</span>
                            </h5>
                        </div>
                        <div class="col-12">
                            <div class="countdown bg-color-1">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-auto"><div data-time="65127" id="countdown-lottery" class="clock m-0 text-center"></div><script type="text/javascript">    $(document).ready(function() {        $("#countdown-lottery").FlipClock($("#countdown-lottery").attr("data-time"), {            countdown: true,            callbacks: {                stop: function () {                    window.location.href = "https://argentinalottery.net/live-draw/";                }            }        });    });</script></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="menu-wrapper bg-color-7">
    <div class="container px-3 py-3 px-lg-0">
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="col-12 col-lg-auto">
                <nav class="navbar navbar-main navbar-dark navbar-expand px-0 py-0 mt-0 mb-2 mb-lg-0">
                    <div class="navbar-collapse text-center my-0">
                        <ul class="navbar-nav ml-auto mr-auto ml-lg-0">
                            <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item active menu-item-26 nav-item active "><a title="Home" href="" class="nav-link" aria-current="page">Home</a></li>
                            <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28 nav-item"><a title="Live Draw" href="live-draw" class="nav-link">Live Draw</a></li>
                            <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27 nav-item"><a title="History Result" href="history-result" class="nav-link">History Result</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-lg-auto">
                <h5 class="d-none d-lg-block text-white text-center text-lg-right font-weight-bold mb-0">
                    <span>EASY PLAY EASY WIN & PLAY RESPONSIBLE</span>
                </h5>
                <p class="d-block d-lg-none text-white text-center text-lg-right font-weight-bold mb-0">
                    <span>EASY PLAY EASY WIN & PLAY RESPONSIBLE</span>
                </p>
                <div class="col-12 col-lg-auto">
            <p class="text-1 text-center mb-2 mb-lg-1">
            <span><b>Live Draw hours&nbsp;:&nbsp;</b></span>
            <span class="badge badge-sm text-1 badge-warning px-2 py-2">07:15 AM</span>
            <span>&nbsp;-&nbsp;</span>
            <span class="badge badge-sm text-1 badge-warning px-2 py-2">07:30 AM</span>
            </p>
            </div>
            </div>
        </div>
    </div>
</section>
