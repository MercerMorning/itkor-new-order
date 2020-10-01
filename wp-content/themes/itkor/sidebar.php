<nav class="sub-cats">
<!--    --><?php
//    strpos($_SERVER['REQUEST_URI'], '/company');
//    ?>
<!--    <b class="SubMenuHeader">-->
<!--        --><?php
//            if (strpos($_SERVER['REQUEST_URI'], '/company')) {
//                echo get_the_title(13);
//            }
//        ?>
<!--    </b>-->
<!--    --><?php
//    $menu = wp_nav_menu( array(
//        'theme_location'  => 'menu',
//        'container'       => '',
//        'echo'            => 0,
//    ) );
//    $regex_part = preg_quote('menu-item-has-children');
//    // выведем подменю пункта "gotovye-resheniya"
//    preg_match('~'. $regex_part .'.*sub-menu[^>]+>(.*?)</ul>~s', $menu, $mm );
//    if( !empty($mm[1]) ) echo "<ul class='sidebar'>$mm[1]</ul>";
//    ?>
<!--    --><?php
//    wp_nav_menu([
//        'theme_location' => 'sidebar-company',
//        'container' => null,
//        'menu_class' => 'sidebar',
//        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
//        'depth' => 0,
//    ])
//    ?>

</nav>
