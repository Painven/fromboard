<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header-container">
                <div class="header-top">
                    <div class="header-top-logo">
                        <?php the_custom_logo(); ?>
                        <p>FromBoard Delivery</p>
                    </div>
                    <div class="header-top-info">
                        <div class="header-add-info">
                            <p>Доставляем товары из-за границы в Россию</p>
                            <p>Стоимость от <span><?php the_field('minimum-order-price'); ?> </span> рублей за заказ</p>
                            <p>1 $ = 93 ₽ | 1 € = 99 ₽ | 1 ¥ = 13 ₽</p>
                        </div>
                        <div class="separator"></div>
                        <div class="header-phone-info">
                            <a class="phone-link"
                                href="tel:<?php the_field_numbers_only('phone-number'); ?>"><?php the_field('phone-number'); ?></a>
                            <p>Звонки по России бесплатны</p>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-bottom-menu">
                        <nav class="header-nav">
                            <ul class="main-menu">
                                <li><a href="#calc-section-start" class="active">Калькулятор</a></li>
                                <li><a href="#features-section-start">О нас</a></li>
                                <li><a href="#sertificates-section-start">Гарантии</a></li>
                                <li><a href="#reviews-section-start">Отзывы</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-bottom-call">
                        <a href="#" class="header-call-btn">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </header>