<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <p><a href="<?php the_permalink() ?>">Lees meer</a></p>
        <hr>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

get_footer();

?>