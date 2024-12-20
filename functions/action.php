<?php

/**
 * Action
 */


// メニュー位置を登録
function register_theme_menus()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu', // 既存のヘッダーメニュー
        'footer_menu' => 'Footer Menu', // フッターメニューを追加
    ));
}
add_action('init', 'register_theme_menus');

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

    // slick.cssはカルーセル
    // wp_enqueue_style('slick-css', $template_directory_uri . '/assets/libraries/slick/css/slick.css', [], '1.8.0');
    // wp_enqueue_style('slick-theme', $template_directory_uri . '/assets/libraries/slick/css/slick-theme.css', [], '1.8.0');
    wp_enqueue_style('materialize-css', $template_directory_uri . '/assets/css/materialize.min.css', [], '1.0.0');
    wp_enqueue_style('app-css', $template_directory_uri . '/assets/css/app.css', [], time());

    wp_enqueue_script('jquery-js', $template_directory_uri . '/assets/js/jquery.min.js', [], '3.7.1', true);
    // wp_enqueue_script('slick-js', $template_directory_uri . '/assets/libraries/slick/js/slick.min.js', ['jquery'], '1.8.0', true);
    // wp_enqueue_script('jquery-migrate-js', $template_directory_uri . '/assets/js/jquery-migrate.min.js', [], '3.4.1', true);
    wp_enqueue_script('materialize-js', $template_directory_uri . '/assets/js/materialize.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('scripts-js', $template_directory_uri . '/assets/js/app.js', [], time(), true);
});


// add_action('oscss_banner', function () {
//     global $post;
//     $data = [];

//     // pages with image as banner background
//     $pages = [
//         'home',
//         'service',
//         'blog',
//         'contact'
//     ];

// $data
// white-text: テキストを白色にするフラグ（スタイル制御用）。
// heading-v2: 見出しのバージョン（例: カスタムスタイル用）。

// home
// if (is_page('home')) {
//     $data['banner-bg'] = 'home-bg.jpg';
//     $data['white-text'] = 1;
// }

// service
// if (is_page('service')) {
//     $data['banner-bg'] = 'service-bg.webp';
// }

// check if page with image as banner; otherwise use default
//     if (is_page($pages)) {
//         get_template_part('parts/banner', 'image', $data);
//     } else {
//         get_template_part('parts/banner', 'default');
//     }
// });