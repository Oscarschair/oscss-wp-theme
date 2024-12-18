<?php

/**
 * Action
 */

/**
 * テンプレートがロードされる直前での処理
 * Classesを読み込みする
 */
// add_action('template_redirect', function () {
//     $template_directory = get_template_directory();

//     if (is_front_page()) {
//         require_once $template_directory . '/Classes/News/NewsSection.php';
//         require_once $template_directory . '/Classes/FrontPage/FrontPage.php';
//     }
// });

/**
 * 指定したスラッグの親ページを持っているか
 *
 * @param $parentSlug
 * @return bool
 */
function has_parent_page($parentSlug): bool
{
    $parent = get_page_by_path($parentSlug);
    if (!$parent) {
        return false;
    }

    $queriedObjectId = get_queried_object_id();
    if ($queriedObjectId === 0) {
        return false;
    }

    $parentId = wp_get_post_parent_id($queriedObjectId);
    return $parentId === $parent->ID;
}

/**
 * Add MIME types.
 */
add_action('upload_mimes', function ($mimes) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';

    return $mimes;
});

/**
 * Add enqueue scripts
 * TODO: ページごとに必要なファイルだけを読み込み・time()パラメータを削除
 */
add_action('wp_enqueue_scripts', function () {
    $template_directory_uri = get_template_directory_uri();

    // wp_enqueue_style('slick-css', $template_directory_uri . '/assets/libraries/slick/css/slick.css', [], '1.8.0');
    // wp_enqueue_style('slick-theme', $template_directory_uri . '/assets/libraries/slick/css/slick-theme.css', [], '1.8.0');
    wp_enqueue_style('app-css', $template_directory_uri . '/assets/css/app.css', [], time());

    // wp_enqueue_script('jquery-js', $template_directory_uri . '/assets/js/jquery.min.js', [], '3.7.1', true);
    // wp_enqueue_script('slick-js', $template_directory_uri . '/assets/libraries/slick/js/slick.min.js', ['jquery'], '1.8.0', true);
    // wp_enqueue_script('jquery-migrate-js', $template_directory_uri . '/assets/js/jquery-migrate.min.js', [], '3.4.1', true);
    // wp_enqueue_script('isotope-js', $template_directory_uri . '/assets/js/isotope.pkgd.min.js', [], '3.0.6', true);
    // wp_enqueue_script('scripts-js', $template_directory_uri . '/assets/js/app.min.js', [], time(), true);
});


/**
 * Add format on the wysywyg toolbar
 *------------------------------------------*/
function my_mce_before_init($init)
{
    $style_formats = array(
        array(
            'title' => 'Default Size',
            'block' => 'div', // You can use 'div' or 'p' depending on the context
            'classes' => '',
            'wrapper' => true,

            'styles' => array(
                'font-size' => '16'
            )
        ),
        array(
            'title' => 'Small Size',
            'block' => 'div', // You can use 'div' or 'p' depending on the context
            'classes' => 'has-small-font-size',
            'wrapper' => true,

            'styles' => array(
                'font-size' => '12px'
            )
        )
    );
    $init['style_formats'] = json_encode($style_formats);
    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce_before_init');

function my_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

add_action('oscss_banner', function () {
    global $post;
    $data = [];

    // pages with image as banner background
    $pages = [
        'home',
        'service',
        'blog',
        'contact'
    ];

    // $data
    // white-text: テキストを白色にするフラグ（スタイル制御用）。
    // heading-v2: 見出しのバージョン（例: カスタムスタイル用）。

    // home
    if (is_page('home')) {
        $data['banner-bg'] = 'home-bg.jpg';
        $data['white-text'] = 1;
    }

    // service
    if (is_page('service')) {
        $data['banner-bg'] = 'service-bg.webp';
    }

    // check if page with image as banner; otherwise use default
    if (is_page($pages)) {
        get_template_part('parts/banner', 'image', $data);
    } else {
        get_template_part('parts/banner', 'default');
    }
});


/**
 * Add BREADCRUMBS
 */
function the_breadcrumb()
{
    // パンくずリストのスタート
    echo '<nav class="breadcrumb" aria-label="breadcrumb">';
    echo '<a href="' . home_url() . '">ホーム</a>';

    // 投稿ページの場合（ブログ階層を挟む）
    if (is_single()) {
        // 「ブログ」へのリンクを追加
        echo ' &raquo; <a href="' . get_permalink(get_option('page_for_posts')) . '">ブログ</a>';

        // カテゴリのリンク
        $category = get_the_category();
        if (!empty($category)) {
            echo ' &raquo; <a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
        }

        // 投稿のタイトル
        echo ' &raquo; ' . get_the_title();
    }
    // カテゴリページやアーカイブページの場合
    elseif (is_category() || is_archive()) {
        echo ' &raquo; ブログ &raquo; ' . single_cat_title('', false);
    }
    // 固定ページの場合
    elseif (is_page()) {
        echo ' &raquo; ' . get_the_title();
    }
    // その他（404ページなど）
    elseif (is_404()) {
        echo ' &raquo; 404 Not Found';
    }

    echo '</nav>';
}
