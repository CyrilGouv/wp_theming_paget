<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">
    <title>Nathalie Paguet</title>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				?>
                <img src="<?= $image[0] ?>" alt="<?php bloginfo( 'description' ); ?>" />
                <h1><?php bloginfo( 'title' ); ?></h1>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <?php wp_nav_menu( 
							[
								'container' => '',
								'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'
							] 
						); ?>
                        
                    </div>
                </nav>
            </div>
        </header>