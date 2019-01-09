<?php get_header(); ?>
<div class="jc_page-hero">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/news-hero.jpg">
    <div class="jc_hero-overlay"><h1>News</h1></div>
</div>
<div class="jc_wrap">
    <?php if ( have_posts() ) : ?>
        <ul class="jc_news-archive">
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <div class="jc_news-archive-item">
                        <a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
                            <img src="<?php the_post_thumbnail_url('news'); ?> " alt="<?php the_title(); ?>">
                            <div class="jc_news-archive-overlay">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <div class="jc_news-archive-icon"><i class="fal fa-arrow-down"></i></div>
                            </div>

                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
