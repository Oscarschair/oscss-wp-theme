<?php
get_header();

$args = array(
    'post_type' => 'post', // 投稿タイプを明示
    'posts_per_page' => 10, // 1ページあたりの表示数
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
<?php
    endwhile;
    wp_reset_postdata(); // クエリをリセット
else :
    echo '<p>投稿が見つかりません。</p>';
endif;

get_footer();
?>