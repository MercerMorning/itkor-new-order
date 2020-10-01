<nav>
    <b class="SubMenuHeader"><?php echo wp_get_nav_menu_name('sidebar-consulting'); ?></b>
</nav>
<?php
wp_nav_menu([
    'theme_location' => 'sidebar-consulting',
    'container' => null,
    'menu_class' => 'sidebar',
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'depth' => 0,
])
?>

