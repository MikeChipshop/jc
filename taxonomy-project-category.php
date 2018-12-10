<?php get_header(); ?>
    <div class="jc_wrap">
        <?php if ( have_posts() ) : ?>
            <ul class="jc_news-archive jc_square-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <div class="jc_news-archive-item">
                            <a href="">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
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
