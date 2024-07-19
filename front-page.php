<?php
get_header();
?>


    <section class="hero" id="hero">
        <div class="hero__content">
            <h1 class="hero__content_title"><?php the_field('hero_title'); ?><span><?php the_field('hero_subtitle'); ?></span></h1>
            <p><?php the_field('hero_text'); ?></p>
            <a href="<?php the_field('hero_button_link'); ?>" class="btn-primary"><?php the_field('hero_button_text'); ?></a>
        </div>
        <div class="hero__image">
            <div class="hero__image_container">
                <div class="hero__image_container_image">
                    <img src="<?php the_field('hero_image'); ?>" alt="Hero Image">
                </div>
                <img src="<?php the_field('hero_nappe_image'); ?>" class="img-nappe">
                <div class="hero__image_container_whitebg">

                </div>
            </div>
        </div>
    </section>
</div>


    <section id="articles">
        <div class="container-main">
            <div class="blog-entete">
                <h2><?php the_field('blog_home_title'); ?></h2>
                <a href="<?php the_field('blog_home_button_link'); ?>" class="btn-secondary"><?php the_field('blog_home_button_text'); ?></a>
            </div>
            <div class="recent-posts">
                <?php
                // Arguments pour la requête de posts
                $args = array(
                    'post_type' => 'post', // Type de post
                    'posts_per_page' => 4  // Nombre de posts à afficher
                );

                // La requête
                $recent_posts = new WP_Query($args);

                // La boucle
                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                        
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="article-card-categories">
                                        <?php
                                        // Afficher les catégories
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                // Affiche le nom de la catégorie avec un lien
                                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="article-card-category category-' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date('d/m/Y'); ?></span>
                                    </div>
        
                                    <h3><?php the_title(); ?></h3>
                                    <div class="thumbnailContainer">
                                        <img class="thumbnailArticle" src="<?php the_field('article_thumbnail'); ?>">
                                    </div>

                                </a>
                            </article>
                    
                    <?php endwhile;
                    wp_reset_postdata(); // Réinitialiser les données postales
                else :
                    echo '<p>Aucun article récent trouvé.</p>';
                endif;
                ?>
            </div>
                
        </div>
    </section>

<?php
get_footer();
?>
