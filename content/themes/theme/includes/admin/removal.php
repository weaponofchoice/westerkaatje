<?php
// Remove Comments menu item for all
function remove_menu_items() {
  remove_menu_page( 'edit-comments.php' );
  remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'remove_menu_items' );
?>