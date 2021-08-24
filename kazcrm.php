<?php
/*
Plugin Name: KazCRM
Plugin URI: https://webcraft-studio.ru/
Description: Это плагин CRM.
Version: 0.0.1
Author: Kazzi
Author URI: https://webcraft-studio.ru/
License: GPLv2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: kazcrm
Domain Path: /lang
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function kazcrm_show_nav_item () {
	add_menu_page( 
		esc_html__( 'KazCRM', 'kazcrm' ),
        esc_html__( 'KazCRM Options', 'kazcrm' ),
        'manage_options',
        'kazcrm-options',
        'kazcrm_show_content',
        'dashicons-welcome-widgets-menus',
        11
	);
}
add_action('admin_menu', 'kazcrm_show_nav_item');

//Тело страницы в админке
function kazcrm_show_content () {
	echo "Hello world!!!";
}

//Регистрация скриптов и стилей
function register_assets () {
    wp_register_style('kazcrm_style', plugins_url('assets/admin.css', __FILE__));
}


//Подключение скриптов и стилей