<?php get_header(); ?>


        <article class="recette-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="recette-head">
                <div class="recette-infos">

                    <!-- AFFICHER LES TAXONOMIES COMME DES LABELS -->
                    <?php
                    // Récupérer les termes de la taxonomie "niveau"
                    $niveau_terms = wp_get_post_terms(get_the_ID(), 'niveau');
                    
                    // Vérifier si des termes sont trouvés
                    if (!empty($niveau_terms) && !is_wp_error($niveau_terms)) {
                        foreach ($niveau_terms as $term) {
                            $term_link = get_term_link($term);
                            if (!is_wp_error($term_link)) {
                                echo '<a href="' . esc_url($term_link) . '" class="recipe-taxonomy term-' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</a>';
                            }
                        }
                    }
                    ?>
                    <!-- FIN - AFFICHER LES TAXONOMIES COMME DES LABELS -->

                    <h1><?php the_title(); ?></h1>
                    <p class="recette-date"><?php the_field('recette_date');?></p>
                </div>


                <div class="recette-image-container">
                    <img src="<?php the_field('image_recette'); ?>">
                </div>
            </div>

            <div class="recipe-container">
                <div class="ingredients">
                    <div class="title-ingredients">
                        <p class="subtitle-recette">Ingrédients</p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="preparation">
                    <div class="title-preparation">
                        <p class="subtitle-recette">Préparation</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
           
        </article>

