<?php
/**
* Template Name: Ateliers
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>

<main class="site__main"></main>
<article class="evenement">
          <h1>---- Template Ateliers ------</h1>
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>

          <section class="atelier__description">
               <?php the_field('description'); ?>
          </section>

          <section class="atelier__animateur">
               <?php the_field('animateur'); ?>
          </section>

          <section class="atelier__date__debut">
               <?php the_field('date_de_debut'); ?>
          </section>

          <section class="atelier__date__fin">
               <?php the_field('date_de_fin'); ?>
          </section>

          <section class="atelier__jours">
               <?php the_field('jours'); ?>
          </section>

          <section class="atelier__heure__debut">
               <?php the_field('heure_de_debut'); ?>
          </section>

          <section class="atelier__heure__fin">
               <?php the_field('heure_de_fin'); ?>
          </section>

          <section class="atelier__duree">
               <?php the_field('duree'); ?>
          </section>

          <section class="atelier__local">
               <?php the_field('local'); ?>
          </section>
          
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>