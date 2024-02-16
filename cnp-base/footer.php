</main>
<footer role="" class="mast-foot">
    <section class="main-foot">
        <div class="mast-foot-columns container">
            <div class="mast-foot-branding">
                <a href="#" class="">
                    <?php $logo = get_field('site_logo', 'option'); ?>
                    <img src="<?= $logo['url'];?>" alt="Logo">
                </a>
                    <address>
                        <?php the_field('site_address', 'option'); ?>
                    </address>
                    <p><?php the_field('site_phone', 'option'); ?></p>
                    <span class="social">
                        <a href="#" class="social-link">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/fb-line.svg" alt="Facebook">
                        </a>
                        <a href="#" class="social-link">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/twitter-line.svg" alt="Twitter">
                        </a>
                        <a href="#" class="social-link">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/linkedin-line.svg" alt="Linkedin">
                        </a>
                    </span>
                </div>
                <nav>
                    <?php dynamic_sidebar( 'footer_1' ); ?>
                </nav>
                <nav>
                    <?php dynamic_sidebar( 'footer_2' ); ?>
                </nav>
                <nav>
                    <?php dynamic_sidebar( 'footer_3' ); ?>
                </nav>
                <nav>
                    <?php dynamic_sidebar( 'footer_4' ); ?>
                </nav>
            </div>
            <!-- END FOOTER COLUMNS -->
            <div class="footer-bottom container center d-flex justify-between">
                <span>©<?php echo date("Y"); ?>  <?php echo get_bloginfo( 'name' ); ?> - Made with love by <a class="orange" href="https://agence-alfred.com/">Alfred</a></span>

                <nav class="bottom-navigation">
                    <a href="/presse/">Presse</a>
                    <a href="/mentions-legales/">Mentions légales</a>
                    <a href="/donnees-personnelles/">Données personnelles</a>
                </nav>
            </div>
        </section>
        <section class="sub-footer container">
            <span class="footer-certification">
                <?php /* ?>
                <img src="<?= get_template_directory_uri() ?>/images/partners/ministere-sante.png" alt="HAS">
                <img src="<?= get_template_directory_uri() ?>/images/partners/has.png" alt="HAS">
                <?php */ ?>
            </span>
        </section>
    </footer>
<!-- scripts -->
<?php wp_footer(); ?>
</body>
</html>