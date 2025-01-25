<?php
/**
 * @package lottery
 * @since 1.0.0
 */
?>

<h5 class="text-white text-center text-uppercase mb-1 mt-4 mt-lg-0">
    <small class="font-weight-bold"><?php echo get_bloginfo( 'name' ); ?></small>
    <span>&nbsp;-&nbsp;</span>
    <small class="font-weight-bold"><?php echo get_bloginfo( 'description' ); ?></small>
</h5>

<p class="text-white text-center mb-3">
    <span><?php _e( 'Win Your Daily Lucky Numbers.', 'lottery' ); ?></span>
</p>

<hr class="border-light">

<p class="text-white text-justify mb-3">
    <span><?php _e( 'Welcome to'); ?></span>
    <span><b><?php echo get_bloginfo( 'name' ); ?></b>, </span>
    <span><?php _e( 'an legal lottery information site that provide lottery and such games results.', 'lottery' ); ?></span>
    <span><?php _e( 'As a member of the global lottery industry, the Lottery has a long history of being a strong supporter and promoter of responsible gaming. We are committed to the highest standards of responsible gaming to prevent problem gambling, which can adversely affect individuals and their families', 'lottery' ); ?></span>
</p>

<p class="text-white text-justify mb-3">
    <span><?php _e( 'For those of you who still think you can beat the odds, there is actually a strategy. The only sure way to win money playing the 4D Lottery is to buy ticket(s), each hand selected containing one of the unique numbers between 0000 and 9999.', 'lottery'); ?></span>
</p>

<p class="text-white text-justify mb-0">
    <span><?php _e( 'This website is for the use of adults only.', 'lottery' ); ?></span>
    <span><?php _e( 'Individuals must be 18 years of age or older to participate in lottery, charitable gaming and in-store sports betting.', 'lottery' ); ?></span>
    <span><?php _e( 'Individuals must be 19 years of age or older to visit casinos and slot facilities, and to participate in online casino gaming and online sports betting.', 'lottery' ); ?></span>
</p>

<div class="card card-widget bg-color-1 border-0 mt-3 mt-lg-2">
    <div class="card-body px-2 py-2">
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
                    "displayMode": "compact",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>
