<?php
/* Template Name: Recettes */
get_header();
?>



<section class="pageClass recettes-container">

    <h1 class="h1-page"><?php the_field('page_title'); ?></h1>

    <?php
    // Récupère les termes de la taxonomie 'niveau'
    $niveaux = get_terms(array(
        'taxonomy' => 'niveau',
        'hide_empty' => false,
    ));

    // Boucle sur chaque niveau
    foreach ($niveaux as $niveau) {
        // Arguments de la requête WP pour récupérer les recettes selon le niveau
        $args = array(
            'post_type' => 'recette',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'niveau',
                    'field' => 'slug',
                    'terms' => $niveau->slug,
                ),
            ),
        );
        $recettes_query = new WP_Query($args);

        if ($recettes_query->have_posts()) {
            echo '<h2>' . esc_html($niveau->name) . '</h2>';
            echo '<ul>';

            while ($recettes_query->have_posts()) {
                $recettes_query->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_field('description'); ?></p> <!-- Champ ACF pour la description -->
                    <p><?php the_field('ingredients'); ?></p> <!-- Champ ACF pour les ingrédients -->
                </li>
                <?php
            }

            echo '</ul>';
        }

        // Réinitialise les données post globales
        wp_reset_postdata();
    }
    ?>
</section>





<?php
get_footer();
?>
