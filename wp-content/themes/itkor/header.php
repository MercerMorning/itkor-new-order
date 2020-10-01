<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <title>Институт ИТКОР: маркетинговые исследования, разработка бизнес-планов, консалтинг в логистике, обучение по-->
<!--        логистике</title>-->
<!--    <META NAME="keywords"-->
<!--          CONTENT="логистика, маркетинговые исследования рынка, консалтинг, менеджмент, маркетинг услуг, семинары, обучение, исследования, новости, складская логистика, стратегия, консалтинговые услуги, бизнес планирование, бизнес-план, бизнес план, инвестиционный проект, маркетинговый анализ, аналитические обзоры">-->
<!--    <META Name="Description"-->
<!--          content="Институт ИТКОР: маркетинговые исследования рынка, разработка бизнес-планов, консалтинг в логистике, обучение">-->
    <META http-equiv=Content-Type content="text/html; charset=<?php bloginfo( 'charset' );?>">
    <?php wp_head(); ?>
</head>
<body>
<style>
    html {
        margin: 0px!important;
    }
</style>
<!--<body onload="allClose()">-->
<body>

<div class="TopBack"></div>
<div class="TopTele">
    <?php
    if (is_active_sidebar('i-phone-header') ){
        dynamic_sidebar('i-phone-header');
    }
    ?>
</div>
<div class="Top_name">
    <a href="<?php home_url(); ?>">
        <img src="<?php echo _i_assets_path('img/itk_name.jpg'); ?>" width="401" height="89" alt="" border=0>
    </a>
</div>
<div class="Top_logo"><?php the_custom_logo(); ?></div>
<!--<div class="Top_lang"><img src="--><?php //echo _i_assets_path('img/itk_lang.jpg'); ?><!--" alt="" border=0 usemap="#map1"></div>-->
<map name="map1">
    <area alt="English version" coords="0,0,19,22">
</map>

<!-- Main-menu stuff -->
<?php
wp_nav_menu([
    'theme_location' => 'header-footer-menu',
    'container' => null,
    'menu_class' => 'main-navigation__list',
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'depth' => 1,
]);

## Вырезаем все LI нужного submenu и выводим их в своем UL блоке
//echo '2lev';
//$menu = wp_nav_menu( array(
//    'theme_location'  => 'menu',
//    'container'       => '',
//    'menu_class'      => 'sidebar',
//    'echo'            => 0,
//) );
//$regex_part = preg_quote('menu-item-has-children');
//// выведем подменю пункта "gotovye-resheniya"
//preg_match('~'. $regex_part .'.*sub-menu[^>]+>(.*?)</ul>~s', $menu, $mm );
//if( !empty($mm[1]) ) echo "<ul>$mm[1]</ul>";
//
//echo '1lev';
//$menu = wp_nav_menu( array(
//    'theme_location'  => 'menu',
//    'container'       => '',
//    'echo'            => 0,
//) );
//$regex_part = preg_quote('menu-item-has-children');
//// выведем подменю пункта "gotovye-resheniya"
//preg_match('~'. $regex_part .'.*sub-menu[^>]+>(.*?)</ul>~s', $menu, $mm );
//if( !empty($mm[1]) ) echo "<ul>$mm[1]</ul>";
?>
