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
    <h2>Département</h2>
<?php
        wp_nav_menu(array(
            "menu" => "departement",
            "container" => "nav",
            "container_class" => "departement__menu"
        ));
    ?>
    </div>

    <div class="titre__accueil__evenement">
    <h2>Évènements</h2>
    <?php
        wp_nav_menu(array(
            "menu" => "evenement",
            "container" => "nav",
            "container_class" => "evenement__menu"
        ));
    ?>
    </div>

    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>