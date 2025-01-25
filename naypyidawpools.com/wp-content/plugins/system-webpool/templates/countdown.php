<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

$time_today = (int)strtotime( date( 'H:i:s' ) );
$time_begin = (int)strtotime( date( $live_begin.':00' ) );
$time_close = (int)strtotime( date( $live_close.':00' ) );
$time_clock = ( $time_today < $time_begin ) ? ( $time_begin - $time_today ) : ( $time_begin - $time_today ) + 86400;

$output  = '<div data-time="' . $time_clock . '" id="countdown-' . $post_type . '" class="clock m-0 text-center"></div>';
$output .= '<script type="text/javascript">';
$output .= '    $(document).ready(function() {';
$output .= '        $("#countdown-' . $post_type . '").FlipClock($("#countdown-' . $post_type . '").attr("data-time"), {';
$output .= '            countdown: true,';
$output .= '            callbacks: {';
$output .= '                stop: function () {';
$output .= '                    window.location.href = ' . ( $post_link == null ? 'window.location' : '"' . $post_link . '"' ) . ';';
$output .= '                }';
$output .= '            }';
$output .= '        });';
$output .= '    });';
$output .= '</script>';

if ( $time_today >= $time_begin && $time_today <= $time_close ) :
    $output .= '<div data-time="' . ( $time_close - $time_today ) . '" id="timer-live-' . $post_type . '" class="d-none m-0"></div>';
    $output .= '<script type="text/javascript">';
    $output .= '    $(document).ready(function() {';
    $output .= '        $("#timer-live-' . $post_type . '").FlipClock($("#timer-live-' . $post_type . '").attr("data-time"), {';
    $output .= '            countdown: true,';
    $output .= '            callbacks: {';
    $output .= '                interval: function () {';
    $output .= '                    var pools_time = this;';
    $output .= '                    $.ajax({';
    $output .= '                        type     : "POST",';
    $output .= '                        url      : "' . get_bloginfo('wpurl') . '/wp-admin/admin-ajax.php",';
    $output .= '                        data     : { "action" : "pool_livedraw", "pool_type" : "' . $post_type . '" },';
    $output .= '                        dataType : "json",';
    $output .= '                        success  : function (result) {';
    $output .= '                            var current_time    = pools_time.factory.getTime().time;';
    $output .= '                            var current_minutes = parseInt(current_time / 60);';
    $output .= '                            var current_seconds = ((current_time % 60) < 10) ? "0" + current_time % 60 : current_time % 60;';
    $output .= '                            var current_timings = parseInt(current_minutes.toString() + current_seconds.toString());';
    $output .= '                            $(result).each(function(index, value) {';
    $output .= '                                var wrapper = $(result[index].id).attr("data-parent");';
    $output .= '                                if (current_timings < result[index].timing) {';
    $output .= '                                    $(result[index].id).html(result[index].number);';
    $output .= '                                    $("#" + wrapper).removeClass("d-none");';
    $output .= '                                    $("#loading-" + wrapper).hide();';
    $output .= '                                }';
    $output .= '                            });';
    $output .= '                        }';
    $output .= '                    });';
    $output .= '                },';
    $output .= '                stop: function () { setTimeout(() => { window.location.href = ' . ( $post_link == null ? 'window.location' : '"/"' ) . '; }, 10000); }';
    $output .= '            }';
    $output .= '        });';
    $output .= '    });';
    $output .= '</script>';
endif;