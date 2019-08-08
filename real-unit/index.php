<?php
   /*
   Plugin Name: Real Unit
   Description: Table property listing data Real Unit
   Version: 1.0
   */




// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
 // Add a new top-level menu (ill-advised):
    add_menu_page(__('All Real Unit','menu-test'), __('All Real Unit','menu-test'), 'manage_options', 'All-Real-Unit', 'all_real_unit' );
    // Add a submenu to the custom top-level menu:
    add_submenu_page('All-Real-Unit', __('Add Real Unit','menu-test'), __('Add Real Unit','menu-test'), 'manage_options', 'add-real-unit', 'add_real_unit_page');

add_submenu_page('info-real-unit', __('Add Real Unit'), __('Add Real Unit'), 'manage_options', 'info-real-unit', 'info_real_unit');


add_submenu_page('edit-real-unit', __('edit Real Unit'), __('edit Real Unit'), 'manage_options', 'edit-real-unit', 'edit_real_unit');

add_submenu_page('delete-real-unit', __('delete Real Unit'), __('delete Real Unit'), 'manage_options', 'delete-real-unit', 'delete_real_unit');

}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function all_real_unit() {
    //echo "<h2>" . __( 'All Real Unit', 'menu-test' ) . "</h2>";
    include 'all_real_unit.php';
}

function info_real_unit() {
    //echo "<h2>" . __( 'All Real Unit', 'menu-test' ) . "</h2>";
    include 'info_real_unit.php';
}
function edit_real_unit(){

include 'edit_real_unit.php';

}
function delete_real_unit(){
include 'delete_real_unit.php';

}

function add_real_unit_page() {
    //echo "<h2>" . __( 'Add Real Unit', 'menu-test' ) . "</h2>";
    include 'add_real_unit.php';
}
?>

<?php 
// front end short code 
function get_real_unit( $atts ){
include 'functions.php';
}
add_shortcode( 'real-unit', 'get_real_unit' );
//end