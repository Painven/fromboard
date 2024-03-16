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
                        <img src="wp-content/themes/fromboard/assets/images/logo.svg " />
                        <p>FromBoard Delivery</p>
                    </div>
                    <div class="header-top-info">
                        <div class="header-add-info">
                            <p>Доставляем товары из-за границы в Россию</p>
                            <p>Стоимость от 550 рублей за заказ</p>
                            <p>1 $ = 93 ₽ | 1 € = 99 ₽ | 1 ¥ = 13 ₽</p>
                        </div>
                        <div class="separator"></div>
                        <div class="header-phone-info">
                            <a class="phone-link" href="tel:+78001234567">+7 (800) 123 45-67</a>
                            <p>Звонки по России бесплатны</p>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-bottom-menu">
                        <nav class="header-nav">
                            <ul class="main-menu">
                                <li><a href="#" class="active">Калькулятор</a></li>
                                <li><a href="#">О нас</a></li>
                                <li><a href="#">Гарантии</a></li>
                                <li><a href="#">Отзывы</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-bottom-call">
                        <a href="#" class="header-call-btn">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </header>