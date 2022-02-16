<?php get_header() ?>
<main class="principal">
    <h1>-----------front page-------------</h1>
            <?php if (have_posts()): the_post()?>
                <article class="formation__cours">
                        <?php
                        the_title();
                        the_content();
                        ?>
                      
                    </article>
                <?php endif ?>
</main>
<?php get_footer() ?>