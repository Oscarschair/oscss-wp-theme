<?php

/**
 * Utility
 */


/**
 * デバッグ出力
 *
 * @param mixed $var
 * @param string $title
 * @param bool $entity
 * @return void
 * @noinspection PhpUnused
 */
// function pr(mixed $var = [], string $title = 'DATA', bool $entity = true): void
// {
//     $type = '';
//     if (!is_object($var) && !is_array($var)) {
//         $type = '&nbsp;(' . gettype($var) . ')';
//     }
//     $title = $title . $type;
//     $pr = print_r($var, true);
//     if ($entity) {
//         $pr = htmlspecialchars($pr);
//     }

//     echo '<pre style="font-size:100%; border:1px solid #000; padding:10px; margin:20px 10px; background-color:#eee; text-align:left;">' . "\n" . $title . "\n" . $pr . '</pre>' . "\n";
// }

/**
 * カスタムエラーログ
 *
 * @param string $message
 * @param string $tag
 * @return void
 * @noinspection PhpUnused
 */
// function custom_log(string $message, string $tag = 'DEBUG'): void
// {
//     $currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
//         . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//     $backtrace = debug_backtrace();
//     $file = $backtrace[0]['file'] ?? '不明なファイル';
//     $line = $backtrace[0]['line'] ?? '不明な行';

//     $pod = pods('custom_logs');

//     $pod->add([
//         'log_message' => $message,
//         'log_tag' => $tag,
//         'log_date' => current_time('mysql'),
//         'log_file' => $file,
//         'log_line' => $line,
//         'log_url' => $currentUrl,
//     ]);
// }

/**
 * 投稿にNEWラベルを表示するかの判定
 *
 * @param int $postId
 * @param int $days
 * @return bool
 */
function isNew(int $postId, int $days = 14): bool
{
    if (!get_post($postId)) {
        return false;
    }

    $postDate = get_post_time('Y-m-d', false, $postId);
    $today = current_time('Y-m-d');
    $dateDiff = (strtotime($today) - strtotime($postDate)) / (60 * 60 * 24);

    return $dateDiff <= $days;
}

/**
 * スラッグからタイトルを取得
 *
 * @param string $slug スラッグ（日本語の場合はエンコードしない）
 * @param string $postType 投稿タイプ（デフォルトは固定ページ）
 * @return string
 */
function getPostTitleBySlug(string $slug, string $postType = 'page'): string
{
    $post = get_page_by_path($slug, OBJECT, $postType);

    if (empty($post)) {
        return '';
    }

    return $post->post_title;
}

/**
 * ページネーションリンクを取得
 *
 * @param int $max_num_pages
 * @return array
 */
function get_paginate_links(int $max_num_pages): array
{
    $big = 999999999;
    $paginate_links = paginate_links([
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'total' => $max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
    ]);

    if (empty($paginate_links)) {
        return [];
    }

    return $paginate_links;
}

/**
 * 
 * @param int $url
 * @return string
 */
function fileExtension($url)
{
    $n = strrpos($url, '.');
    return ($n === false) ? '' : substr($url, $n + 1);
}
