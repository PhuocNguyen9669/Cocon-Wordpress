<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="container">
        <!-- Header Start -->
        <header>
            <div class="header-top">
                <img src="<?php themeUrl(); ?>/assets/img/bg_headfoot.png" alt="">
                <p class="title-header">サイトの説明など。〇〇情報ならCocon(ココン)</p>
            </div>
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo-header" src="<?php themeUrl(); ?>/assets/img/logo.png" alt="">
                </a>
            </div>
            <input id="toggle" type="checkbox"></input>
            <label for="toggle" class="hamburger">
                <div class="top-bun"></div>
                <div class="meat"></div>
                <div class="bottom-bun"></div>
            </label>
            <div class="nav">
                <div class="nav-wrapper content-area">
                    <nav>
                        <ul class="inner">
                            <li class="item-sidebar">
                                <a href="<?php echo get_category_link(get_cat_ID('学び')); ?>">
                                    <img src="<?php themeUrl(); ?>/assets/img/menuicon_1.png" alt="">
                                    <p class="item-add">学び</p>
                                </a>
                            </li>
                            <li class="item-sidebar">
                                <a href="<?php echo get_category_link(get_cat_ID('子育て')); ?>">
                                    <img src="<?php themeUrl(); ?>/assets/img/menuicon_2.png" alt="">
                                    <p class="item-add">子育て</p>
                                </a>
                            </li>
                            <li class="item-sidebar">
                                <a href="<?php echo get_category_link(get_cat_ID('支援・イベント')); ?>">
                                    <img src="<?php themeUrl(); ?>/assets/img/menuicon_3.png" alt="">
                                    <p class="item-add">支援・イベント</p>
                                </a>
                            </li>
                            <li class="item-sidebar">
                                <a href="<?php echo get_category_link(get_cat_ID('メディア')); ?>">
                                    <img src="<?php themeUrl(); ?>/assets/img/menuicon_4.png" alt="">
                                    <p class="item-add">メディア</p>
                                </a>
                            </li>
                            <li class="item-sidebar">
                                <a href="<?php echo get_category_link(get_cat_ID('不登校')); ?>">
                                    <img src="<?php themeUrl(); ?>/assets/img/menuicon_5.png" alt="">
                                    <p class="item-add">不登校</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End Header -->