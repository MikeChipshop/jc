<?php get_header(); ?>
<div class="jc_wrap">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <ul class="jc_news-archive jc_square-grid">
    <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
                        <div class="jc_news-archive-overlay">
                            <h2>Name</h2>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
                        <div class="jc_news-archive-overlay">
                            <h2>Name</h2>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
                        <div class="jc_news-archive-overlay">
                            <h2>Name</h2>
                        </div>
                    </a>
                </div>
            </li>
    </ul>
</div>
<?php get_footer(); ?>
