<?php get_header(); ?>

<main>
    <h2>Derniers Articles</h2>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
