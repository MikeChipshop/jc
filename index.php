<?php get_header(); ?>
<?php if(get_field('page_hero_image', get_option('page_for_posts'))): ?>
<div class="jc_page-hero">
    <?php
        $attachment_id = get_field('page_hero_image', get_option('page_for_posts'));
        $size = "3-wide";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <img src="<?php echo $image[0]; ?>">
    <div class="jc_hero-overlay"><h1>News</h1></div>
</div>
<?php else: ?>
    <div class="jc_page-hero jc_no-hero">
        <div class="jc_hero-overlay"><h1>News</h1></div>
    </div>
<?php endif; ?>
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
                                <div class="jc_news-archive-icon"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg></div>
                            </div>

                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
        <nav class="jc_pagination">
            <?php  miniman_paging_nav(); ?>
        </nav>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
