<!-- Bottom stuff -->
<tr>
    <td colspan="2" bgcolor="E7E7E7" width=100% height=50>
        <?php
        wp_nav_menu([
            'theme_location' => 'header-footer-menu',
            'container' => null,
            'menu_class' => 'main-navigation__list bottom',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'depth' => 1,
        ])
        ?>
        <table cellspacing=0 cellpadding=0 border=0 width=100%>
            <tr bgcolor="white">
                <?php
                if (is_active_sidebar('i-contacts-footer') ){
                    dynamic_sidebar('i-contacts-footer');
                }
                ?>
                <td align="right">
                    <a href="https://www.yandex.ru/cy?base=0&amp;host=www.itkor.ru">
                        <img src="https://www.yandex.ru/cycounter?www.itkor.ru" alt="Яндекс цитирования" width="88" height="31" border="0">
                    </a>
<!--                    <a href="https://top.mail.ru/jump?from=825558" target="_top"><img src="https://top.list.ru/counter?id=825558;t=56;js=13;r=;j=false;s=1440*900;d=24;rand=0.4313924376113949" alt="Рейтинг@Mail.ru" width="88/" height="31" border="0"></a>-->
                    <a href="https://www.liveinternet.ru/click" target="_blank"><img src="https://counter.yadro.ru/hit?t17.6;r;s1440*900*24;uhttps%3A//www.itkor.ru/;0.4503821046343821" title="liveinternet.ru: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня" width="88" height="31" border="0"></a>
                </td>
            </tr>
        </table>
    </td>
    </td>
</tr>
</table>
</body>
</html>