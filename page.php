<?php get_header(); ?>
<div class="jc_wrap">
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?> </ul>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
