<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div class="footer_logo">
                <div>
                    <img src="wp-content/themes/fromboard/assets/images/logo.svg" />
                    <p class="footer__shopname">FromBoard Delivery</p>
                </div>
                <p class="footer__copyrights">
                    2024 © Ни одно право не защищено, копируйте сколько влезет
                </p>
            </div>
            <div class="footer__menu">
                <nav>
                    <ul>
                        <li><a href="#calc-section-start">Калькулятор</a></li>
                        <li><a href="#features-section-start">О нас</a></li>
                        <li><a href="#sertificates-section-start">Гарантии</a></li>
                        <li><a href="#reviews-section-start">Отзывы</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__phone">
                <p><a
                        href="tel:<?php the_field_numbers_only('phone-number'); ?>"><?php the_field('phone-number'); ?></a>
                </p>
                <p>Звонки по России бесплатны</p>
            </div>
        </div>
        <div class="footer__bottom">
            <div>
                <p>
                    НЕ ЯВЛЯЕТСЯ ПУБЛИЧНОЙ ОФЕРТОЙ. Просим обратить внимание на то,
                    что цены носят информационный и ознакомительный характер,
                    а значит ни в какой мере не являются публичной офертой, которая
                    определена в ст. 437 ГК РФ. Вся информация на сайте может
                    содержать неточности, орфографические и иные ошибки,
                    она не является полной, окончательно и исчерпывающей
                </p>
            </div>
            <div>
                <p>
                    Разработкой макета занимался Смирнов Дмитрий | painven@gmail.com
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>

<?php wp_footer(); ?>

</html>