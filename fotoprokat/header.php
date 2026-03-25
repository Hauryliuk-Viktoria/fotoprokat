<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotoprokat 24</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</head>
<body>



<header class="header">
    <div class="container desktop-header">
        <!-- Десктопная версия (скрывается на мобилках) -->
        <div class="logo">
            <a href="/">
                fotoprokat <span class="logo-number">24</span>
            </a>
        </div>

        <nav class="nav">
            <ul class="nav-list">
                <li><a href="#">КАТАЛОГ</a></li>
                <li><a href="#">О КОМПАНИИ</a></li>
                <li><a href="#">ПРАВИЛА</a></li>
                <li><a href="#">НОВОСТИ</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>
        </nav>

        <div class="header-icons">
            <div class="icon-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" alt="избранное" class="icon-img">
                <span class="icon-badge">3</span>
            </div>
            <div class="icon-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/compare.png" alt="каталог" class="icon-img">
                <span class="icon-badge">1</span>
            </div>
            <div class="icon-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shopping-cart.png" alt="корзина" class="icon-img">
                <span class="icon-badge">2</span>
            </div>
            <div class="icon-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.png" alt="поиск" class="icon-img">
            </div>
            <div class="icon-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/user.png" alt="кабинет" class="icon-img">
            </div>
        </div>
    </div>

    <!-- Мобильная версия (показывается только на мобилках) -->
    <div class="container mobile-header">
        <div class="mobile-left-icons">
            <div class="mobile-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" alt="избранное">
                <span class="mobile-badge"></span>
            </div>
            <div class="mobile-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/compare.png" alt="каталог">
                <span class="mobile-badge"></span>
            </div>
            <div class="mobile-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shopping-cart.png" alt="корзина">
                <span class="mobile-badge"></span>
            </div>
        </div>

        <div class="mobile-logo">FP<span class="logo-number">24</span></div>

        <div class="mobile-right-icons">
            <div class="mobile-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.png" alt="поиск">
            </div>
            <div class="mobile-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/lock.png" alt="lock">
            </div>
            <button class="mobile-burger" id="mobileBurger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- Мобильное меню (выпадающее) -->
    <div class="mobile-menu" id="mobileMenu">
        <nav class="mobile-nav">
            <ul class="mobile-nav-list">
                <li><a href="#">КАТАЛОГ</a></li>
                <li><a href="#">О КОМПАНИИ</a></li>
                <li><a href="#">ПРАВИЛА</a></li>
                <li><a href="#">НОВОСТИ</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>
        </nav>
    </div>
</header>