<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">J</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">N</div>
    <div class="animation__bloc">X</div>
    <div class="animation__bloc">!</div>
</section>

    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>