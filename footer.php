<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
		<footer class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="Cabinet nathalie paget - psychologue">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <p>
                    <?= get_theme_mod( 'paget_adresse' ) ?><br />
                    <?= get_theme_mod( 'paget_postal' ) ?> <?= get_theme_mod( 'paget_ville' ) ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <p>
                    Tel : <?= get_theme_mod( 'paget_tel' ) ?><br />
                    Mail : <a href="mailto:<?= get_theme_mod( 'paget_mail' ) ?>">
                        <?= get_theme_mod( 'paget_mail' ) ?>
                    </a>
                </p>
            </div>
            <div id="copyright" class="col-xs-12 col-sm-12 col-md-12">
                <p>
                <?= get_theme_mod( 'paget_copy' ) ?>
                </p>
            </div>
        </footer>
    </div>
    
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>