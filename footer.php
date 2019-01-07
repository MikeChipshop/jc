<footer class="jc_global-footer">
    <div class="jc_wrap">
        <div class="jc_footer-left">
            <div class="jc_footer-left-top">
                <div class="jc_footer-address">
                    Jo Cowen Architects<br />
                    533 King's Road<br />
                    London SW10 0TZ
                </div>
                <div class="jc_footer-contact">
                    <p><a href="tel:1234567789">+44 (0) 0207 371 1234</a></p>
                    <p><a href="#">info@jocowenarchitects.com</a></p>
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
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-houzz"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="jc_footer-logos">
                <ul>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-logo-one.png" alt="Logo"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder-logo-two.png" alt="Logo"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="jc_contact">
    <div class="jc_contact-wrap">
        <div class="jc_contact-wrap-cont">
            <div class="jc_contact-wrap-left">
                <div>
                    To discuss a project or find out more about how we can work together, please get in touch.
                </div>
                <div>
                    <div>
                        <h2>Address</h2>
                        Jo Cowen Architects<br />
                        533 King’s Road<br />
                        London SW10 0TZ<br />
                        United Kingdom
                    </div>
                    <div>
                        <a href="#">Get directions / View Map</a>
                    </div>
                </div>
                <div>
                    <h2>Lets talk</h2>
                    <a href="#">+44 (0) 0207 371 0357</a>
                </div>
                <div>
                    <h2>Enquiries</h2>
                    <a href="#">info@jocowenarchitects.com</a>
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
        Video
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
