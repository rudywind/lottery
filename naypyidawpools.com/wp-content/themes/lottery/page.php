<?php
/**
 * @package lottery
 * @since 1.0.0
 */

elt_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

<!-- content page default below -->
<section></section>

<?php

endwhile; endif;

elt_footer();