<?php get_header(); ?>
<div class="jc_page-hero">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/team-header.jpg">
    <div class="jc_hero-overlay"><h1>The Team</h1></div>
</div>
<div class="jc_wrap">
<div class="jc_the-team">

<?php // Section One // ?>
<ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php
        $ids = get_field('team_section_one', false, false);
        $seconeargs = array(
            'post_type'      	=> 'team',
            'posts_per_page'	=> -1,
            'post__in' => ((!isset($ids) || empty($ids)) ? array(-1) : $ids),
            'post_status'       => 'publish',
            'orderby'        	=> 'post__in',
        );
    ?>
    <?php $seconeloop = new WP_Query( $seconeargs ); ?>
    <?php if ( $seconeloop->have_posts() ): ?>
        <?php while ( $seconeloop->have_posts() ) : $seconeloop->the_post(); ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</ul>


<div class="jc_page-hero">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/team_1.jpg">
</div>

<?php // Section Two // ?>
<ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php
        $ids2 = get_field('team_section_two', false, false);
        $sectwoargs = array(
            'post_type'      	=> 'team',
            'posts_per_page'	=> -1,
            'post__in' => ((!isset($ids2) || empty($ids2)) ? array(-1) : $ids2),
            'post_status'       => 'publish',
            'orderby'        	=> 'post__in',
        );
    ?>
    <?php $sectwoloop = new WP_Query( $sectwoargs ); ?>
    <?php if ( $sectwoloop->have_posts() ): ?>
        <?php while ( $sectwoloop->have_posts() ) : $sectwoloop->the_post(); ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</ul>

<?php // Section Three // ?>
<ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php
        $ids3 = get_field('team_section_three', false, false);
        $secthreeargs = array(
            'post_type'      	=> 'team',
            'posts_per_page'	=> -1,
            'post__in' => ((!isset($ids3) || empty($ids3)) ? array(-1) : $ids3),
            'post_status'       => 'publish',
            'orderby'        	=> 'post__in',
        );
    ?>
    <?php $secthreeloop = new WP_Query( $secthreeargs ); ?>
    <?php if ( $secthreeloop->have_posts() ): ?>
        <?php while ( $secthreeloop->have_posts() ) : $secthreeloop->the_post(); ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</ul>

<?php // Section Four // ?>
<ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php
        $ids4 = get_field('team_section_four', false, false);
        $secfourargs = array(
            'post_type'      	=> 'team',
            'posts_per_page'	=> -1,
            'post__in' => ((!isset($ids4) || empty($ids4)) ? array(-1) : $ids4),
            'post_status'       => 'publish',
            'orderby'        	=> 'post__in',
        );
    ?>
    <?php $secfourloop = new WP_Query( $secfourargs ); ?>
    <?php if ( $secfourloop->have_posts() ): ?>
        <?php while ( $secfourloop->have_posts() ) : $secfourloop->the_post(); ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</ul>

<?php // Section Five // ?>
<ul class="jc_news-archive jc_square-grid jc_team-grid">
    <?php
        $ids5 = get_field('team_section_five', false, false);
        $secfiveargs = array(
            'post_type'      	=> 'team',
            'posts_per_page'	=> -1,
            'post__in' => ((!isset($ids5) || empty($ids5)) ? array(-1) : $ids5),
            'post_status'       => 'publish',
            'orderby'        	=> 'post__in',
        );
    ?>
    <?php $secfiveloop = new WP_Query( $secfiveargs ); ?>
    <?php if ( $secfiveloop->have_posts() ): ?>
        <?php while ( $secfiveloop->have_posts() ) : $secfiveloop->the_post(); ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</ul>

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
