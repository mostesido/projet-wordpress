<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <div class="projet">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </div>
        <?php
    endwhile;
else :
    echo '<p>Aucun projet trouvé.</p>';
endif;

get_footer();
