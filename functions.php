<?php

function montheme_supports() {
  add_theme_support('title-tag'); // title dynamique
}

function montheme_register_assets() {
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', ['bundle', 'popper'], null, true);
  wp_register_script('bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], null, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', [], false, true);
  // []: pas de dependances, false: pas de version, true: dans le footer
  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_script( 'bootstrap' );
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');