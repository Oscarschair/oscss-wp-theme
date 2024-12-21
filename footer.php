    <footer class="l-footer">
        <div class="l-footer__wrapper">
            <nav class="p-footer__nav-menu">
                <div class="p-footer__nav-link__left">
                    <a class="p-footer__logo" href="<?= home_url() ?>">
                        <div class="p-footer__logo__wrapper">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/svg/favicon-trans.svg"
                                    alt="OSCSS LOGO">
                            </picture>
                            <div>
                                <span>HELLOss HIROFUMI KURUMA</span>
                                <span>GA4コンサルタント</span>
                            </div>
                        </div>
                    </a>
                    <ul class="p-footer__nav-sns">
                        <li class="p-footer__nav-sns__item">
                            <a target="_blank" rel="noopener noreferrer" href="https://github.com/Oscarschair"
                                aria-label="Github">
                                <picture>
                                    <img src="<?= get_template_directory_uri() ?>/assets/svg/github.svg"
                                        alt="OSCSS LOGO">
                                </picture>
                            </a>
                        </li>
                        <li class="p-footer__nav-sns__item">
                            <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/ChairOscar"
                                aria-label="Twitter">
                                <picture>
                                    <img src="<?= get_template_directory_uri() ?>/assets/svg/x.svg" alt="OSCSS LOGO">
                                </picture>
                            </a>
                        </li>
                        <li class="p-footer__nav-sns__item">
                            <a target="_blank" rel="noopener noreferrer" href="https://www.chatwork.com/osc6133"
                                aria-label="Chatwork">
                                <picture>
                                    <img src="<?= get_template_directory_uri() ?>/assets/svg/chatwork.svg"
                                        alt="OSCSS LOGO">
                                </picture>
                            </a>
                        </li>
                    </ul>
                </div>
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