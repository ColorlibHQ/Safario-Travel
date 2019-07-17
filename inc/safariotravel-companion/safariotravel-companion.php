<?php
/**
 * @Packge     : safariotravel Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_VERSION' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_DIR_PATH' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_DIR_PATH', get_parent_theme_file_path().'/inc/safariotravel-companion/' );
}

// Define inc dir path constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_INC_DIR_PATH' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_INC_DIR_PATH', SAFARIOTRAVEL_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_SW_DIR_PATH' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_SW_DIR_PATH', SAFARIOTRAVEL_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_EW_DIR_PATH' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_EW_DIR_PATH', SAFARIOTRAVEL_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_DEMO_DIR_PATH', SAFARIOTRAVEL_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'SAFARIOTRAVEL_THEME_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_THEME_DIR_URL', get_template_directory_uri() );
}

// Define inc dir url constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_DIR_URL', SAFARIOTRAVEL_THEME_DIR_URL . '/inc/safariotravel-companion/' );
}

// Define inc dir url constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_INC_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_INC_DIR_URL', SAFARIOTRAVEL_COMPANION_DIR_URL . 'inc/' );
}

// Define elementor-widgets dir url constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_META_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_META_DIR_URL', SAFARIOTRAVEL_COMPANION_INC_DIR_URL . 'safariotravel-meta/' );
}

// Define elementor-widgets dir url constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_EW_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_EW_DIR_URL', SAFARIOTRAVEL_COMPANION_INC_DIR_URL . 'elementor-widgets/' );
}

// Define elementor-widgets dir url constant
if( ! defined( 'SAFARIOTRAVEL_COMPANION_DEMO_DIR_URL' ) ) {
    define( 'SAFARIOTRAVEL_COMPANION_DEMO_DIR_URL', SAFARIOTRAVEL_COMPANION_INC_DIR_URL . 'demo-data/' );
}



$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();

if( ( 'Safario Travel' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'Safario Travel' == $is_parent->get( 'Name' ) ) ) {
    require_once SAFARIOTRAVEL_COMPANION_DIR_PATH . 'safariotravel-init.php';
} else {

    add_action( 'admin_notices', 'safariotravel_companion_admin_notice', 99 );
    function safariotravel_companion_admin_notice() {
        $url = 'https://wordpress.org/themes/safariotravel/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>Umeet Event Companion</strong> plugin you have to also install the %1$ssafariotravel Theme%2$s', 'safariotravel' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}
