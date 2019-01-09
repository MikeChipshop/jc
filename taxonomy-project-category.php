<?php get_header(); ?>
    <div class="jc_wrap">
        <?php if ( have_posts() ) : ?>
            <ul class="jc_news-archive jc_square-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <div class="jc_news-archive-item">
                            <?php
                                $attachment_id = get_field('taxonomy_image');
                                $size = "square";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $image[0]; ?>" alt="">
                                <div class="jc_news-archive-overlay">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
