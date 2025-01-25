<?php
/**
 * @package lottery
 * @since 1.0.0
 */
global $pool;
?>

<!-- component card below -->
<div class="card card-result shadow bg-transparent border-0">
    <div class="card-header bg-color-7 border-0 px-3 py-3">
        <div class="row no-gutters align-items-center mb-0">
            <div class="col-6">
                <h5 class="text-white text-left font-weight-bold m-0">
                    <?php if ( $data->is_live == true ) : ?>
                        <span><?php _e( 'Live Result', 'lottery' ); ?></span>
                    <?php else : ?>
                        <span><?php _e( 'Latest Result', 'lottery' ); ?></span>
                    <?php endif; ?>
                </h5>
                <p class="d-none d-lg-block text-white text-left m-0">
                    <span><?php _e( 'Draw Number', 'lottery' ); ?> : #<?php echo $draw->draw_no; ?></span>
                </p>
                <p class="d-block d-lg-none text-white text-left m-0">
                    <span><?php _e( 'Draw', 'lottery' ); ?> : #<?php echo $draw->draw_no; ?></span>
                </p>
            </div>
            <div class="col-6">
                <h5 class="text-white text-right font-weight-bold m-0">
                    <span><?php _e( 'Result Date', 'lottery' ); ?></span>
                </h5>
                <p class="text-white text-right m-0">
                    <span><?php echo date_i18n( 'd F Y', strtotime( $draw->date.'+1day' ) ); ?></span>
                </p>
            </div>
        </div>
        <div class="row no-gutters align-items-center">
            <div class="col-12">
                <div class="icon-container bg-color-2 shadow ml-auto mr-auto"><?php echo elt_icon(); ?></div>
            </div>
        </div>
    </div>
    <div class="card-body bg-color-8 border-0 px-0 pt-5 pb-4">
        <div class="row no-gutters mb-2">
            <div class="col-12">
                <h5 class="text-white text-center font-weight-bold py-1 my-1">
                    <span>1st <?php echo __( 'Pool Prize', 'lottery' ); ?></span>
                </h5>
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto text-center prize py-2">
                        <?php $pool->render_prize( $draw->main[1], 'winner' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h5 class="text-white text-center font-weight-bold py-1 my-1">
                    <span>2nd <?php echo __( 'Pool Prize', 'lottery' ); ?></span>
                </h5>
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto text-center prize py-2">
                        <?php $pool->render_prize( $draw->main[2], 'mini' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h5 class="text-white text-center font-weight-bold py-1 my-1">
                    <span>3rd <?php echo __( 'Pool Prize', 'lottery' ); ?></span>
                </h5>
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto text-center prize py-2">
                        <?php $pool->render_prize( $draw->main[3], 'mini' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="col-12 col-lg-6">
                <div class="bg-color-7 px-2 py-2 mb-2">
                    <p class="text-white text-center mb-0">
                        <span><?php _e( 'Starter Prize', 'lottery' ); ?></span>
                    </p>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->starter[1], 'mini' ); ?></div>
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->starter[2], 'mini' ); ?></div>
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->starter[3], 'mini' ); ?></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="bg-color-7 px-2 py-2 mb-2">
                    <p class="text-white text-center mb-0">
                        <span><?php _e( 'Consolation Prize', 'lottery' ); ?></span>
                    </p>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->consolation[1], 'mini' ); ?></div>
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->consolation[2], 'mini' ); ?></div>
                    <div class="col-12 prize py-2"><?php $pool->render_prize( $draw->consolation[3], 'mini' ); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
