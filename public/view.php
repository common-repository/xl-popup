<?php
/**
 * Get the value of a settings field
 *
 * @param string $option settings field name
 * @param string $section the section name this field belongs to
 * @param string $default default text if it's not found
 * @return mixed
 */
function xl_get_option( $option, $section, $default = '' ) {

    $options = get_option( $section );

    if ( isset( $options[$option] ) ) {
        return $options[$option];
    }

    return $default;
}
?>

    <div id="xl_popup" class="popup-container" style="display:none;">
        <div class="popup-inner">
            <div class="btn-close" id="close">X</div>

            <div class="popup-form">
                <?php echo do_shortcode(xl_get_option( 'xl_popup_form_code', 'xl_basics', 'Insert Your Form Code' )); ?>
            </div><!--/.popup-form-->
        </div><!--/.popup-inner-->
    </div><!--/#xl_popup-->
