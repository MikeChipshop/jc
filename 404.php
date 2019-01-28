<?php get_header(); ?>
<?php if(get_field('404_page_image','option')): ?>
<div class="jc_page-hero">
    <?php
        $attachment_id = get_field('404_page_image','option');
        $size = "3-wide";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <img src="<?php echo $image[0]; ?>">
    <div class="jc_hero-overlay">
        <h1><?php the_field('404_page_title','option'); ?></h1>
    </div>
</div>
<?php else: ?>
    <div class="jc_page-hero jc_no-hero">
        <div class="jc_hero-overlay">
            <h1><?php the_field('404_page_title','option'); ?></h1>
        </div>
    </div>
<?php endif; ?>
<div class="jc_wrap">
    <div class="rte jc_404-content">
        <?php the_field('404_page_content','option'); ?>
    </div>
</div>
<?php get_footer(); ?>
