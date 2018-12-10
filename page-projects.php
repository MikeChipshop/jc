<?php get_header(); ?>
<div class="jc_wrap">
    <ul class="jc_news-archive jc_square-grid">
        <?php
            $terms = get_terms( array(
                'taxonomy' => 'project-category',
                'hide_empty' => false,
            ) );

            foreach ($terms as $term):
        ?>
            <li>
                <div class="jc_news-archive-item">
                    <a href="<?php echo get_term_link( $term->slug, $term->taxonomy );?>"><?php echo $term->name;?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/square.jpg" alt="">
                        <div class="jc_news-archive-overlay">
                            <h2><?php echo $term->name;?></h2>
                        </div>
                    </a>
                </div>
            </li>
        <?php
            endforeach;
        ?>
    </ul>
    <nav class="jc_pagination">

    </nav>
</div>
<?php get_footer(); ?>
