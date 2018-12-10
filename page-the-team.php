<?php get_header(); ?>
<div class="jc_wrap">
<div class="jc_the-team">
    <?php
		$teamargs = array(
			'post_type' => 'team',
			'posts_per_page' => -1
		);
	?>
	<?php $teamloop = new WP_Query( $teamargs ); ?>
        <ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php if ( $teamloop->have_posts() ): ?>
				<?php while ( $teamloop->have_posts() ) : $teamloop->the_post(); ?>

        <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php the_post_thumbnail_url( 'team'); ?>" alt="<?php the_title(); ?>">
                        <div class="jc_news-archive-overlay">
                            <h2><?php the_title(); ?></h2>
                            <?php if(get_field('team_member_role')): ?>
                                <h3><?php the_field('team_member_role'); ?></h3>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            </li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
