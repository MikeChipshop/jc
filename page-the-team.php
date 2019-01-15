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

        <?php if(get_field('team_separator_image_one')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_one');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

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
        <?php if(get_field('team_separator_image_two')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_two');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

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
        <?php if(get_field('team_separator_image_three')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_three');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

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
        <?php if(get_field('team_separator_image_four')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_four');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

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
        <?php if(get_field('team_separator_image_five')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_five');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

        <?php // Section Six // ?>
        <ul class="jc_news-archive jc_square-grid jc_team-grid">
            <?php
                $ids6 = get_field('team_section_six', false, false);
                $secsixargs = array(
                    'post_type'      	=> 'team',
                    'posts_per_page'	=> -1,
                    'post__in' => ((!isset($ids6) || empty($ids6)) ? array(-1) : $ids6),
                    'post_status'       => 'publish',
                    'orderby'        	=> 'post__in',
                );
            ?>
            <?php $secsixloop = new WP_Query( $secsixargs ); ?>
            <?php if ( $secsixloop->have_posts() ): ?>
                <?php while ( $secsixloop->have_posts() ) : $secsixloop->the_post(); ?>
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
        <?php if(get_field('team_separator_image_six')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_six');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

        <?php // Section Seven // ?>
        <ul class="jc_news-archive jc_square-grid jc_team-grid">
            <?php
                $ids7 = get_field('team_section_seven', false, false);
                $secsevenargs = array(
                    'post_type'      	=> 'team',
                    'posts_per_page'	=> -1,
                    'post__in' => ((!isset($ids7) || empty($ids7)) ? array(-1) : $ids7),
                    'post_status'       => 'publish',
                    'orderby'        	=> 'post__in',
                );
            ?>
            <?php $secsevenloop = new WP_Query( $secsevenargs ); ?>
            <?php if ( $secsevenloop->have_posts() ): ?>
                <?php while ( $secsevenloop->have_posts() ) : $secsevenloop->the_post(); ?>
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
        <?php if(get_field('team_separator_image_seven')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_seven');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

        <?php // Section Eight // ?>
        <ul class="jc_news-archive jc_square-grid jc_team-grid">
            <?php
                $ids8 = get_field('team_section_seven', false, false);
                $seceightargs = array(
                    'post_type'      	=> 'team',
                    'posts_per_page'	=> -1,
                    'post__in' => ((!isset($ids8) || empty($ids8)) ? array(-1) : $ids8),
                    'post_status'       => 'publish',
                    'orderby'        	=> 'post__in',
                );
            ?>
            <?php $seceightloop = new WP_Query( $seceightargs ); ?>
            <?php if ( $seceightloop->have_posts() ): ?>
                <?php while ( $seceightloop->have_posts() ) : $seceightloop->the_post(); ?>
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
        <?php if(get_field('team_separator_image_eight')): ?>
            <div class="jc_team-hero">
                <?php
                    $attachment_id = get_field('team_separator_image_eight');
                    $size = "team-divider";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </div>
        <?php endif; ?>

        <?php // Section Nine // ?>
        <ul class="jc_news-archive jc_square-grid jc_team-grid">
            <?php
                $ids9 = get_field('team_section_seven', false, false);
                $secnineargs = array(
                    'post_type'      	=> 'team',
                    'posts_per_page'	=> -1,
                    'post__in' => ((!isset($ids9) || empty($ids9)) ? array(-1) : $ids9),
                    'post_status'       => 'publish',
                    'orderby'        	=> 'post__in',
                );
            ?>
            <?php $secnineloop = new WP_Query( $secnineargs ); ?>
            <?php if ( $secnineloop->have_posts() ): ?>
                <?php while ( $secnineloop->have_posts() ) : $secnineloop->the_post(); ?>
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
            <h2><?php the_field('team_box_one_title'); ?></h2>
            <?php the_field('team_box_one_content'); ?>
        </div>
        <div class="jc_team-join-section"><?php the_field('team_box_two_content'); ?></div>
        <div class="jc_team-join-section"><?php the_field('team_box_three_content'); ?> </div>
    </div>
</div>
<?php get_footer(); ?>
