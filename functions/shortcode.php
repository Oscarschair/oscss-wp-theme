<?php

/**
 * Short code
 */

/**
 * ホームのURLを返却
 */
add_shortcode('home_url', function () {
    return home_url();
});

/**
 * uploadsのURLを返却
 */
add_shortcode('uploads_url', function () {
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'];
});

/**
 * テーマディレクトリのURLを返却
 * ※子テーマが存在する場合は子テーマのURLを返却
 */
add_shortcode('theme_url', function () {
    return get_stylesheet_directory_uri();
});

/**
 * 親テーマのURLを返却
 */
add_shortcode('parent_theme_url', function () {
    return get_template_directory_uri();
});
