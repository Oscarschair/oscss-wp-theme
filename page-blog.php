<?php
// テンプレートファイルの冒頭に必要なWordPressテンプレートヘッダー
get_header();
?>

<main>
    <section class="blog-list">
        <h1>ブログ一覧</h1>

        <?php
        // WordPressループを使用して投稿を取得
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta">
                        投稿日: <?php the_date(); ?> | カテゴリ: <?php the_category(', '); ?>
                    </p>
                    <div class="post-excerpt">
                        <?php the_excerpt(); // 投稿の抜粋を表示 
                        ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more">続きを読む</a>
                </article>
            <?php
            endwhile;

            // ページネーションを表示
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&laquo; 前へ'),
                'next_text' => __('次へ &raquo;'),
            ));

        else :
            ?>
            <p>投稿がありません。</p>
        <?php
        endif;
        ?>
    </section>
</main>

<?php
// テンプレートファイルの最後に必要なWordPressテンプレートフッター
get_footer();
