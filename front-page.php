<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">J</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">N</div>
    <div class="animation__bloc">X</div>
    <div class="animation__bloc">!</div>
</section>

<div class="titre__accueil__departement">
    <h1>Département</h1>
<?php
        wp_nav_menu(array(
            "menu" => "departement",
            "container" => "nav",
            "container_class" => "departement__menu"
        ));
    ?>
    </div>

    <div class="titre__accueil__evenement">
    <h1>Évènements</h1>
    <?php
        wp_nav_menu(array(
            "menu" => "evenement",
            "container" => "nav",
            "container_class" => "evenement__menu"
        ));
    ?>
    </div>

    <div class="titre__accueil__evenement">
    <h1>Ateliers</h1>
    <?php
        wp_nav_menu(array(
            "menu" => "ateliers",
            "container" => "nav",
            "container_class" => "ateliers__menu"
        ));
    ?>
    </div>

   <?php if (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>