<?php get_header(); ?>
<?php if(get_field('page_hero_image')): ?>
    <div class="jc_page-hero">
        <?php
            $attachment_id = get_field('page_hero_image');
            $size = "3-wide";
            $image = wp_get_attachment_image_src( $attachment_id, $size );
        ?>
        <img src="<?php echo $image[0]; ?>">
        <div class="jc_hero-overlay"><h1><?php the_title(); ?></h1></div>
    </div>
<?php else: ?>
    <div class="jc_page-hero jc_no-hero">
        <div class="jc_hero-overlay"><h1><?php the_title(); ?></h1></div>
    </div>
<?php endif; ?>
<div class="jc_wrap">
    <?php get_template_part( 'components/custom', 'layout' ); ?>
</div>
<?php get_footer(); ?>
