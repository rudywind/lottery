<?php
/**
 * @package lottery
 * @since 1.0.0
 */
global $data;
?>

<!-- component header below -->
<section class="bg-color-1">
    <div class="container-fluid px-0 py-1">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [
                        {
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                        },
                        {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "Nasdaq 100"
                        },
                        {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                        },
                        {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                        },
                        {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</section>

<header class="shadow bg-color-7">
    <div class="container px-0 py-0">
        <div class="row no-gutters align-items-center justify-content-between">
            <div class="col-12 col-lg-auto">
                <nav class="navbar navbar-dark navbar-expand px-2 py-2 my-0">
                    <div class="collapse navbar-collapse text-center mt-0" id="navbarMain-1">
                        <?php
                            wp_nav_menu([
                                'depth'          => 2,
                                'theme_location' => 'primary',
                                'container'      => false,
                                'items_wrap'     => '<ul class="navbar-nav ml-auto mr-auto">%3$s</ul>',
                                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            ]);
                        ?>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-lg-auto">
                <div class="bg-color-8 px-2 px-lg-3 py-2 py-lg-3">
                    <p class="text-white text-center mb-0">
                        <span><?php _e( 'Live Draw everyday :', 'lottery' ); ?></span>
                        <span class="badge badge-sm badge-danger px-2 py-2"><?php echo $data['pool_day']->live_begin; ?></span>
                        <span>&ensp;-&ensp;</span>
                        <span class="badge badge-sm badge-danger px-2 py-2"><?php echo $data['pool_day']->live_close; ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
