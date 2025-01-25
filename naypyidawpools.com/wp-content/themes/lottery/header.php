<?php
/**
 * @package lottery
 * @since 1.0.0
 */
// global $data;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- wp_head -->
        <?php wp_head(); ?>
        <!-- meta -->
        <meta charset="<?php echo get_bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
        <!-- link -->
        <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>">
        <!-- style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flipclock.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/lottery.css">
        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/flipclock.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/lottery.js"></script>
    </head>

    <body <?php body_class(); ?>>
        <?php elt_component( 'header' ); ?>
