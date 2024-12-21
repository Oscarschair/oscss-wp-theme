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


    <div class="l-footer__wrapper">
        <nav class="p-footer__nav-menu">
            <div class="p-footer__nav-link__right">
                <ul class="p-footer__nav-menu__main">
                    <li class="p-footer__nav-menu__main__item">
                        <a href="https://stg.oscarchair.jp/profile/">プロフィール</a>
                    </li>
                    <li class="p-footer__nav-menu__main__item">
                        <a href="https://stg.oscarchair.jp/blog/">オスカーの学習帳</a>
                    </li>
                    <li class="p-footer__nav-menu__main__item">
                        <a href="https://stg.oscarchair.jp/contact/">お問い合わせ</a>
                    </li>
                    <li class="p-footer__nav-menu__main__item">
                        <a href="https://stg.oscarchair.jp/download/">ダウンロード</a>
                    </li>
                </ul>
                <ul class="p-footer__nav-menu__sub">
                    <li>
                        <a href="<?= home_url('/terms/') ?>">利用規約</a>
                    </li>
                    <li>
                        <a href="<?= home_url('/privacy-policy/') ?>">プライバシーポリシー</a>
                    </li>
                    <li>
                        <a href="<?= home_url('/accessibility-policy/') ?>">アクセシビリティ方針</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="p-copyright">
        <p>&copy; 2024 HIROFUMI KURUMA All rights reserved.</p>
    </div>


</footer>
<?php wp_footer(); ?>
</body>

</html>