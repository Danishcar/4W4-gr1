<?php get_header() ?>
<main class="site__main home">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>

<h1 class="site__main__titre home__titre">Accueil</h1>
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

    <div class="titre__accueil__evenements">
    <h2>Évènements</h2>
    <?php
        wp_nav_menu(array(
            "menu" => "evenements",
            "container" => "nav",
            "container_class" => "evenements__menu"
        ));
    ?>
    </div>
   
</main>
<?php get_footer() ?>