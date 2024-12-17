<?php

/**
 * Filter
 */

/**
 * 抜粋文の長さ
 */
add_filter('excerpt_length', function ($length) {
    return 300;
}, 999);

/**
 * 抜粋文の末尾の文字列を指定
 */
add_filter('excerpt_more', function ($more) {
    return '...';
});

/**
 * ショートコードを許可
 */
add_filter('wp_kses_allowed_html', function ($tags, $context) {
    $tags['a'] = [
        'href' => true,
        'title' => true,
        'target' => true,
        'rel' => true,
    ];

    $tags['img'] = [
        'src' => true,
        'alt' => true,
        'width' => true,
        'height' => true,
        'class' => true,
        'loading' => true,
    ];

    $tags['div'] = [
        'class' => true,
        'id' => true,
        'style' => true,
    ];

    $tags['span'] = [
        'class' => true,
        'style' => true,
        'id' => true,
    ];

    $tags['p'] = [
        'class' => true,
        'style' => true,
    ];

    $tags['strong'] = [];
    $tags['em'] = [];
    $tags['b'] = [];
    $tags['i'] = [];
    $tags['u'] = [];

    $tags['ul'] = ['class' => true];
    $tags['ol'] = ['class' => true];
    $tags['li'] = ['class' => true];

    $tags['br'] = [];
    $tags['hr'] = ['class' => true];

    // iframe タグを許可
    $tags['iframe'] = [
        'src' => true,
        'width' => true,
        'height' => true,
        'frameborder' => true,
        'allowfullscreen' => true,
        'allow' => true,
    ];

    return $tags;
}, 10, 2);

/**
 * 管理画面のエディタ内でリアルタイムにショートコードを適用
 */
add_filter('the_editor_content', 'do_shortcode');

/**
 * ショートコードをなるべく確実に展開させる記述
 */
add_filter('the_content', 'do_shortcode', 11);

/**
 * 添付ファイルのURLに最終更新日時のタイムスタンプのクエリ文字を付与
 */
add_filter('wp_get_attachment_url', function ($url, $post_id) {
    $file_path = get_attached_file($post_id);
    if (file_exists($file_path)) {
        $timestamp = filemtime($file_path);
        $url = add_query_arg('v', $timestamp, $url);
    }
    return $url;
}, 10, 2);
