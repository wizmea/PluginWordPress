<?php
/**
 * Plugin Name: First plugin
 * Plugin URI:
 * Description: The hello word plugin test
 * Version: 2018
 * Author:
 * Author: Arcadius TCHOKPODO
 */

/** 1 - Create your plugin folder under dir plugins
 *  2 - Under your plugin folder create a php file with the same name of your folder
 *  3 - Write the comment like the one above and change <Plugin Name> with the right one */

// simple function to render your plugin home page
function fp_display_page() {
  if (!current_user_can('edit_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
  }
  require __DIR__ . '/page.php';
}
// Add your plugin menu to wordpress side bar menu
add_action('admin_menu', function () {
  add_menu_page('My First plugin', 'First plugin', 'edit_pages', 'first-plugin.php',
    'fp_display_page', '', 32.123);
});