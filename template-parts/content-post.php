<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <header class="post-header">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta">
            <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
        </p>
    </header>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
    <footer class="post-footer">
        <a href="<?php the_permalink(); ?>" class="read-more">続きを読む</a>
    </footer>
</article>