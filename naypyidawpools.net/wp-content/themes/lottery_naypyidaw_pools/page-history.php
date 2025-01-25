<?php
/**
 * Template Name: History - Default
 * Template Post Type: page
 * @package lottery
 * @since 1.0.0
 */

check_live();
elt_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        $history = $data['pool_day']->history;
?>

<!-- content page history below -->
<section class="bg-color-2">
    <div class="container px-3 py-3 py-lg-4">
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="col-12 col-lg-auto">
                <div class="logo-wrapper my-3 px-3 py-4">
                    <a href="<?php echo site_url(); ?>"><?php echo elt_logo(); ?></a>
                </div>
            </div>
            <div class="col-12 col-lg-auto">
                <p class="text-danger text-center mb-0">
                    <small class="font-weight-bold"><?php echo get_bloginfo( 'description' ); ?></small>
                </p>
                <h1 class="d-none d-lg-block text-black text-center text-uppercase font-weight-bold mb-2">
                    <span><?php _e( 'Lottery History Result', 'lottery' ); ?></span>
                </h1>
                <h3 class="d-block d-lg-none text-black text-center text-uppercase font-weight-bold mb-2">
                    <span><?php _e( 'Lottery History Result', 'lottery' ); ?></span>
                </h3>
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto">
                        <h6 class="text-black text-center font-weight-bold mb-0">
                            <span><?php _e( 'Next Live Draw', 'lottery' ); ?>&ensp;:&ensp;</span>
                        </h6>
                    </div>
                    <div class="col-auto">
                        <div class="row no-gutters justify-content-center">
                            <div class="col-auto"><?php echo $data['pool_day']->countdown; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container px-3 py-4 py-lg-5">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="text-white table-responsive">
                    <table class="table table-data table-borderless mb-0">
                        <thead class="d-none"><tr><th></th></tr></thead>
                        <tbody>
                            <?php foreach ( $history as $draw ) : ?>
                                <tr>
                                    <td class="px-0 py-0">
                                        <ul class="list-group mb-0">
                                            <li class="list-group-item bg-color-5 px-2 py-2 mb-2">
                                                <div class="row justify-content-between mx-0">
                                                    <div class="col-auto px-0">
                                                        <p class="text-left text-white mb-0">
                                                            <span><?php _e( 'Result Date', 'lottery' ); ?> :</span>
                                                            <br>
                                                            <span><b><?php echo date( 'd M Y', strtotime( $draw->date ) ); ?></b></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto px-0">
                                                        <p class="text-right text-white font-weight-bold mb-0">
                                                            <span>1st <?php _e( 'Winner', 'lottery' ); ?></span>
                                                        </p>
                                                        <div class="result-wrapper"><?php $pool->render_prize( $draw->main[1], 'mini'); ?></div>
                                                    </div>
                                                    <div class="col-auto px-0 d-none d-lg-inline">
                                                        <p class="text-right text-white font-weight-bold mb-0">
                                                            <span>2nd <?php _e( 'Winner', 'lottery' ); ?></span>
                                                        </p>
                                                        <div class="result-wrapper"><?php $pool->render_prize( $draw->main[2], 'mini'); ?></div>
                                                    </div>
                                                    <div class="col-auto px-0 d-none d-lg-inline">
                                                        <p class="text-right text-white font-weight-bold mb-0">
                                                            <span>3rd <?php _e( 'Winner', 'lottery' ); ?></span>
                                                        </p>
                                                        <div class="result-wrapper"><?php $pool->render_prize( $draw->main[3], 'mini'); ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    endwhile;
endif;

elt_footer();