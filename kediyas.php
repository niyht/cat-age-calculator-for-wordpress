<?php
/*
Plugin Name: Kedi Yaşı Hesaplama
Description: Shortcode: [catage_calculator]. This plugin is a simple ROAS Calculate.
Version: 1.0
Author: Brksoft
Author URI:  https://brksoft.com
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue the JavaScript and CSS files
function catage_scripts() {
        // Enqueue the JavaScript file
        wp_enqueue_script('woo-heart-button', plugin_dir_url(__FILE__) . 'kediyas.js', array(), '1.0', true);

        // Enqueue the CSS file
        // wp_enqueue_style('woo-heart-button-css', plugin_dir_url(__FILE__) . 'kediyas.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'catage_scripts');

// Shortcode to display the heart button
function catage_shortcode() {
return '
<div>
        <h2 class="baslik" id="baslik">Kedi Yaşı Hesaplama Aracı</h2>
        <label for="kediYasimetni">Kedinizin Yaşı:</label>
        <input type="number" id="kediYasi">
        <br>
        <button type="button" id="hesapla">Hesapla</button><br><br>
        <span id="sonucSpani">
        <h6>Sonuç:&nbsp;</h6>
        <h6 id="sonuc"></h6>
        </span>
</div>
';
}

add_shortcode('catage_calculator', 'catage_shortcode');