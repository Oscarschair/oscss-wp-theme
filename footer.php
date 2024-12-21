<?php

/**
 * Footer Template
 */
?>
<footer class="footer">
    <div class="container footer__container">
        <div class="footer__left">
            <a href="<?= home_url() ?>" class="brand-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/svg/favicon-trans.svg" alt="OSCSS LOGO"
                    style="height: 56px; vertical-align: middle;">
            </a>
            <div class="footer__site-title">
                <span class="footer__site-title--main">HIROFUMI KURUMA</span>
                <span class="footer__site-title--sub">GA4コンサルタント</span>
            </div>
        </div>
        <div class="footer__right">
            <ul class="footer__sns-list">
                <li class="footer__sns-item">
                    <a href="https://www.facebook.com" class="footer__sns-link" target="_blank"
                        rel="noopener noreferrer">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/facebook.svg" alt="Facebook"
                            class="footer__sns-icon">
                    </a>
                </li>
                <li class="footer__sns-item">
                    <a href="https://www.twitter.com" class="footer__sns-link" target="_blank"
                        rel="noopener noreferrer">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/twitter.svg" alt="Twitter"
                            class="footer__sns-icon">
                    </a>
                </li>
                <li class="footer__sns-item">
                    <a href="https://www.linkedin.com" class="footer__sns-link" target="_blank"
                        rel="noopener noreferrer">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/linkedin.svg" alt="LinkedIn"
                            class="footer__sns-icon">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom-left">
            <p class="footer__copyright">&copy; <?= date('Y') ?> HIROFUMI KURUMA. All Rights Reserved.</p>
        </div>
        <div class="footer__bottom-right">
            <ul class="footer__links">
                <li class="footer__link-item">
                    <a href="<?= home_url('/terms') ?>" class="footer__link">利用規約</a>
                </li>
                <li class="footer__link-item">
                    <a href="<?= home_url('/privacy-policy') ?>" class="footer__link">プライバシーポリシー</a>
                </li>
            </ul>
            <nav class="footer__menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container' => false,
                    'menu_class' => 'footer__menu-list',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</footer>