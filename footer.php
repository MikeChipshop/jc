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
                    <span>&copy; Jo Cowen Architects Ltd. Co. No. 8754147. Vat No. 184 1989 65.</span>
                    <ul><?php wp_nav_menu( array('theme_location' => 'footer_menu' )); ?></ul>
            </div>
        </div>
        <div class="jc_footer-right">
            <div class="jc_footer-social">
                <ul>
                    <?php if(get_field('instagram_url','option')): ?>
                        <li><a href="<?php the_field('instagram_url','option'); ?>" title="Find us on Instagram"rel="noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_field('houzz_url','option')): ?>
                        <li><a href="<?php the_field('houzz_url','option'); ?>" title="Find us on Houzz"rel="noreferrer" target="_blank"><i class="fab fa-houzz"></i></a></li>
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
                <ul>
                    <li><a href="#" target="_blank" rel="noreferrer"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-logo-one.png" alt="Logo"></a></li>
                    <li><a href="#" target="_blank" rel="noreferrer"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-logo-two.png" alt="Logo"></a></li>
                </ul>
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
                <button class="jc_close-contact jc_contact-toggle">X</button>
                <div class="jc_popup-form-wrap">
                    <?php echo do_shortcode( "[contact-form-7 id='375' title='Contact Form']" ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="jc_fp-video-pop-up">
    <div class="jc_fp-video-pop-up-wrap">
        <div class="jc_responsive-video">

        </div>
        <button class="jc_close-video">X</button>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
