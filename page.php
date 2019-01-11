<?php get_header(); ?>
<div class="jc_page-hero">
    <?php
        $attachment_id = get_field('page_hero_image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <img src="<?php echo $image[0]; ?>">
    <div class="jc_hero-overlay"><h1><?php the_title(); ?></h1></div>
</div>
<div class="jc_wrap">
<?php get_template_part( 'components/custom', 'layout' ); ?>
</div>
<?php get_footer(); ?>
