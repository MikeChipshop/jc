<?php get_header(); ?>
<div class="jc_page-hero">
    <div class="jc_page-hero-wrap">
        <?php
            $attachment_id = get_field('page_hero_image');
            $size = "full";
            $image = wp_get_attachment_image_src( $attachment_id, $size );
        ?>
        <img src="<?php echo $image[0]; ?>" alt="">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="jc_wrap">
    <?php get_template_part( 'components/custom', 'layout' ); ?>
</div>
<div class="jc_wrap">
    <?php
		$projrandargs = array(
			'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'rand'
		);
    ?>
    <?php $projrandloop = new WP_Query( $projrandargs ); ?>
    <?php if ( $projrandloop->have_posts() ): ?>

        <ul class="jc_news-archive jc_square-grid jc_related-grid">
            <?php while ( $projrandloop->have_posts() ) : $projrandloop->the_post(); ?>
                <li>
                    <div class="jc_news-archive-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url( 'team'); ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
                            <?php endif; ?>
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
