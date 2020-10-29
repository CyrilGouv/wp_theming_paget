<?php
/*
    Template Name: Accueil
*/
get_header();
?>

<section id="imgAccueil" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <?php
        $image = get_field( 'image_accueil' );
        if ( !empty($image) ) :
    ?>
        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endif; ?>
    </div>
</section>

<section id="bienvenue" class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <h2><?= the_field( 'titre_bienvenue' ) ?></h2>
        <p>
            <?= the_field( 'texte_bienvenue' ) ?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <?php 
            $image = get_field( 'image_bienvenue' );
            if (!empty($image)) :
        ?>
        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endif; ?>
    </div>
</section>

<section id="btjoindre" class="row">
    <div class="col-xs-12 col-sm-8 col-md-8">
        <p>
            <?= the_field( 'texte_a_gauche' ) ?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <a href="<?= the_field( 'lien_du_bouton' ) ?>"><button><?= the_field( 'texte_du_bouton' ) ?></button></a>
    </div>
</section>

<section id="cabinet" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2><?= the_field( 'titre_section_4_colonnes' ) ?></h2>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <h3><?= the_field( 'titre_colonne_1' ) ?></h3>
        <?php 
            $image = get_field( 'image_colonne_1' );
        ?>
        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <p><?= the_field( 'texte_colonne_1' ) ?></p>
        <a href="<?= the_field( 'url_lien_colonne_1' ) ?>"><?= the_field( 'texte_lien_colonne_1' ) ?></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <h3>ADOLESCENTS</h3>
        <img src="<?php bloginfo('template_url') ?>/assets/img/salon-2.png" alt="Le cabinet de psychologie à Boulogne Billancourt">
        <p>L'adolescence est une période de changement, de transition...</p>
        <a href="#">En savoir +</a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <h3>ADULTES</h3>
        <img src="<?php bloginfo('template_url') ?>/assets/img/salon-2.png" alt="Le cabinet de psychologie à Boulogne Billancourt">
        <p>Mon approche d'aide, thérapeutique individuelle, est celui...</p>
        <a href="#">En savoir +</a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <h3>VICTIMES</h3>
        <img src="<?php bloginfo('template_url') ?>/assets/img/salon-2.png" alt="Le cabinet de psychologie à Boulogne Billancourt">
        <p>Être victime, c'est avoir vécu un événement traumatisant...</p>
        <a href="#">En savoir +</a>
    </div>
</section>


<?php get_footer(); ?>


