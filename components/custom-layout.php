    <div class="custom-layout">
        <?php if( have_rows('content_layout') ): ?>
            <?php while ( have_rows('content_layout') ) : the_row(); ?>
                <?php if( get_row_layout() == 'single_column' ): ?>
                    <div class="row-wrap single-column">
                        <div class="single-column-child column-child">
                            <?php if(get_sub_field('c1_single_column_content') === 'image'): ?>
                                <div class="jc_rte-image">
                                    <?php
                                        $attachment_id = get_sub_field('c1_single_column_image');
                                        $size = "full";
                                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                                    ?>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                            <?php elseif(get_sub_field('c1_single_column_content') === 'text'): ?>
                                <div class="jc_rte-text">
                                    <?php the_sub_field('c1_single_column_content_text'); ?>
                                </div>
                            <?php else: ?>
                                <h2>No Content</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php elseif( get_row_layout() == 'two_column' ): ?>
                    <div class="row-wrap two-column layout-<?php the_sub_field('c2_width_type'); ?>">
                        <div class="two-column-child column-child">

                            <?php if( have_rows('c2_column_one_content') ): ?>
                                <?php while ( have_rows('c2_column_one_content') ) : the_row(); ?>

                                    <?php if(get_sub_field('c2_column_one_content_select') === 'image'): ?>
                                        <div class="jc_rte-image">
                                            <?php
                                                $attachment_id = get_sub_field('c2_column_one_content_image');
                                                $size = "full";
                                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    <?php elseif(get_sub_field('c2_column_one_content_select') === 'text'): ?>
                                        <div class="jc_rte-text jc_rte-text-align-<?php the_sub_field('c2_column_one_content_align'); ?>">
                                            <?php the_sub_field('c2_column_one_content_text'); ?>
                                        </div>
                                    <?php else: ?>
                                        <h2>No Content</h2>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="two-column-child column-child">

                            <?php if( have_rows('c2_column_two_content') ): ?>
                                <?php while ( have_rows('c2_column_two_content') ) : the_row(); ?>

                                    <?php if(get_sub_field('c2_column_two_content_select') === 'image'): ?>
                                        <div class="jc_rte-image">
                                            <?php
                                                $attachment_id = get_sub_field('c2_column_two_content_image');
                                                $size = "full";
                                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    <?php elseif(get_sub_field('c2_column_two_content_select') === 'text'): ?>
                                        <div class="jc_rte-text jc_rte-text-align-<?php the_sub_field('c2_column_two_content_align'); ?>">
                                            <?php the_sub_field('c2_column_two_content_text'); ?>
                                        </div>
                                    <?php else: ?>
                                        <h2>No Content</h2>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php elseif( get_row_layout() == 'three_column' ): ?>
                    <div class="row-wrap three-column layout-<?php the_sub_field('c3_width_type'); ?>">
                        <div class="three-column-child column-child">

                            <?php if( have_rows('c3_column_one_content') ): ?>
                                <?php while ( have_rows('c3_column_one_content') ) : the_row(); ?>

                                    <?php if(get_sub_field('c3_column_one_content_select') === 'image'): ?>
                                        <div class="jc_rte-image">
                                            <?php
                                                $attachment_id = get_sub_field('c3_column_one_content_image');
                                                $size = "full";
                                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    <?php elseif(get_sub_field('c3_column_one_content_select') === 'text'): ?>
                                        <div class="jc_rte-text jc_rte-text-align-<?php the_sub_field('c3_column_one_content_align'); ?>">
                                            <?php the_sub_field('c3_column_one_content_text'); ?>
                                        </div>
                                    <?php else: ?>
                                        <h2>No Content</h2>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="three-column-child column-child">

                            <?php if( have_rows('c3_column_two_content') ): ?>
                                <?php while ( have_rows('c3_column_two_content') ) : the_row(); ?>

                                    <?php if(get_sub_field('c3_column_two_content_select') === 'image'): ?>
                                        <div class="jc_rte-image">
                                            <?php
                                                $attachment_id = get_sub_field('c3_column_two_content_image');
                                                $size = "full";
                                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    <?php elseif(get_sub_field('c3_column_two_content_select') === 'text'): ?>
                                        <div class="jc_rte-text jc_rte-text-align-<?php the_sub_field('c3_column_two_content_align'); ?>">
                                            <?php the_sub_field('c3_column_two_content_text'); ?>
                                        </div>
                                    <?php else: ?>
                                        <h2>No Content</h2>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="three-column-child column-child">

                            <?php if( have_rows('c3_column_three_content') ): ?>
                                <?php while ( have_rows('c3_column_three_content') ) : the_row(); ?>

                                    <?php if(get_sub_field('c3_column_three_content_select') === 'image'): ?>
                                        <div class="jc_rte-image">
                                            <?php
                                                $attachment_id = get_sub_field('c3_column_three_content_image');
                                                $size = "full";
                                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    <?php elseif(get_sub_field('c3_column_three_content_select') === 'text'): ?>
                                        <div class="jc_rte-text jc_rte-text-align-<?php the_sub_field('c3_column_three_content_align'); ?>">
                                            <?php the_sub_field('c3_column_three_content_text'); ?>
                                        </div>
                                    <?php else: ?>
                                        <h2>No Content</h2>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
        	    <?php endif; ?>
            <?php endwhile; ?>
        <?php else: ?>
            <h1>No Layouts</h1>
        <?php endif; ?>
    </div>
