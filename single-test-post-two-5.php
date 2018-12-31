<?php get_header(); ?>
<div class="jc_wrap">
    <?php //if ( have_posts() ) : ?>
            <?php //while ( have_posts() ) : the_post(); ?>

            <?php //endwhile; ?> </ul>
    <?php //endif; ?>
    <h1>Test</h1>
    <div class="custom-layout">
        <?php if( have_rows('content_layout') ): ?>
            <?php while ( have_rows('content_layout') ) : the_row(); ?>
                <?php if( get_row_layout() == 'single_column' ): ?>
                    <div class="row-wrap single-column">
                        <div class="single-column-child">
                            One Column
                        </div>
                    </div>
                <?php elseif( get_row_layout() == 'two_column' ): ?>
                    <div class="row-wrap two-column layout-<?php the_sub_field('c2_width_type'); ?>">
                        <div class="two-column-child">
                            Two Column
                        </div>
                        <div class="two-column-child">
                            Two Column
                        </div>
                    </div>
                <?php elseif( get_row_layout() == 'three_column' ): ?>
                    <div class="row-wrap three-column layout-<?php the_sub_field('c3_width_type'); ?>">
                        <div class="three-column-child">
                            Three Column
                        </div>
                        <div class="three-column-child">
                            Three Column
                        </div>
                        <div class="three-column-child">
                            Three Column
                        </div>
                    </div>
        	    <?php endif; ?>
            <?php endwhile; ?>
        <?php else: ?>
            <h1>No Layouts</h1>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
