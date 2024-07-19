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
                        <p class="subtitle-recette"><?php the_field('liste_ingredients');?></p>
                        <div class="line"></div>
                    </div>
                    <div class="list-ingredients">


                   <?php if(have_rows('liste_ingredients_repeteur')) : ?>
                        <?php while (the_repeater_field('liste_ingredients_repeteur')) : ?>

                            <p class="nom-ingredient">- <?php the_sub_field('nom_ingredient'); ?></p>

                        <?php endwhile; ?>
                        <?php else : ?>
                    <?php endif; ?>    
                    
                    </div>
                    </div>
                <div class="preparation">
                    <div class="title-preparation">
                        <p class="subtitle-recette"><?php the_field('liste_preparation');?></p>
                        <div class="line"></div>
                    </div>
                    <div class="list-preparation">
                        <?php if(have_rows('etapes_preparation_rep')) : ?>
                            <?php while (the_repeater_field('etapes_preparation_rep')) : ?>

                                <div class="content-etape">
                                    <p class="numero-etape"><?php the_sub_field('numero_etape'); ?></p>
                                    <?php if(have_rows('texte_etape_rep')) : ?>
                                        <?php while (the_repeater_field('texte_etape_rep')) : ?>

                                    <p class="texte-etape"><?php the_sub_field('texte_etape'); ?></p>

                                        <?php endwhile; ?>
                                        <?php else : ?>
                                    <?php endif; ?>  
                                </div>

                            <?php endwhile; ?>
                            <?php else : ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
           
        </article>

<?php get_footer(); ?>