<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article class="articleContent" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="article-title-image">
                <div class="article-title-right">
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
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="article-image-container">
                    <img src="<?php the_field('article_image'); ?>">
                </div>

            </div>
            <div class="article-text"><?php the_content(); ?></div>
        </article>
    <?php endwhile;
endif;
?>

<?php get_footer(); ?>
