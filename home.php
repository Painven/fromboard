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
                    <form class="calc-form">
                        <?php echo do_shortcode('[contact-form-7 id="3b0d340" title="Калькулятор доставки"]'); ?>
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
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 4,
                    'offset'      => 0,
                    'category'    => 3,
                    'orderby'     => 'ID',
                    'order'       => 'ASC'
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>

                <div class="sertificate_item">
                    <a data-lightbox="cert_group" href="<?php the_post_thumbnail_url(); ?>"><img
                            src="<?php the_post_thumbnail_url(); ?>" />
                    </a>
                    <p><?php the_title(); ?></p>
                </div>

                <?php } } wp_reset_postdata(); ?>
            </div>
            <div>
                <a class="sertificates-show-more-btn" id="show-more-certificates">Показать больше
                    документов</a>
                <div id="additional-sertificates-container">
                    <div class="sertificates_gallery">
                        <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 4,
                    'offset'      => 4,
                    'category'    => 3,
                    'orderby'     => 'ID',
                    'order'       => 'ASC'
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>

                        <div class="sertificate_item">
                            <a data-lightbox="cert_group" href="<?php the_post_thumbnail_url(); ?>"><img
                                    src="<?php the_post_thumbnail_url(); ?>" />
                            </a>
                            <p><?php the_title(); ?></p>
                        </div>

                        <?php } } wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content__reviews">
            <h2 class="section-title">Отзывы</h2>
            <div class="reviews reviews__slick">

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 4,
                    'offset'      => 0,
                    'category'    => 2,
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>

                <div class="reviews__item">
                    <div class="reviews__body">
                        <?php the_content(); ?>
                    </div>
                    <div class="reviews__footer">
                        <p class="reviews__author"><?php the_title(); ?></p>
                        <span class="quote-symbol"
                            style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/block-quotes.svg');"></span>
                    </div>
                </div>

                <?php } } wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="main-content__callback">
            <h2 class="section-title">Остались вопросы?</h2>
            <div class="callback_container">
                <form class="callback__questions">
                    <?php echo do_shortcode('[contact-form-7 id="a714b94" title="Остались вопросы?"]'); ?>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>