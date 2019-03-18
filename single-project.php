<?php get_header(); ?>
<?php if(get_field('page_hero_image')): ?>
    <div class="jc_page-hero">
        <div class="jc_page-hero-wrap">
            <?php
                $attachment_id = get_field('page_hero_image');
                $size = "3-wide";
                $image = wp_get_attachment_image_src( $attachment_id, $size );
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php else: ?>
    <div class="jc_page-hero jc_no-hero">
        <div class="jc_hero-overlay"><h1><?php the_title(); ?></h1></div>
    </div>
<?php endif; ?>
<div class="jc_wrap">
    <?php get_template_part( 'components/custom', 'layout' ); ?>
</div>
<div class="jc_wrap">
    <?php
        $relatedtax = "";
        $post = get_post();
        $term_list = wp_get_post_terms($post->ID, 'project-category');
        $term_list = wp_list_filter(
            $term_list, array(
                'slug'=>'all-projects',
            ),
            'NOT'
        );
        $term_list = wp_list_filter(
            $term_list, array(
                'slug'=>'latest-featured',
            ),
            'NOT'
        );

            foreach ( $term_list as $term ):
                $relatedtax = $term->name;
             break; endforeach;


    ?>

    <?php
		$projrandargs = array(
			'post_type'         => 'project',
            'posts_per_page'    => 3,
            'orderby'           => 'rand',
            'tax_query' => array(
                array(
                    'taxonomy'          => 'project-category',
                    'field'             => 'slug',
                    'terms'             => $relatedtax
                ),
            ),
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
