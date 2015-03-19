<?php
add_action( 'admin_menu', 'custom_page_tutorial_register' );

function custom_page_tutorial_register()
{
  add_submenu_page(
    'edit.php?post_type=page', // Parent slug
    'Tutorial',                // page title
    'Tutorial',                // menu title
    'read',                    // capability
    'tutorial',                // menu slug
    'custom_page_tutorial_render'        // callback function
  );
}
function custom_page_tutorial_render()
{
    global $title;

    print '<div class="wrap">';
    print "<h1>$title</h1>";
    ?>
    <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/logo-black.svg">
    <?php
    print '</div>';
}
?>