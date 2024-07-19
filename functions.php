<?php

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
register_nav_menus([
    'main-menu'  => 'Main navigation',
    'footer-menu'     => 'Footer navigation'
]);


// Chargement des styles
function my_theme_enqueue_styles() {
    // Enregistrer le style CSS compilé
    wp_enqueue_style( 'compiled-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


// Chargement de ou des fonts
function my_theme_enqueue_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap', array(), null );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Anton&display=swap', array(), null );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_fonts' );


// Chargement du logo
function my_theme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


function custom_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');


function add_menu_icons($items, $args) {
    foreach ($items as $item) {
        // Récupérer l'URL de l'icône SVG depuis ACF
        $icon_svg_url = get_field('menu_icon', $item);

        // Si une icône est définie, l'ajouter avant le titre de l'élément de menu
        if ($icon_svg_url) {
            // Lire le contenu du fichier SVG
            $svg_icon = file_get_contents($icon_svg_url);
            if ($svg_icon) {
                // Ajouter l'icône SVG avant le titre de l'élément de menu
                $item->title = $svg_icon . ' ' . $item->title;
            }
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_menu_icons', 10, 2);



include get_template_directory() . '/config/acf.php';
include get_template_directory() . '/config/cpt.php';


