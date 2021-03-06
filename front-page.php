<?php get_header(); ?>


<div class="jc_wrap jc_front-page-grid" role="main">
    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <div class="jc_grid-100">

            <?php // Block 1 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_1_video')): ?> jc_video-box<?php endif; ?>" id="block-1" data-type="admin">
                    <?php if(get_field('block_1_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_1_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_1_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_1_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_1_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_1_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_1_title'); ?>">
                        <a href="<?php the_field('block_1_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_1_video_embed_code"); ?>' title="<?php the_field('block_1_title'); ?>">
                            <h2><?php the_field('block_1_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="jc_grid-100">
                <div class="cat-e jc_grid-flex-content" id="block-4">
                    <div class="jc_fp-text-box jc_fp-news-box">
                        <a href="<?php the_field('block_4_link'); ?>"  title="<?php the_field('block_4_title'); ?>">
                            <h2>News</h2>
                            <h3><?php the_field('block_4_title'); ?></h3>
                            <p><?php the_field('block_4_content'); ?></p>
                            <div class="jc_icon-arrow-down">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="jc_grid-100">
                <div class="cat-f jc_grid-flex-content" id="block-5">
                    <div class="jc_fp-text-box link">
                        <a href="<?php the_field('block_5_link'); ?>" title="<?php the_field('block_5_title'); ?>">
                            <h2>Link</h2>
                            <h3><?php the_field('block_5_title'); ?></h3>
                            <p><?php the_field('block_5_content'); ?></p>
                            <div class="jc_icon-arrow-down">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        <div class="jc_grid-66">
            <div class="jc_grid-50">

                <?php // Block 2 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_2_video')): ?> jc_video-box<?php endif; ?>" id="block-2" data-type="admin">
                    <?php if(get_field('block_2_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_2_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_2_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_2_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_2_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_2_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_2_title'); ?>">
                        <a href="<?php the_field('block_2_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_2_video_embed_code"); ?>' title="<?php the_field('block_2_title'); ?>">
                            <h2><?php the_field('block_2_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="jc_grid-50">

                <?php // Block 3 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_3_video')): ?> jc_video-box<?php endif; ?>" id="block-3" data-type="admin">
                    <?php if(get_field('block_3_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_3_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_3_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_3_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_3_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_3_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_3_title'); ?>">
                        <a href="<?php the_field('block_3_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_3_video_embed_code"); ?>' title="<?php the_field('block_3_title'); ?>">
                            <h2><?php the_field('block_3_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="jc_grid-100">
            <?php // Block 6 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_6_video')): ?> jc_video-box<?php endif; ?>" id="block-6" data-type="admin">
                    <?php if(get_field('block_6_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_6_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_6_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_6_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_6_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_6_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_6_title'); ?>">
                        <a href="<?php the_field('block_6_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_6_video_embed_code"); ?>' title="<?php the_field('block_6_title'); ?>">
                            <h2><?php the_field('block_6_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jc_wrap jc_front-page-grid">
    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <?php // Block 7 ?>
            <div class="cat-c jc_grid-flex-content<?php if(get_field('block_7_video')): ?> jc_video-box<?php endif; ?>" id="block-7" data-type="admin">
                <?php if(get_field('block_7_video')): ?>
                    <div class="jc19_box-video-wrap">
                        <?php the_field("block_7_video_embed_code"); ?>
                        <?php
                            $attachment_id = get_field('block_7_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <button class="jc19_full-screen" data-embed='<?php the_field("block_7_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                        <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                            <div class="jc19_video-poster-title"><?php the_field('block_7_video_custom_title'); ?></div>
                            <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                        </div>
                    </div>
                <?php else: ?>
                    <?php
                        $attachment_id = get_field('block_7_image');
                        $size = "1-wide";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_7_title'); ?>">
                    <a href="<?php the_field('block_7_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_7_video_embed_code"); ?>' title="<?php the_field('block_7_title'); ?>">
                        <h2><?php the_field('block_7_title'); ?></h2>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="jc_grid-33">
        <?php // Block 8 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_8_video')): ?> jc_video-box<?php endif; ?>" id="block-8" data-type="admin">
                    <?php if(get_field('block_8_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_8_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_8_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_8_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_8_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_8_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_8_title'); ?>">
                        <a href="<?php the_field('block_8_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_8_video_embed_code"); ?>' title="<?php the_field('block_8_title'); ?>">
                            <h2><?php the_field('block_8_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <div class="jc_grid-33">
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-h jc_grid-flex-content" id="block-9">
                    <div class="jc_fp-text-box jc_fp-news-box awards">
                        <a href="<?php the_field('block_9_link'); ?>" title="<?php the_field('block_9_title'); ?>">
                            <h2><?php the_field('block_9_title'); ?></h2>
                            <?php
                                $attachment_id = get_field('block_9_content');
                                $size = "full";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <img src="<?php echo $image[0]; ?>" alt="Jo Cowen Architects Awards">
                            <div class="jc_icon-arrow-down">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">

                <?php // Block 10 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_10_video')): ?> jc_video-box<?php endif; ?>" id="block-10" data-type="admin">
                    <?php if(get_field('block_10_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_10_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_10_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_10_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_10_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_10_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_10_title'); ?>">
                        <a href="<?php the_field('block_10_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_10_video_embed_code"); ?>' title="<?php the_field('block_10_title'); ?>">
                            <h2><?php the_field('block_10_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">
            <?php // Block 11 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_11_video')): ?> jc_video-box<?php endif; ?>" id="block-11" data-type="admin">
                    <?php if(get_field('block_11_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_11_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_11_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_11_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_11_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_11_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_11_title'); ?>">
                        <a href="<?php the_field('block_11_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_11_video_embed_code"); ?>' title="<?php the_field('block_11_title'); ?>">
                            <h2><?php the_field('block_11_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-66">
        <?php // Block 12 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_12_video')): ?> jc_video-box<?php endif; ?>" id="block-12" data-type="admin">
                    <?php if(get_field('block_12_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_12_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_12_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_12_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_12_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_12_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_12_title'); ?>">
                        <a href="<?php the_field('block_12_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_12_video_embed_code"); ?>' title="<?php the_field('block_12_title'); ?>">
                            <h2><?php the_field('block_12_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <div class="jc_grid-33">
        <?php // Block 13 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_13_video')): ?> jc_video-box<?php endif; ?>" id="block-13" data-type="admin">
                    <?php if(get_field('block_13_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_13_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_13_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_13_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_13_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_13_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_13_title'); ?>">
                        <a href="<?php the_field('block_13_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_13_video_embed_code"); ?>' title="<?php the_field('block_13_title'); ?>">
                            <h2><?php the_field('block_13_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
        <?php // Block 14 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_14_video')): ?> jc_video-box<?php endif; ?>" id="block-14" data-type="admin">
                    <?php if(get_field('block_14_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_14_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_14_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_14_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_14_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_14_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_14_title'); ?>">
                        <a href="<?php the_field('block_14_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_14_video_embed_code"); ?>' title="<?php the_field('block_14_title'); ?>">
                            <h2><?php the_field('block_14_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <div class="jc_grid-33">
        <?php // Block 15 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_15_video')): ?> jc_video-box<?php endif; ?>" id="block-15" data-type="admin">
                    <?php if(get_field('block_15_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_15_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_15_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_15_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_15_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_15_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_15_title'); ?>">
                        <a href="<?php the_field('block_15_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_15_video_embed_code"); ?>' title="<?php the_field('block_15_title'); ?>">
                            <h2><?php the_field('block_15_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <div class="jc_grid-33">
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-g jc_grid-flex-content" id="block-16">
                    <div class="jc_fp-text-box contact">
                        <a href="#" class="jc_contact-toggle" title="<?php the_field('block_16_title'); ?>">
                        <h2>Contact</h2>
                        <h3><?php the_field('block_16_title'); ?></h3>
                        <p><?php the_field('block_16_content'); ?></p>
                        <div class="jc_icon-arrow-down">

                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                        </div>
                                        </a>
                    </div>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-e jc_grid-flex-content" id="block-17">
                    <div class="jc_fp-text-box jc_fp-news-box">
                        <a href="<?php the_field('block_17_link'); ?>" title="<?php the_field('block_17_title'); ?>">
                            <h2>News</h2>
                            <h3><?php the_field('block_17_title'); ?></h3>
                            <p><?php the_field('block_17_content'); ?></p>
                            <div class="jc_icon-arrow-down">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
                                    <defs>
                                        <style>
                                            .arrow-down-cls-1,.arrow-down-cls-3{
                                                fill:none;
                                            }
                                            .arrow-down-cls-2{
                                                clip-path:url(#arrow-down-clip-path);
                                            }
                                            .arrow-down-cls-3{
                                                stroke:#0e173c;
                                            }
                                        </style>
                                        <clipPath>
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
        <?php // Block 18 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_18_video')): ?> jc_video-box<?php endif; ?>" id="block-18" data-type="admin">
                    <?php if(get_field('block_18_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_18_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_18_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_18_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_18_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_18_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_18_title'); ?>">
                        <a href="<?php the_field('block_18_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_18_video_embed_code"); ?>' title="<?php the_field('block_18_title'); ?>">
                            <h2><?php the_field('block_18_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
        <div class="jc_grid-66">
        <?php // Block 19 ?>
                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_19_video')): ?> jc_video-box<?php endif; ?>" id="block-19" data-type="admin">
                    <?php if(get_field('block_19_video')): ?>
                        <div class="jc19_box-video-wrap">
                            <?php the_field("block_19_video_embed_code"); ?>
                            <?php
                                $attachment_id = get_field('block_19_image');
                                $size = "1-wide";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <button class="jc19_full-screen" data-embed='<?php the_field("block_19_video_embed_code"); ?>'><i class="far fa-expand"></i></button>
                            <div class="jc19_video-poster" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
                                <div class="jc19_video-poster-title"><?php the_field('block_19_video_custom_title'); ?></div>
                                <h2 class="jc_play-button"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.84001 188.06998"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="0 0 0 188.07 238.84 94.04 0 0"/></svg></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                            $attachment_id = get_field('block_19_image');
                            $size = "1-wide";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-loader.png" data-src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_19_title'); ?>">
                        <a href="<?php the_field('block_19_link'); ?>" class="jc_overlay" data-embed='<?php the_field("block_19_video_embed_code"); ?>' title="<?php the_field('block_19_title'); ?>">
                            <h2><?php the_field('block_19_title'); ?></h2>
                        </a>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
