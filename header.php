<?php

/**
 * ナビのアクティブクラス出しわけ
 */
// $active = ' p-header__menu__item--active';
// $kouboActive = is_page(['koubo', 'fdo-koubo', 'players-koubo', 'fdo-koubo-contents']) || is_singular('fdo-koubo') ? $active : '';
// $learningActive = is_page(['learning', 'fdo', 'public', 'fdo-contents', 'public-contents', 'fdo-roadmap']) || is_singular('learning-contents') ? $active : '';
// $kyuminActive = is_page(['kyumin', 'outline', 'features', 'details', 'numbers', 'symbol']) ? $active : '';
// $faqActive = is_page(['faq', 'faq-search']) || is_singular('faq') ? $active : '';
?>
<!DOCTYPE html>
<html lang="ja-JP">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-xxxxxxxx');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
    $custom_css = get_field('custom_css');
    if (!empty($custom_css)):
    ?>
        <style>
            <?= esc_html($custom_css) ?>
        </style>
    <?php
    endif;
    ?>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxxxx" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="l-header">
        <div class="l-header__outer">
            <div class="l-header__inner">
                <a class="p-header__logo" href="<?= home_url() ?>">
                    <div class="p-header__logo__wrapper">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/svg/favicon-trans.svg"
                                alt="OSCSS LOGO">
                        </picture>
                        <h1>
                            <span>HIROFUMI KURUMA</span>
                            <span>GA4コンサルタント</span>
                        </h1>
                    </div>
                </a>
                <nav class="p-header__mobile-nav">
                    <a class="js-mobile-menu" href="#">
                        <img src="<?= get_template_directory_uri() ?>/assets/svg/menu-icon.svg" alt="Menu icon">メニュー
                    </a>
                </nav>
                <nav class="js-header-menu p-header__nav">
                    <div class="p-header__nav__wrapper">
                        <ul class="p-header__menu">
                            <li class="p-header__menu__item">
                                <a href="<?= esc_url(home_url('profile/')) ?>">プロフィール</a>
                            </li>
                            <li class="p-header__menu__item">
                                <a href="<?= esc_url(home_url('blog/')) ?>">オスカーの学習帳</a>
                            </li>
                            <li class="p-header__menu__item">
                                <a href="<?= esc_url(home_url('contact/')) ?>">お問い合わせ</a>
                            </li>
                            <li class="p-header__menu__item">
                                <a href="<?= esc_url(home_url('download/')) ?>">ダウンロード</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>