<?php get_header(); ?>
<div class="jc_wrap">
    <ul class="jc_news-archive jc_square-grid jc_taxonomy-grid">
        <?php
            $terms = get_terms( array(
                'taxonomy' => 'project-category',
                'hide_empty' => false,
            ) );

            foreach ($terms as $term):
        ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php echo get_term_link( $term->slug, $term->taxonomy );?>">
                        <?php
                            $queried_object = get_queried_object();
                            $taxonomy = $queried_object->taxonomy;
                            $attachment_id = get_field('taxonomy_image', $taxonomy .'_'. $term->term_id);
                            $size = "square";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="">
                        <div class="jc_news-archive-overlay">
                            <h2><?php echo $term->name;?></h2>
                        </div>
                    </a>
                </div>
            </li>
        <?php
            endforeach;
        ?>
    </ul>
    <nav class="jc_pagination">

    </nav>
</div>
<?php get_footer(); ?>
