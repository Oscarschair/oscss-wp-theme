<?php

/**
 * Template Name: ブログ一覧
 */
get_header();
?>


<main>
    <section class="blog-list">
        <div class="l-container">

            <h2>オスカーの学習帳</h2>

            <?php
            // 投稿一覧を取得するためのクエリ
            $args = array(
                'post_type' => 'post', // 投稿タイプを指定
                'posts_per_page' => 10, // 1ページに表示する投稿数
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // 現在のページ番号
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    get_template_part('template-parts/content', 'post'); // コンポーネントを呼び出す
                endwhile;

                // ページネーション
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => __('&laquo; 前へ'),
                    'next_text' => __('次へ &raquo;'),
                ));

                wp_reset_postdata(); // クエリのリセット
            else :
            ?>
                <p>投稿がありません。</p>
            <?php
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer(); // フッターを読み込む
?>