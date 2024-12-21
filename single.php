<?php

/**
 * Template for displaying single posts
 *
 * @package Oscarchair
 */

get_header(); ?>

<main class="single-post">
    <div class="single-post__container container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post__article'); ?>>
            <header class="single-post__header">
                <?php if (has_post_thumbnail()) : ?>
                <div class="single-post__thumbnail">
                    <?php the_post_thumbnail('full', ['class' => 'single-post__image']); ?>
                </div>
                <?php endif; ?>

                <h1 class="single-post__title"> <?php the_title(); ?> </h1>
                <div class="single-post__meta">
                    <span class="single-post__date"> <?php echo get_the_date(); ?> </span>
                    <span class="single-post__author"> <?php the_author(); ?> </span>
                    <span class="single-post__categories">
                        <?php the_category(', '); ?>
                    </span>
                </div>
            </header>

            <div class="single-post__content">
                <?php the_content(); ?>
            </div>

            <?php if (has_tag()) : ?>
            <footer class="single-post__footer">
                <div class="single-post__tags">
                    <?php the_tags('<span class="single-post__tag">', '</span><span class="single-post__tag">', '</span>'); ?>
                </div>
            </footer>
            <?php endif; ?>
        </article>

        <aside class="single-post__share">
            <h2 class="single-post__share-title">Share This Article</h2>
            <div class="single-post__share-buttons">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                    target="_blank" class="single-post__share-button single-post__share-button--facebook">Facebook</a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                    target="_blank" class="single-post__share-button single-post__share-button--twitter">Twitter</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>"
                    target="_blank" class="single-post__share-button single-post__share-button--linkedin">LinkedIn</a>
            </div>
        </aside>

        <nav class="single-post__navigation">
            <div class="single-post__prev"> <?php previous_post_link('%link', '← Previous Article: %title'); ?> </div>
            <div class="single-post__next"> <?php next_post_link('%link', 'Next Article: %title →'); ?> </div>
        </nav>

        <?php
                // コメント表示
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

        <?php endwhile;
        else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'oscarchair'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>