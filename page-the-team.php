<?php get_header(); ?>
<div class="jc_page-hero">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/team-header.jpg">
    <div class="jc_hero-overlay"><h1>The Team</h1></div>
</div>
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
    <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php endif; ?>


<div class="jc_page-hero">
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team_1.jpg">
    </div>



    <ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php if ( $teamloop->have_posts() ): ?>
				<?php while ( $teamloop->have_posts() ) : $teamloop->the_post(); ?>

        <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php the_post_thumbnail_url( 'team'); ?>" alt="<?php the_title(); ?>">
                        <div class="jc_news-archive-overlay">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            </li>
    <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php endif; ?>




<div class="jc_page-hero">
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team_2.jpg">
    </div>





    <ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php if ( $teamloop->have_posts() ): ?>
				<?php while ( $teamloop->have_posts() ) : $teamloop->the_post(); ?>

        <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php the_post_thumbnail_url( 'team'); ?>" alt="<?php the_title(); ?>">
                        <div class="jc_news-archive-overlay">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            </li>
    <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php endif; ?>






<div class="jc_page-hero">
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team_3.jpg">
    </div>







    <ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php if ( $teamloop->have_posts() ): ?>
				<?php while ( $teamloop->have_posts() ) : $teamloop->the_post(); ?>

        <li>
                <div class="jc_news-archive-item">
                    <a href="#">
                        <img src="<?php the_post_thumbnail_url( 'team'); ?>" alt="<?php the_title(); ?>">
                        <div class="jc_news-archive-overlay">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            </li>
    <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php endif; ?>
</div>
</div>
<div class="jc_team-join">
    <div class="jc_wrap">
        <div class="jc_team-join-section">
            <h2>Join the team</h2>
            <p>We are looking for a conscientious, confident and proactive Part I Architectural Assistant to join our team.</p>
            <p>Job Description</p>
        </div>
        <div class="jc_team-join-section">
            <p>We are always interested in meeting talented individuals whose creativity, ambition and talent meets that of our current team.<br />
            <p>If you are interested in joining our team, please email your CV to: <br />
            <a href="#">recruitment@jocowendesign.com</a>
            </p>
            <p>Please send CV’s by softcopy only, ensuring the images are sufficient in resolution. Clearly state your role including whether you are RIBA Part I, II or III. Attached files must not exceed 5mb.</p>
        </div>
        <div class="jc_team-join-section">
            <p>We try to respond to all enquiries, but the number of applications we receive may at times prevent us from contacting candidates other than those shortlisted for interview.</p>
            <p>For internship opportunities, please note that we are only able to accept candidates on the Erasmus programme, or other internship payment schemes — we are unable to offer un-paid work experience.</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
