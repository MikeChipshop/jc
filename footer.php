<footer class="jc_global-footer">
    <div class="jc_wrap">

        <div class="jc_footer-left">
            <div class="jc_footer-left-top">
                <div class="jc_footer-address"><?php the_field('contact_address','option'); ?></div>
                <div class="jc_footer-contact">
                    <p><a href="tel:<?php the_field('contact_telephone_number','option'); ?>"><?php the_field('contact_telephone_number','option'); ?></a></p>
                    <p><a href="mailto:<?php the_field('contact_email_address','option'); ?>"><?php the_field('contact_email_address','option'); ?></a></p>
                </div>
            </div>
            <div class="jc_footer-details">
                    <span><?php the_field('footer_company_notice','option'); ?></span>
                    <ul><?php wp_nav_menu( array('theme_location' => 'footer_menu' )); ?></ul>
            </div>
        </div>
        <div class="jc_footer-right">
            <div class="jc_footer-social">
                <ul>
                    <?php if(get_field('instagram_url','option')): ?>
                        <li><a href="<?php the_field('instagram_url','option'); ?>" title="Find us on Instagram" rel="noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_field('houzz_url','option')): ?>
                        <li><a href="<?php the_field('houzz_url','option'); ?>" title="Find us on Houzz" rel="noreferrer" target="_blank"><i class="fab fa-houzz"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_field('twitter_url','option')): ?>
                        <li><a href="<?php the_field('twitter_url','option'); ?>" title="Find us on Twitter" rel="noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_field('pinterest_url','option')): ?>
                        <li><a href="<?php the_field('pinterest_url','option'); ?>" title="Find us on Pinterest" rel="noreferrer" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_field('facebook_url','option')): ?>
                        <li><a href="<?php the_field('facebook_url','option'); ?>" title="Find us on Facebook" rel="noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="jc_footer-logos">
                <?php if( have_rows('footer_logos','option') ): ?>
                    <ul>
                        <?php while ( have_rows('footer_logos','option') ) : the_row(); ?>
                            <li>
                                <?php
                                    $attachment_id = get_sub_field('footer_logos_image');
                                    $size = "full";
                                    $alt_text = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true);
                                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                                ?>
                                <?php if(get_sub_field('footer_logos_link')): ?>
                                    <a href="<?php the_sub_field('footer_logos_link'); ?>" target="_blank" rel="noreferrer">
                                <?php endif; ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text ?>">
                                <?php if(get_sub_field('footer_logos_link')): ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<section class="jc_contact">
    <div class="jc_contact-wrap">
        <div class="jc_contact-wrap-cont">
            <?php
                $attachment_id = get_field('contact_popup_background','option');
                $size = "full";
                $image = wp_get_attachment_image_src( $attachment_id, $size );
            ?>
            <div class="jc_contact-wrap-left" style="background: #494f6c url(<?php echo $image[0]; ?>) no-repeat center center;background-size: cover;">
                <div>
                    <?php the_field('contact_introduction','option'); ?>
                </div>
                <div>
                    <div>
                        <h2>Address</h2>
                        <?php the_field('contact_address','option'); ?>
                    </div>
                    <div>
                        <a href="<?php the_field('contact_map_link','option'); ?>" target="_blank"><?php the_field('contact_map_link_text','option'); ?></a>
                    </div>
                </div>
                <div>
                    <h2>Lets talk</h2>
                    <a href="tel:<?php the_field('contact_telephone_number','option'); ?>"><?php the_field('contact_telephone_number','option'); ?></a>
                </div>
                <div>
                    <h2>Enquiries</h2>
                    <a href="mailto:<?php the_field('contact_email_address','option'); ?>"><?php the_field('contact_email_address','option'); ?></a>
                </div>
            </div>
            <div class="jc_contact-wrap-right">
                <a class="jc_close-contact jc_contact-toggle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.8 118.48" style="enable-background:new 0 0 115.8 118.48;" xml:space="preserve">
                        <style type="text/css">
                            .off-cross{fill:#1B1E3C;}
                        </style>
                        <polygon class="off-cross" points="115.8,3.54 112.27,0 57.9,54.37 3.54,0 0,3.54 54.37,57.9 0,112.27 3.54,115.8 57.9,61.44 112.27,115.8 115.8,112.27 61.44,57.9 "/>
                    </svg>
                </a>
                <div class="jc_popup-form-wrap">
                    <?php echo do_shortcode( "[contact-form-7 id='375' title='Contact Form']" ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="jc_fp-video-pop-up">
    <div class="jc_fp-video-pop-up-wrap">
        <div class="jc_responsive-video"></div>
        <a class="jc_close-video">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.8 118.48" style="enable-background:new 0 0 115.8 118.48;" xml:space="preserve">
                <style type="text/css">
                    .off-cross{fill:#1B1E3C;}
                </style>
                <polygon class="off-cross" points="115.8,3.54 112.27,0 57.9,54.37 3.54,0 0,3.54 54.37,57.9 0,112.27 3.54,115.8 57.9,61.44 112.27,115.8 115.8,112.27 61.44,57.9 "/>
            </svg>
        </a>
    </div>
</div>
<?php wp_footer(); ?>
<script>
    window.addEventListener('load', function(){
    var allimages= document.getElementsByTagName('img');
    for (var i=0; i<allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
}, false)
</script>

<script>
    var iframe = document.querySelector('.jc_home-hero-video iframe');
    var player = new Vimeo.Player(iframe);

    player.on('play', function() {
      console.log('Played the video');
      document.body.classList.add("vid-loaded");
    });
  </script>
</body>
</html>
