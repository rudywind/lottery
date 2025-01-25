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
$pageTitle  = 'History Result';
require_once('../library/header.php');
?>
<section class="content-result bg-color-3">
    <div class="pattern"></div>
    <div class="container-fluid px-3 py-3 py-lg-5">
        <div class="card card-history bg-transparent border-0">
            <div class="card-header border-0 px-0 py-0">
                <h3 class="text-white text-center text-uppercase mb-0">
                    <span>History Results</span>
                </h3>
            </div>
            <div class="card-body px-0 py-0">
                <div class="row" id="contentLoad">

                    <?php
                    if ($data['status'] === 'success' && $data['code'] === 200) :
                        foreach($data['data'] as $result) :
                            $period = $result['period'];
                            $prize1 = numberToArray($result['prize1']);
                            $prize2 = numberToArray($result['prize2']);
                            $prize3 = numberToArray($result['prize3']);
                            $prize4 = numberToArray($result['prize4']);
                            $prize5 = numberToArray($result['prize5']);
                            $createdAt = $result['created_at'];
                    ?>
                            <div class="content-item col-12 col-lg-6">
                                <div class="px-2 py-2 px-lg-3 py-lg-3 mb-2 mb-lg-0">

                                    <!-- component card below -->
                                    <div class="card card-result shadow bg-color-5 border-0 mb-0">
                                        <div class="card-body border-0 px-0 py-0">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-lg">
                                                    <div
                                                        class="wrapper-number bg-color-6 px-3 py-3 px-lg-4 py-lg-4">
                                                        <div class="pattern-circles">
                                                            <div class="circle1"></div>
                                                            <div class="circle2"></div>
                                                            <div class="circle3"></div>
                                                            <div class="circle4"></div>
                                                            <div class="circle5"></div>
                                                            <div class="circle6"></div>
                                                        </div>
                                                        <div
                                                            class="row no-gutters justify-content-center">
                                                            <div class="col-auto">
                                                                <h5
                                                                    class="text-center text-uppercase mb-2">
                                                                    <span>Winning Numbers</span>
                                                                </h5>
                                                                <h3
                                                                    class="d-none d-lg-block text-center text-uppercase mb-2">
                                                                    <span><?php echo date('l, d M Y',strtotime($createdAt));?></span>
                                                                </h3>
                                                                <h6
                                                                    class="d-block d-lg-none text-center text-uppercase  mb-2">
                                                                    <span><?php echo date('l, d M Y',strtotime($createdAt));?></span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div
                                                            class="row no-gutters justify-content-center">
                                                            <div class="col-auto">
                                                                <div
                                                                    class="row no-gutters align-items-center justify-content-center justify-content-lg-start">
                                                                    <div class="col-auto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div
                                                            class="row no-gutters justify-content-center">
                                                            <div class="col-auto">
                                                                <h6 class="text-center mb-0">
                                                                    <span>Live Draw scheduled everyday :
                                                                    </span>
                                                                    <span>03:00 AM</span>
                                                                    <span>&ensp;-&ensp;</span>
                                                                    <span>03:20 AM</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div
                                                        class="row no-gutters align-items-center h-100">
                                                        <div class="col-12">
                                                            <div
                                                                class="wrapper-result px-3 py-3 px-lg-4 py-lg-4">
                                                                <h5
                                                                    class="text-dark text-center text-uppercase font-weight-bold mb-2">
                                                                    <span>Draw Number</span>
                                                                    <span> : </span>
                                                                    <span>#<?php echo htmlspecialchars($period);?></span>
                                                                </h5>
                                                                <hr class="my-2">
                                                                <h3
                                                                    class="text-white text-center text-uppercase font-weight-bold mb-2">
                                                                    <span>4D Result</span>
                                                                </h3>
                                                                <div id="history-toto-45-result-1" class="text-center result-wrapper">
                                                                    <?php foreach($prize1 as $n) : ?>
                                                                    <div class="result-block d-inline-block">
                                                                        <div class="result-digit">
                                                                            <span id="history-toto-45-result-1-1" data-parent="history-toto-45-result-1"><?php echo htmlspecialchars($n);?></span>
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
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    <div class="col-12">
                        <div class="d-flex justify-content-between p-3">
                            <button class="btn btn-lg bg-color-1 w-100 mr-2 text-light" id="loadMoreBtn">Load More</button>
                            <button class="btn btn-lg bg-color-5 w-100 ml-2" id="collapseBtn" style="display:none;">Show Less</button>
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
