<?php
// Move Pages above Media
function menu_order( $menu_order ) {
    return array(
        'index.php', //Dashboard
        'separator1',
        
        'upload.php', //Media
        'edit.php', //Posts
        'edit.php?post_type=page', //Pages
        'footer', //Footer information
        'separator-last',
        
        'edit.php?post_type=acf-field-group', //Custom fields
        'options-general.php', //Settings
        'tools.php', //Tools
        'plugins.php', //Plugins
        'users.php', //Users
        'themes.php', //Appearance
    );
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'menu_order' );
?>