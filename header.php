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
    <header class="header">
        <div class="container header__container">
            <h1 class="header__left">
                <a href="<?= home_url() ?>" class="header__brand-logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/favicon-trans.svg" alt="OSCSS LOGO"
                        style="height: 56px; vertical-align: middle;">

                    <div class="header__site-title">
                        <span class="header__site-title--main">HIROFUMI KURUMA</span>
                        <span class="header__site-title--sub">GA4コンサルタント</span>
                    </div>
                </a>
            </h1>

            <div class="header__right">
                <button class="header__toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#top-navigation-bar-47865" aria-controls="#top-navigation-bar-47865"
                    aria-expanded="true" aria-label="トグルナビゲーション">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <nav class="header__menu collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'container' => false,
                        'menu_class' => 'header__menu-list',
                        'fallback_cb' => false,
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>