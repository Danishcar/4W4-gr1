<?php
/**
* Template Name: Ateliers
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>

<main class="site__main">
<article class="ateliers">
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>


          <h2>Description de l'atelier</h2>
          <p class="atelier__description">
             <?php the_field('description'); ?>
         </p>

            <div class="infos_suplementaire">
          <h2>Infos suplémentaire sur l'atelier</h2>
          <p class="atelier__animateur">
               Animateur de l'atelier: <?php the_field('animateur'); ?>
          </p>

          <p class="atelier__date__debut">
               Date de début: <?php the_field('date_de_debut'); ?>
          </p>

          <p class="atelier__date__fin">
               Date de fin: <?php the_field('date_de_fin'); ?>
          </p>

          <p class="atelier__jours">
               Jours de l'atelier: <?php the_field('jours'); ?>
          </p>

          <p class="atelier__heure__debut">
               Heure de début: <?php the_field('heure_de_debut'); ?> 
          </p>

          <p class="atelier__heure__fin">
               Heure de fin: <?php the_field('heure_de_fin'); ?> 
          </p>

          <p class="atelier__duree">
               Durée de l'atelier: <?php the_field('duree'); ?> heures
          </p>

          <p class="atelier__local">
               Local de l'atelier: <?php the_field('local'); ?>
          </p>
          </div>
          
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>