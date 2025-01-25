<?php
require_once('../setting.php');
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
$pageTitle  = 'Live Draw';
require_once('../library/header.php');
?>
<section class="content-result bg-color-3">
    <div class="pattern"></div>
    <div class="container px-3 py-3 py-lg-5">
        <div class="card card-result shadow bg-color-5 border-0">
            <div class="card-body border-0 px-0 py-0">
                <div class="row no-gutters">
                    <div class="col-12 col-lg">
                        <div class="wrapper-number bg-color-4 px-3 py-3 px-lg-4 py-lg-4">
                            <div class="pattern-circles">
                                <div class="circle1"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                                <div class="circle4"></div>
                                <div class="circle5"></div>
                                <div class="circle6"></div>
                            </div>
                            <div class="row no-gutters justify-content-center">
                                <div class="col-auto">
                                    <h5 class="text-center text-3 text-uppercase mb-2">
                                        <span>Winning Numbers</span>
                                    </h5>
                                    <h1
                                        class="d-none d-lg-block text-3 text-center text-uppercase mb-2">
                                        <span><?php echo date('l, d M Y',strtotime($createdAt));?></span>
                                    </h1>
                                    <h6
                                        class="d-block d-lg-none text-3 text-center text-uppercase  mb-2">
                                        <span><?php echo date('l, d M Y',strtotime($createdAt));?></span>
                                    </h6>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="row no-gutters justify-content-center">
                                <div class="col-auto">
                                    <div
                                        class="row no-gutters align-items-center justify-content-center justify-content-lg-start">
                                        <div class="col-auto">
                                            <div class="number-box">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters justify-content-center">
                                <div class="col-auto">
                                    <h6 class="text-center text-9 mb-0">
                                        <span>Live Draw scheduled everyday : </span>
                                        <span>04:45 AM</span>
                                        <span>&ensp;-&ensp;</span>
                                        <span>05:00 AM</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <div class="row no-gutters align-items-center h-100">
                            <div class="col-12">
                                <div class="bg-color-9">
                                    <div class="wrapper-result px-3 py-3 px-lg-4 py-lg-4">
                                        <h5
                                            class="text-3 text-center text-uppercase font-weight-bold mb-2">
                                            <span>Draw Number</span>
                                            <span> : </span>
                                            <span>#<?php echo htmlspecialchars($period);?></span>
                                        </h5>
                                        <hr class="my-2">
                                        <h3
                                            class="text-3 text-center text-uppercase font-weight-bold mb-2">
                                            <span>4D Result</span>
                                        </h3>
                                        <div id="lastdraw-toto-45-result-1"
                                            class="text-center result-wrapper">
                                            <?php foreach($prize1 as $n) : ?>
                                            <div class="result-block d-inline-block">
                                                <div class="result-digit"> 
                                                    <span id="lastdraw-toto-45-result-1-1"><?php echo htmlspecialchars($n);?></span>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
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
require_once('../library/footer.php');
?>
