<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

class Pool_Input {
    var $post_id, $post_box, $post_slug, $post_name;
    var $length = 'oninput="this.value=this.value.slice(0,this.maxLength)"';

    function __construct( $post_id = '1', $post_name = 'pool-type', $post_box = 'pool-setup' ) {
        $this->post_id   = $post_id;
        $this->post_box  = $post_box;
        $this->post_name = $post_name;
        $this->post_slug = str_replace( '-', '_', $post_name );

        echo '<script type="text/javascript">jQuery(document).ready(function($) { $("#'.$post_box.' .inside").addClass("acf-fields -left"); });</script>';
    }

    function render( $input = '', $type = '', $label = '', $info = '' ) {
        $html  = '<div class="acf-field acf-field-'.$type.'">';
        $html .= '    <div class="acf-label"><label>'.$label.'</label><p class="description">'.$info.'</p></div>';
        $html .= '    <div class="acf-input"><div class="acf-input-wrap">'.$input.'</div></div>';
        $html .= '</div>';

        return $html;
    }

    function setup_livedraw_time() {
        $field1 = $this->post_slug.'_livedraw_start';
        $field2 = $this->post_slug.'_livedraw_stop';
        $value1 = get_post_meta($this->post_id, $field1, true);
        $value2 = get_post_meta($this->post_id, $field2, true);

        $input  = '<fieldset>';
        $input .= '    <label style="margin-bottom:10px;display:block;">Livedraw Start at : </label>';
        $input .= '    <input type="time" name="'.$field1.'" value="'.$value1.'" required="required">';
        $input .= '    <hr style="margin: 15px 0 10px;">';
        $input .= '    <label style="margin-bottom:10px;display:block;">Livedraw Stop at : </label>';
        $input .= '    <input type="time" name="'.$field2.'" value="'.$value2.'" required="required">';
        $input .= '</fieldset>';
        
        echo $this->render( $input, 'time', 'Livedraw Time', 'example : 14:00 PM - 14:15 PM' );
    }

    function setup_livedraw_page() {
        $field  = $this->post_slug.'_livedraw_page';
        $value  = get_post_meta($this->post_id, $field, true);
        $pages  = get_pages();
        $input  = '<select name="'.$field.'" required="required">';
        $input .= '<option value="0" '.( $value == 0 ? 'selected' : '' ).'>None</option>';

        foreach ($pages as $page) :
        $input .= '<option value="'.$page->ID.'" '.( $value == $page->ID ? 'selected' : '' ).'>'.$page->post_title.'</option>';
        endforeach;

        $input .= '</select>';
        
        echo $this->render( $input, 'select', 'Livedraw Page', 'Page for display Livedraw' );
    }

    function setup_livedraw_type() {
        $field  = $this->post_slug.'_livedraw_type';
        $value  = get_post_meta($this->post_id, $field, true);
        $input  = '<select name="'.$field.'" required="required">';
        $input .= '    <option value="per_digit" '.( $value == 'per_digit' ? 'selected' : '' ).'>Per Digit</option>';
        $input .= '    <option value="per_column" '.( $value == 'per_column' ? 'selected' : '' ).'>Per Column</option>';
        $input .= '</select>';
        
        echo $this->render( $input, 'select', 'Prize Digit Number', 'Lottery digit number length, example : 0123 or 090807' );
    }

    function setup_livedraw_gif() {
        $field  = $this->post_slug.'_livedraw_gif';
        $value  = get_post_meta( $this->post_id, $field, true );
        $input  = '<table style="border: 0 !important; width: 100%;">';
        $input .= '    <tr>';
        $input .= '        <td><input id="pool-gif" type="text" name="'.$field.'" value="'.$value.'" required="required"></td>';
        $input .= '        <td width="100px"><input id="pool-upload-gif" type="button" class="button" value="Upload Image"></td>';
        $input .= '    </tr>';
        $input .= '    <tr style="background: #F9F9F9;">';
        $input .= '        <td colspan="2" style="padding: 15px;"><img id="pool-gif-preview" src="'.$value.'" width="32"></td>';
        $input .= '    </tr>';
        $input .= '</table>';
        
        echo $this->render( $input, 'file', 'Livedraw GIF loading', 'GIF icon while Livedraw is loading number' );
    }

    function setup_draw_no() {
        $field = $this->post_slug.'_draw_no';
        $value = get_post_meta($this->post_id, $field, true);
        $input = '<input type="number" min="1" maxlength="12" name="'.$field.'" value="'.$value.'" required="required" '.$this->length.'>';
        
        echo $this->render( $input, 'number', 'Draw Number Begin at', 'please start draw number from 1 if there is no data' );
    }

    function setup_max_digit() {
        $field  = $this->post_slug.'_max_digit';
        $value  = get_post_meta($this->post_id, $field, true);
        $input  = '<select name="'.$field.'" required="required">';
        $input .= '    <option value="4" '.( $value == '4' ? 'selected' : '' ).'>4</option>';
        $input .= '    <option value="6" '.( $value == '6' ? 'selected' : '' ).'>6</option>';
        $input .= '</select>';
        
        echo $this->render( $input, 'select', 'Prize Digit Number', 'Lottery digit number length, example : 0123 or 090807' );
    }

    function setup_max_prize( $type = 'main' ) {
        $field = $this->post_slug.'_prize_'.$type;
        $value = get_post_meta($this->post_id, $field, true);
        $limit = ( $type == 'main' ) ? '1' : '0';
        $input = '<input type="number" min="'.$limit.'" maxlength="3" name="'.$field.'" value="'.$value.'" required="required" '.$this->length.'>';
        
        echo $this->render( $input, 'number', 'Total Prize - ' . ucwords( $type ) );
    }

    function setup_export_detail( $type = 'id' ) {
        $field = $this->post_slug.'_export_'.$type;
        $value = get_post_meta($this->post_id, $field, true);
        $input = '<input type="text" maxlength="5" name="'.$field.'" value="'.$value.'" required="required" '.$this->length.'>';
        
        echo $this->render( $input, 'text', 'Export ' . strtoupper( $type ), 'used while exporting data' );
    }

    function field_pool_id( $id = 0 ) {
        echo '<input type="hidden" name="pool_type_id" value="'.$id.'">';
    }

    function field_draw_id( $draw_id = 0 ) {
        $field  = $this->post_slug.'_draw_id';
        $number = get_post_meta($this->post_id, $field, true);
        $value  = ($number == null) ? ($draw_id + 1) : $number;
        $input  = '<input type="text" value="'.$value.'" style="color: #121212 !important; font-weight: bold;" disabled>';
        $input .= '<input type="hidden" min="1" maxlength="12" name="'.$field.'" value="'.$value.'" required="required" '.$this->length.'>';
        
        echo $this->render( $input, 'number', 'Draw Number', 'latest draw number : <b>'.$draw_id.'</b>' );
    }

    function field_auto_number() {
        $btnsl = 'style="border-color:#e38d13; background:linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%); color:#f5f5f5; font-weight:bold;"';
        $input = '<button id="pool-auto-number" class="button button-large" '.$btnsl.'>Generate All Number</button>';
        
        echo $this->render( $input, 'number', 'Generate Auto Number', 'auto generate for prize number' );
    }

    function field_prize_number( $list = 1, $type = 'main', $length = 4 ) {
        $text = ucwords( $type ) . ' Prize - ';
        $from = '';
        $stop = '';

        for ( $no = 1; $no <= $length; $no++ ) {
            $from .= '0';
            $stop .= '9';
        }

        $info = 'number : ' . $from . '-' . $stop;

        if ( $type == 'main' ) {
            if ( $list == 1 ) {
                $text .= '1st';
            } elseif ( $list == 2 ) {
                $text .= '2nd';
            } elseif ( $list == 3 ) {
                $text .= '3rd';
            } else {
                $text .= $list . 'th';
            }
        } else {
            $text .= $list;
        }

        $field = $this->post_slug.'_prize_'.$type.'_'.$list;
        $value = get_post_meta($this->post_id, $field, true);
        $input = '<input type="text" maxlength="'.$length.'" name="'.$field.'" value="'.$value.'" class="input-pool-prize" required="required" '.$this->length.'>';

        echo $this->render( $input, 'number', $text, $info );
    }
}
