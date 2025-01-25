<?php
/**
 * Template Name: Livedraw - Default
 * Template Post Type: page
 * @package lottery
 * @since 1.0.0
 */

elt_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

<!-- content page livedraw below -->
<section class="bg-color-2">
    <div class="container px-3 py-3">
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
                    <?php if ( $data['pool_day']->is_live == true ) : ?>
                        <span><?php _e( 'Live Draw Result', 'lottery' ); ?></span>
                    <?php else : ?>
                        <span><?php _e( 'Latest Draw Result', 'lottery' ); ?></span>
                    <?php endif; ?>
                </h1>
                <h3 class="d-block d-lg-none text-black text-center text-uppercase font-weight-bold mb-2">
                    <?php if ( $data['pool_day']->is_live == true ) : ?>
                        <span><?php _e( 'Live Draw Result', 'lottery' ); ?></span>
                    <?php else : ?>
                        <span><?php _e( 'Latest Draw Result', 'lottery' ); ?></span>
                    <?php endif; ?>
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
            <div class="col-12 col-lg-5"><?php elt_component( 'card', $data['pool_day'] ); ?></div>
            <div class="col-12 col-lg-7"><?php elt_component( 'welcome' ); ?></div>
        </div>
    </div>
</section>

<?php
    endwhile;
endif;

elt_footer();