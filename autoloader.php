<?php
spl_autoload_register( 'wordpress_2_flotiq_sync_autoloader' );
function wordpress_2_flotiq_sync_autoloader( $class_name ) {
    if ( false !== strpos( $class_name, 'Wordpress2FlotiqSync' ) ) {
        $classes_dir = realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
        $class_file = str_replace( '_', DIRECTORY_SEPARATOR, $class_name );
        $class_file = str_replace( '\\', DIRECTORY_SEPARATOR, $class_file ) ;
        require_once $classes_dir . $class_file . '.php';
    }
}