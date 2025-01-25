<?php
/**
 * @package lottery
 * @since 1.0.0
 */

if ( class_exists('WP_Customize_Control') ) :
    class Lottery_Customize extends WP_Customize_Control {
        public $type = 'lottery_product';

        public function render_content() {
            if ( class_exists('Pool_System') ) :
                $pools = new WP_Query([ 'post_type' => EPS_TYPE, 'post_status' => 'publish', 'numberposts' => -1 ]);
            endif;
            if ( class_exists('Toto_System') ) :
                $totos = new WP_Query([ 'post_type' => ETS_TYPE, 'post_status' => 'publish', 'numberposts' => -1 ]);
            endif;
?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <select <?php $this->link(); ?>>
                <option value="0" disabled>—  Select Lottery Product  —</option>
                <?php if ( class_exists('Pool_System') ) : ?>
                    <?php if ( $pools->have_posts() ) : while( $pools->have_posts() ) : $pools->the_post(); ?>
                        <option value="<?php echo get_post_field( 'post_name', get_the_ID() ); ?>" <?php selected( $this->value(), get_the_ID(), 0 ); ?>><?php echo get_the_title(); ?></option>
                    <?php endwhile; endif; ?>
                <?php endif; ?>

                <?php if ( class_exists('Toto_System') ) : ?>
                    <?php if ( $totos->have_posts() ) : while( $totos->have_posts() ) : $totos->the_post(); ?>
                        <option value="<?php echo get_post_field( 'post_name', get_the_ID() ); ?>" <?php selected( $this->value(), get_the_ID(), 0 ); ?>><?php echo get_the_title(); ?></option>
                    <?php endwhile; endif; ?>
                <?php endif; ?>
            </select>
<?php
        }
    }
endif;
