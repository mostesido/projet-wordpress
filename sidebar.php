<aside>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p>Aucun widget ajouté.</p>
    <?php endif; ?>
</aside>
