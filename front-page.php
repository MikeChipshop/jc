<?php get_header(); ?>

<div class="jc_wrap jc_front-page-grid">
    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <div class="jc_grid-100">
                <div class="cat-a jc_grid-flex-content<?php if(get_field('block_1_video')): ?> jc_video-box<?php endif; ?>" id="block-1">
                    <?php
                        $attachment_id = get_field('block_1_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_1_title'); ?>">
                    <a href="<?php the_field('block_1_link'); ?>" class="jc_overlay">
                        <h2><?php the_field('block_1_title'); ?></h2>
                    </a>
                </div>
            </div>
            <div class="jc_grid-100">
                <div class="cat-e jc_grid-flex-content" id="block-4">
                    <div class="jc_fp-text-box jc_fp-news-box">
                        <h2>News</h2>
                        <h3><?php the_field('block_4_title'); ?></h3>
                        <p><?php the_field('block_4_content'); ?></p>
                        <div class="jc_icon-arrow-down">
                            <a href="<?php the_field('block_4_link'); ?>">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
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
                                        <clipPath id="arrow-down-clip-path">
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jc_grid-100">
                <div class="cat-f jc_grid-flex-content" id="block-5">
                    <div class="jc_fp-text-box link">
                        <h2>Link</h2>
                        <h3><?php the_field('block_5_title'); ?></h3>
                        <p><?php the_field('block_5_content'); ?></p>
                        <div class="jc_icon-arrow-down">
                            <a href="<?php the_field('block_5_link'); ?>">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
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
                                        <clipPath id="arrow-down-clip-path">
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <div class="jc_grid-66">
            <div class="jc_grid-50">

                <div class="cat-c jc_grid-flex-content<?php if(get_field('block_2_video')): ?> jc_video-box<?php endif; ?>" id="block-2">
                    <?php
                        $attachment_id = get_field('block_2_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_2_title'); ?>">
                    <a href="<?php the_field('block_2_link'); ?>" class="jc_overlay" data-embed="https://player.vimeo.com/video/<?php the_field('block_2_video_embed_code'); ?>">
                        <?php if(get_field('block_2_video')): ?>
                            <h2 class="jc_play-button"><i class="fas fa-play"></i></h2>
                        <?php else: ?>
                            <h2><?php the_field('block_2_title'); ?></h2>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
            <div class="jc_grid-50">
                <div class="cat-d jc_grid-flex-content" id="block-3">
                    <?php
                        $attachment_id = get_field('block_3_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_3_title'); ?>">
                    <a href="<?php the_field('block_3_link'); ?>" class="jc_overlay">
                        <h2><?php the_field('block_3_title'); ?></h2>
                    </a>
                </div>
            </div>
            <div class="jc_grid-100">
                <div class="cat-b jc_grid-flex-content" id="block-6">
                    <?php
                        $attachment_id = get_field('block_6_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_6_title'); ?>">
                    <a href="<?php the_field('block_6_link'); ?>" class="jc_overlay">
                        <h2><?php the_field('block_6_title'); ?></h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jc_wrap jc_front-page-grid">
    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <div class="cat-a jc_grid-flex-content" id="block-7">
                <?php
                    $attachment_id = get_field('block_7_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_7_title'); ?>">
                <a href="<?php the_field('block_7_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_7_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-33">
            <div class="cat-d jc_grid-flex-content" id="block-8">
                <?php
                    $attachment_id = get_field('block_8_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_8_title'); ?>">
                <a href="<?php the_field('block_8_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_8_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-33">
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-h jc_grid-flex-content" id="block-9">
                    <div class="jc_fp-text-box">
                        <h2><?php the_field('block_9_title'); ?> <span class="fal fa-star"></span></h2>
                        <div class="jc_icon-arrow-down">
                            <a href="<?php the_field('block_9_link'); ?>">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
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
                                        <clipPath id="arrow-down-clip-path">
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-c jc_grid-flex-content" id="block-10">
                    <?php
                        $attachment_id = get_field('block_10_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_10_title'); ?>">
                    <a href="<?php the_field('block_10_link'); ?>" class="jc_overlay">
                        <h2><?php the_field('block_10_title'); ?></h2>
                    </a>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-b jc_grid-flex-content" id="block-11">
                    <?php
                        $attachment_id = get_field('block_11_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_11_title'); ?>">
                    <a href="<?php the_field('block_11_link'); ?>" class="jc_overlay">
                        <h2><?php the_field('block_11_title'); ?></h2>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-66">
            <div class="cat-b jc_grid-flex-content" id="block-12">
                <?php
                        $attachment_id = get_field('block_12_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_12_title'); ?>">
                <a href="<?php the_field('block_12_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_12_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-33">
            <div class="cat-a jc_grid-flex-content" id="block-13">
                <?php
                        $attachment_id = get_field('block_13_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_13_title'); ?>">
                <a href="<?php the_field('block_13_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_13_title'); ?></h2>
                </a>
            </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <div class="cat-c jc_grid-flex-content" id="block-14">
                <?php
                        $attachment_id = get_field('block_14_image');
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_14_title'); ?>">
                <a href="<?php the_field('block_14_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_14_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-33">
            <div class="cat-d jc_grid-flex-content" id="block-15">
                <?php
                    $attachment_id = get_field('block_15_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_15_title'); ?>">
                <a href="<?php the_field('block_15_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_15_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-33">
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-g jc_grid-flex-content" id="block-16">
                    <div class="jc_fp-text-box">
                        <h2>Contact</h2>
                        <h3><?php the_field('block_16_title'); ?></h3>
                        <p><?php the_field('block_16_content'); ?></p>
                        <div class="jc_icon-arrow-down">
                            <a href="<?php the_field('block_16_link'); ?>">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
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
                                        <clipPath id="arrow-down-clip-path">
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jc_grid-100 jc_grid-flex">
                <div class="cat-e jc_grid-flex-content" id="block-17">
                    <div class="jc_fp-text-box jc_fp-news-box">
                        <h2>News</h2>
                        <h3><?php the_field('block_17_title'); ?></h3>
                        <p><?php the_field('block_17_content'); ?></p>
                        <div class="jc_icon-arrow-down">
                            <a href="<?php the_field('block_17_link'); ?>">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20.849 27.35">
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
                                        <clipPath id="arrow-down-clip-path">
                                            <rect class="arrow-down-cls-1" width="20.849" height="27.35"/>
                                        </clipPath>
                                    </defs>
                                    <title>Down Arrow</title>
                                    <g class="arrow-down-cls-2">
                                        <polyline class="arrow-down-cls-3" points="0.354 16.572 10.424 26.643 20.496 16.572"/>
                                        <line class="arrow-down-cls-3" x1="10.4438" y1="-0.0006" x2="10.4438" y2="26.9474"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jc_grid-100 jc_grid-flex">
        <div class="jc_grid-33">
            <div class="cat-a jc_grid-flex-content" id="block-18">
                <?php
                    $attachment_id = get_field('block_18_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_18_title'); ?>">
                <a href="<?php the_field('block_18_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_18_title'); ?></h2>
                </a>
            </div>
        </div>
        <div class="jc_grid-66">
            <div class="cat-b jc_grid-flex-content" id="block-19">
                <?php
                    $attachment_id = get_field('block_19_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="Visit <?php the_field('block_19_title'); ?>">
                <a href="<?php the_field('block_19_link'); ?>" class="jc_overlay">
                    <h2><?php the_field('block_19_title'); ?></h2>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
