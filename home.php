<?php 
/*
Template Name: home

*/

?>

<?php get_header(); ?>
<main class="main">
    <div class="main-container">
        <div class="main-container__top">
            <div class="main-container__top-news">
                <p class="top-news-title">
                    Без проблемная доставка купленных вещей из США, Европы и Азии
                    в Россию
                </p>
                <p class="top-news-description">
                    Сэкономьте на покупках и наслаждайтесь мировыми брендами —
                    наш сервис позволяет вам легко и удобно заказывать товары
                    со всего мира и получать их в России
                </p>
                <div class="top-news-banner">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/main-banner.png" />
                </div>
            </div>
            <div class="main-content__top-calc">
                <div class="main-content__top-calc-container">
                    <h2>Калькулятор доставки</h2>
                    <p>
                        Посчитайте, сколько будет стоить перевозка <br />
                        покупки из зарубежа
                    </p>
                    <form class="calc-form" action="">
                        <input type="text" name="name" placeholder="Имя" />
                        <input type="text" name="email" placeholder="Почта" />
                        <input type="text" name="phone" placeholder="Телефон" />
                        <input type="text" name="area-m2" placeholder="Общая площадь, м²" />
                        <input type="text" name="weight-kg" placeholder="Вес, кг" />
                        <input type="text" name="customer-country" placeholder="Страна покупки" />
                        <input type="text" name="customer-city" placeholder="Город покупки" />
                        <input type="text" name="delivery-region" placeholder="Область доставки" />
                        <input type="text" name="delivery-city" placeholder="Город доставки" />
                        <button class="calc-form-submit" type="submit">
                            Заказать расчет
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-content__features">
            <h2 class="section-title">Наши преимущества</h2>
            <div class="features">
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-1.svg" />
                    </div>
                    <div>
                        <h4>Растоможка груза</h4>
                        <p>
                            Мы берём на себя все формальности и бумажную волокиту,
                            связанную с растаможкой груза
                        </p>
                    </div>
                </div>
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-2.svg" />
                    </div>
                    <div>
                        <h4>Надёжная упаковка</h4>
                        <p>
                            Все товары упаковываются нашими специалистами с особым
                            вниманием к деталям, гарантируя, что они дойдут
                            в безопасности и в отличном состоянии
                        </p>
                    </div>
                </div>
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-3.svg" />
                    </div>
                    <div>
                        <h4>Быстро и выгодно</h4>
                        <p>
                            Мы предлагаем быструю и выгодную доставку, чтобы вы могли
                            насладиться покупками как можно скорее.
                        </p>
                    </div>
                </div>
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-4.svg" />
                    </div>
                    <div>
                        <h4>Удобный сервис</h4>
                        <p>
                            Стремимся сделать процесс доставки максимально удобным для
                            вас, чтобы опыт остался приятным и беззаботным
                        </p>
                    </div>
                </div>
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-5.svg" />
                    </div>
                    <div>
                        <h4>Прозрачность работы</h4>
                        <p>
                            Мы предоставляем полный контроль над каждым этапом доставки,
                            от момента заказа до момента прибытия заказа
                        </p>
                    </div>
                </div>
                <div class="features__item">
                    <div class="img-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-6.svg" />
                    </div>
                    <div>
                        <h4>Страхование груза</h4>
                        <p>
                            Наше страхование обеспечивает полную защиту и покрытие почти
                            все неприятные и неожиданные ситуации
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content__sertificates">
            <h2 class="section-title">Гарантии качества</h2>
            <p>
                Наши гарантии качества включают в себя полный спектр документов,
                необходимых <br />
                для ввоза и вывоза товаров, а также для успешного бизнеса
                на мировом рынке. <br />
                Мы предоставляем вам надёжность и уверенность
            </p>
            <div class="sertificates_gallery">
                <div class="sertificate_item">
                    <a data-lightbox="cert_group"
                        href="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-1.png"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-1.png" /></a>
                    <p>Свидетельство о регистрации в РФ</p>
                </div>
                <div class="sertificate_item">
                    <a data-lightbox="cert_group"
                        href="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-2.png"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-2.png" /></a>
                    <p>Свидетельство о регистрации в США</p>
                </div>
                <div class="sertificate_item">
                    <a data-lightbox="cert_group"
                        href="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-3.png"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-3.png" /></a>
                    <p>Свидетельство о регистрации в Китае</p>
                </div>
                <div class="sertificate_item">
                    <a data-lightbox="cert_group"
                        href="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-4.png"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/sertificates/sert-4.png" /></a>
                    <p>Свидетельство о регистрации в Великобритании</p>
                </div>
            </div>
            <div>
                <a class="sertificates-show-more-btn" href="#">Показать больше документов</a>
            </div>
        </div>
        <div class="main-content__reviews">
            <h2 class="section-title">Отзывы</h2>
            <div class="reviews reviews__slick">
                <div class="reviews__item">
                    <div class="reviews__body">
                        <p class="reviews__text">
                            Я заказала последний iPhone из США через ваш сервис,
                            и доставка прошла быстро и без каких‑либо проблем. Гарантии
                            качества и надёжная упаковка сделали мой опыт покупки
                            невероятно позитивным
                        </p>
                    </div>
                    <div class="reviews__footer">
                        <p class="reviews__author">Анна</p>
                        <span class="quote-symbol"></span>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__body">
                        <p class="reviews__text">
                            Я заказала последний iPhone из США через ваш сервис,
                            и доставка прошла быстро и без каких‑либо проблем. Гарантии
                            качества и надёжная упаковка сделали мой опыт покупки
                            невероятно позитивным
                        </p>
                    </div>
                    <div class="reviews__footer">
                        <p class="reviews__author">Алексей</p>
                        <span class="quote-symbol"></span>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__body">
                        <p class="reviews__text">
                            Я заказала последний iPhone из США через ваш сервис,
                            и доставка прошла быстро и без каких‑либо проблем. Гарантии
                            качества и надёжная упаковка сделали мой опыт покупки
                            невероятно позитивным
                        </p>
                    </div>
                    <div class="reviews__footer">
                        <p class="reviews__author">Анна</p>
                        <span class="quote-symbol"></span>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__body">
                        <p class="reviews__text">
                            Я заказала последний iPhone из США через ваш сервис,
                            и доставка прошла быстро и без каких‑либо проблем. Гарантии
                            качества и надёжная упаковка сделали мой опыт покупки
                            невероятно позитивным
                        </p>
                    </div>
                    <div class="reviews__footer">
                        <p class="reviews__author">Алексей</p>
                        <span class="quote-symbol"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content__callback">
            <h2 class="section-title">Остались вопросы?</h2>
            <div class="callback_container">
                <form class="callback__questions" action="/">
                    <input type="text" name="callback_name" placeholder="Имя" />
                    <input type="text" name="callback_email" placeholder="Почта" />
                    <input type="text" name="callback_phone" placeholder="Телефон" />
                    <input type="text" name="callback_subject" placeholder="Тема вопроса" />
                    <textarea name="callback_message" placeholder="Сообщение"></textarea>
                    <button type="submit">Отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>