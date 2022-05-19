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
          <h1>---- Template Ateliers ------</h1>
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>

          <p class="atelier__description">
               Description de l'atelier: <?php the_field('description'); ?>
         </p>

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
               Durée de l'atelier <?php the_field('duree'); ?>
          </p>

          <p class="atelier__local">
               Local de l'atelier: <?php the_field('local'); ?>
          </p>
          
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>