<?php

function montheme_supports() {
  add_theme_support('title-tag'); // title dynamique
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menu('header', 'En tête du menu');
  register_nav_menu('footer', 'Pied de page');
}

function montheme_register_assets() {
  wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', []);
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', ['bundle', 'popper'], null, true);
  wp_register_script('bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], null, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', [], false, true);
  // []: pas de dependances, false: pas de version, true: dans le footer
  wp_enqueue_style( 'fontawesome' );
  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_script( 'bootstrap' );
}

// les filtres permet d'altérer une valeur

function montheme_title_separator() {
  return '|';
}

function montheme_document_title_parts($title) {
    //var_dump($title); die();
    unset($title['tagline']); // filtre des éléments qu'on ne veux pas dans le titre
    $title['demo'] = 'Intégrateur Front'; // ajout de propriété avec la cle demo
    return $title;
}

function montheme_menu_class($classes) {
  //var_dump(func_get_args());
  //die();

  $classes[] = 'nav-item';
  return $classes;
}

function montheme_menu_link_class($attrs) {
  //var_dump(func_get_args());
  //die();

  $attrs['class'] = 'nav-link';
  return $attrs;
}

function montheme_pagination() {

  $pages = paginate_links(['type' => 'array']);

  if($pages === null) {
    return;
  }

  echo '<nav aria-label="Page navigation example" class="my-4">';
  echo '<ul class="pagination">';

  foreach($pages as $page) {
    $active = strpos($page, 'current') !== false;
    $class="page-item";
    if($active) {
      $class .= ' active';
    }
    echo '<li class="' . $class . '">';
    echo str_replace('page-numbers', 'page-link', $page);
    echo '</li>';
  }
  //var_dump($page);
  echo '</ul>';
  echo '</nav>';
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');