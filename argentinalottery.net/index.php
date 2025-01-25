<?php
require_once('setting.php');
if ($data['status'] === 'success' && $data['code'] === 200) {
    $lastDraw = $data['data'][0];
    $period = $lastDraw['period'];
    $prize1 = numberToArray($lastDraw['prize1']);
    $prize2 = numberToArray($lastDraw['prize2']);
    $prize3 = numberToArray($lastDraw['prize3']);
    $prize4 = numberToArray($lastDraw['prize4']);
    $prize5 = numberToArray($lastDraw['prize5']);
    $createdAt = $lastDraw['created_at'];
}
$pageTitle  = '';
require_once('library/header.php');
?>
<section>
    <div class="bg-color-6">
    <div class="container px-3 py-4 py-lg-5">
        <div class="row no-gutters">
            <div class="col-12">
            <!-- component card below -->
            <div class="card card-result bg-color-3 border-0 px-0 py-0">
                <div class="card-body border-0 px-2 py-3 px-lg-4 py-lg-4">
                    <div class="row no-gutters justify-content-between align-items-center">
                        <div class="col-12 col-lg-auto px-2 px-lg-0">
                            <h5 class="sub-title text-5 mb-0"><b>How it Works</b></h5>
                            <h3 class="title text-1 mb-1">Easiest Way To Picking A Number</h3>
                            <div class="title-separator"></div>
                            <div class="banner-wrapper text-1 mt-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="banner-icon"><img class="img-icon" src="https://argentinalottery.net/wp-content/themes/lottery_argentina/assets/images/icon-1.png" alt="icon"></div>
                                    </div>
                                    <div class="col-auto"><div class="banner-separator"></div></div>
                                    <div class="col">
                                        <p class="banner-title font-weight-bold">
                                            <span>Set A Budget.</span>
                                        </p>
                                        <p class="banner-description">
                                            <span>Playing the lottery is gambling, so keep it fun by treating it as part of your entertainment budget.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-wrapper text-1 mt-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="banner-icon"><img class="img-icon" src="https://argentinalottery.net/wp-content/themes/lottery_argentina/assets/images/icon-2.png" alt="icon"></div>
                                    </div>
                                    <div class="col-auto"><div class="banner-separator"></div></div>
                                    <div class="col">
                                        <p class="banner-title font-weight-bold">
                                            <span>Choose Your Lottery.</span> 
                                        </p>
                                        <p class="banner-description">
                                            <span>There are 5 exciting draw-based jackpot you can try one or all of them. like powerball etc.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-wrapper text-1 mt-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="banner-icon"><img class="img-icon" src="https://argentinalottery.net/wp-content/themes/lottery_argentina/assets/images/icon-3.png" alt="icon"></div>
                                    </div>
                                    <div class="col-auto"><div class="banner-separator"></div></div>
                                    <div class="col">
                                        <p class="banner-title font-weight-bold">
                                            <span>Pick Your Numbers.</span>
                                        </p>
                                        <p class="banner-description">
                                            <span>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-wrapper text-1 mt-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="banner-icon"><img class="img-icon" src="https://argentinalottery.net/wp-content/themes/lottery_argentina/assets/images/icon-4.png" alt="icon"></div>
                                    </div>
                                    <div class="col-auto"><div class="banner-separator"></div></div>
                                    <div class="col">
                                        <p class="banner-title font-weight-bold">
                                            <span>Check Your Numbers.</span>
                                        </p>
                                        <p class="banner-description">
                                            <span>If you are a winner, claim your prize: be sure to visit a retailer before your prize expires in 12 months.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <div class="winner-wrapper mt-4 mt-lg-0">
                                <div class="card-title bg-gradient-2 px-4 py-2">
                                    <h5 class="text-white text-center font-weight-bold mb-1">
                                                                        <span>Last Draw Result</span>
                                                                </h5>
                                    <p class="text-white text-center mb-0">
                                        <small>Draw : 392</small>
                                        <small>&nbsp;|&nbsp;</small>
                                        <small>Date :24 January 2025</small>
                                    </p>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <h5 class="text-white text-center text-uppercase font-weight-bold mb-2">
                                            <span>#1 Pool Prize</span>
                                        </h5>
                                        <div class="pool-wrapper text-white mb-4"><div id="lastdraw-lottery-main-1" class="text-center prize-wrapper"><div class="prize-block d-inline-block winner ball-2">    <div class="prize-digit">        <span id="lastdraw-lottery-main-1-1" data-parent="lastdraw-lottery-main-1">9</span>    </div></div><div class="prize-block d-inline-block winner ball-3">    <div class="prize-digit">        <span id="lastdraw-lottery-main-1-2" data-parent="lastdraw-lottery-main-1">8</span>    </div></div><div class="prize-block d-inline-block winner ball-0">    <div class="prize-digit">        <span id="lastdraw-lottery-main-1-3" data-parent="lastdraw-lottery-main-1">0</span>    </div></div><div class="prize-block d-inline-block winner ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-main-1-4" data-parent="lastdraw-lottery-main-1">1</span>    </div></div></div></div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-white text-center text-uppercase font-weight-bold mb-2 mb-lg-3">
                                            <span>#2 Pool Prize</span>
                                        </h5>
                                        <div class="pool-wrapper text-white mb-lg-2"><div id="lastdraw-lottery-main-2" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-main-2-1" data-parent="lastdraw-lottery-main-2">3</span>    </div></div><div class="prize-block d-inline-block ball-8">    <div class="prize-digit">        <span id="lastdraw-lottery-main-2-2" data-parent="lastdraw-lottery-main-2">6</span>    </div></div><div class="prize-block d-inline-block ball-6">    <div class="prize-digit">        <span id="lastdraw-lottery-main-2-3" data-parent="lastdraw-lottery-main-2">6</span>    </div></div><div class="prize-block d-inline-block ball-3">    <div class="prize-digit">        <span id="lastdraw-lottery-main-2-4" data-parent="lastdraw-lottery-main-2">2</span>    </div></div></div></div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-white text-center text-uppercase font-weight-bold mb-2 mb-lg-3">
                                            <span>#3 Pool Prize</span>
                                        </h5>
                                        <div class="pool-wrapper text-white"><div id="lastdraw-lottery-main-3" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-2">    <div class="prize-digit">        <span id="lastdraw-lottery-main-3-1" data-parent="lastdraw-lottery-main-3">2</span>    </div></div><div class="prize-block d-inline-block ball-3">    <div class="prize-digit">        <span id="lastdraw-lottery-main-3-2" data-parent="lastdraw-lottery-main-3">9</span>    </div></div><div class="prize-block d-inline-block ball-4">    <div class="prize-digit">        <span id="lastdraw-lottery-main-3-3" data-parent="lastdraw-lottery-main-3">7</span>    </div></div><div class="prize-block d-inline-block ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-main-3-4" data-parent="lastdraw-lottery-main-3">7</span>    </div></div></div></div>
                                    </div>
                                    
                                </div>
                                <div class="card-separator"></div>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <p class="text-white text-center text-uppercase font-weight-bold mb-2 mb-lg-3">
                                            <span>Starter Prize</span>
                                        </p>
                                        <div class="pool-wrapper text-white mb-4 mb-lg-3"><div id="lastdraw-lottery-starter-1" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-1-1" data-parent="lastdraw-lottery-starter-1">7</span>    </div></div><div class="prize-block d-inline-block ball-6">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-1-2" data-parent="lastdraw-lottery-starter-1">9</span>    </div></div><div class="prize-block d-inline-block ball-1">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-1-3" data-parent="lastdraw-lottery-starter-1">0</span>    </div></div><div class="prize-block d-inline-block ball-0">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-1-4" data-parent="lastdraw-lottery-starter-1">4</span>    </div></div></div></div>
                                        <div class="pool-wrapper text-white mb-0"><div id="lastdraw-lottery-starter-2" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-4">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-2-1" data-parent="lastdraw-lottery-starter-2">4</span>    </div></div><div class="prize-block d-inline-block ball-5">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-2-2" data-parent="lastdraw-lottery-starter-2">2</span>    </div></div><div class="prize-block d-inline-block ball-5">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-2-3" data-parent="lastdraw-lottery-starter-2">6</span>    </div></div><div class="prize-block d-inline-block ball-6">    <div class="prize-digit">        <span id="lastdraw-lottery-starter-2-4" data-parent="lastdraw-lottery-starter-2">4</span>    </div></div></div></div>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-white text-center text-uppercase font-weight-bold mb-2 mb-lg-3">
                                            <span>Consolation Prize</span>
                                        </p>
                                        <div class="pool-wrapper text-white mb-4 mb-lg-3"><div id="lastdraw-lottery-consolation-1" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-3">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-1-1" data-parent="lastdraw-lottery-consolation-1">3</span>    </div></div><div class="prize-block d-inline-block ball-5">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-1-2" data-parent="lastdraw-lottery-consolation-1">5</span>    </div></div><div class="prize-block d-inline-block ball-6">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-1-3" data-parent="lastdraw-lottery-consolation-1">5</span>    </div></div><div class="prize-block d-inline-block ball-4">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-1-4" data-parent="lastdraw-lottery-consolation-1">3</span>    </div></div></div></div>
                                        <div class="pool-wrapper text-white mb-0"><div id="lastdraw-lottery-consolation-2" class="text-center prize-wrapper"><div class="prize-block d-inline-block ball-7">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-2-1" data-parent="lastdraw-lottery-consolation-2">1</span>    </div></div><div class="prize-block d-inline-block ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-2-2" data-parent="lastdraw-lottery-consolation-2">4</span>    </div></div><div class="prize-block d-inline-block ball-7">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-2-3" data-parent="lastdraw-lottery-consolation-2">2</span>    </div></div><div class="prize-block d-inline-block ball-9">    <div class="prize-digit">        <span id="lastdraw-lottery-consolation-2-4" data-parent="lastdraw-lottery-consolation-2">6</span>    </div></div></div></div>
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
</section>
<?php
require_once('library/header.php');
?>