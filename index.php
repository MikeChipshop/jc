<?php get_header(); ?>
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
                                <p>Bio Acit latur alique iunt aut est, que listis quam solupta nostium sit pa ducit, tet qui to doluptam idebit quos maximol orrunt.</p>
                                <p>Neceatqui omnis dolupti busdam aceprovid qui sim volendandita sum et occab incti quiam sitata parum que et pror sitem</p>
                                <div class="jc_news-archive-icon"><i class="fal fa-arrow-down"></i></div>
                            </div>

                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
