<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <?php wp_head(); ?>

</head>

<body <?php body_class('body'); ?>>

<div class="container-main">
        <header>
            
                    <!-- Ajout du logo -->
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    } else {
                        // Affiche le nom du site si aucun logo n'est défini
                        echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
                    }
                    ?>

                     <!-- Ajout de la nav -->
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'navClass',
                        'menu_class' => 'listClass'
                    ) );
                    ?>
            
        </header>


        