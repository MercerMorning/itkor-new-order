<?php get_header();
if (!is_home()) : ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">


            </td>

            <!-- Right column -->
            <td valign="top">
                <div class="MainTextBody">
                    <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->

                    <?php
                    if (have_posts()):
                        while (have_posts()) :
                            the_post();
                            ?>
                            <h4><font color="red">» <?php the_title(); ?></h4>
                            <h5>
                                <?php echo get_the_date('j F Y', $id); ?> года
                            </h5>
                            <br>
                            <br>
                            <?php
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </td>
        </tr>
    </table>
<?php
    else:?>

<!-- Main page stuff -->
<table cellspacing="0" cellpadding="0" border="0" width=100%>
    <tr valign="top">
        <td width=302>
            <!-- *******   Left column   ******* -->
            <!-- +++ Big Banners +++ -->

            <table width=302 cellspacing=0 cellpadding=1 border=0>
                <style type="text/css">
                    #bangen {
                        padding: 10px;
                    }

                    #genban {
                        margin-bottom: 5px;
                    }
                </style>

                </td>
                </tr>


                <tr height="10" bgcolor="#fff"></tr>

            </table>
            <!-- +++ Sub Bloks +++ -->


        </td>

        <!-- Right column -->
        <td valign="top" width=100%>

            <table cellspacing=0 cellpadding=0 border=0 width=100%>
                <tr>
                    <td height=5></td>
                </tr>
                <tr>
                    <?php the_content(); ?>
                </tr>
                <tr>
                    <td height=5></td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                        <div><span class="MainTitle"><a href="<?php echo get_term_link(7); ?>" style="color: white;">Новости компании</a></span>
                        </div>
                        <div class=MainTextBody1><br>
                            <table cellspacing=10 cellpadding=2 border=0 class=MainTextBody1 bgcolor='#F3F3F3'
                                   width='100%'>
                                <tr valign=top>
                                    <?php
                                    $query = new WP_Query([
                                        'numberposts' => -1,
                                        'post_type' => 'post',
                                        'category_name' => 'news',
                                        'order' => 'ASC',
                                    ]);
                                    $news = $query->posts;
                                    if ( $query->have_posts() ) :
                                        while ( $query->have_posts() ):
                                            $query->the_post();
                                            ?>
                                            <td width='50%'><?php the_date('j F'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <br>
                                                <a href="<?php the_permalink(); ?>" class=MainTextLink>Институт исследования
                                                    товародвижения и конъюнктуры оптового рынка выпустил очередной номер журнала
                                                    «РИСК: Ресурсы. Информация. Снабжение. Конкуренция».
                                                </a>
                                            </td>
                                        <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </tr>
                            </table>
                            <br></div>&nbsp;
                        <div><span class="MainTitle"><a href="<?php echo get_term_link(8); ?>" style="color: white;">Пресса о нас</a></span>
                        </div>
                        <div class=MainTextBody1><br>
                            <div style="padding-left: 15px;">
                                <?php
                                $query = new WP_Query([
                                    'numberposts' => -1,
                                    'post_type' => 'post',
                                    'category_name' => 'press',
                                    'order' => 'ASC',
                                ]);
                                $news = $query->posts;
                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ):
                                        $query->the_post();
                                        ?>
                                        <?php echo get_the_date('j F'); ?>
                                        <br>
                                        <?php the_content(); ?>
                                        <br>
                                        <br>
                                    <?php
                                    endwhile;
                                endif;
                                ?>

                        </div>&nbsp;
                        <div><span class="MainTitle"><a href="<?php echo get_term_link(9); ?>"
                                                        style="color: white;">Внешняя деятельность</a></span></div>
                        <div class=MainTextBody1><br>
                            <div style="padding-left: 15px;">
                                <?php
                                $query = new WP_Query([
                                    'numberposts' => -1,
                                    'post_type' => 'post',
                                    'category_name' => 'pr',
                                    'order' => 'ASC',
                                ]);
                                $news = $query->posts;
                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ):
                                        $query->the_post();
                                        ?>
                                        <?php echo get_the_date('j F'); ?>
                                        <br>
                                <a href="<?php the_permalink(); ?>" class=MainTextLink>
                                    <?php the_title(); ?>
                                </a>
                                        <br>
                                        <br>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
<!--                                21 июня-->
<!--                                <br>-->
<!--                                <a href=/pr/index.phtml?dt=1293 class=MainTextLink>Marschroute обработает заказы-->
<!--                                    Babadu-->
<!--                                </a>-->
<!--                                <br>-->
<!--                                <br>-->
<!--                                19 января-->
<!--                                <br><a href=/pr/index.phtml?dt=1292 class=MainTextLink>Компания Кюне + Нагель заключила-->
<!--                                    контракт с транснациональной компанией Carcano Antonio на 6 лет</a><br><br>18 января-->
<!--                                <br><a href=/pr/index.phtml?dt=1291 class=MainTextLink>«Экономика и управление —-->
<!--                                    2016»</a><br><br>15 декабря-->
<!--                                <br><a href=/pr/index.phtml?dt=1290 class=MainTextLink>Издательство "Инфра-Инженерия"-->
<!--                                    представляет новую книгу Миротина Л.Б., Покровского А.К., Лебедева Е.А. “Ресурсы-->
<!--                                    логистики в управлении транспортным предприятием”. </a><br><br>07 ноября-->
<!--                                <br><a href=/pr/index.phtml?dt=1280 class=MainTextLink>Jungheinrich открывает новый-->
<!--                                    склад запасных частей в Китае</a><br><br>07 ноября-->
<!--                                <br><a href=/pr/index.phtml?dt=1285 class=MainTextLink>Ричтрак с 40-летней историей и-->
<!--                                    передовые технологии для интралогистики – на стенде Jungheinrich на «InterFood-->
<!--                                    Siberia – 2016»</a><br><br>07 ноября-->
<!--                                <br><a href=/pr/index.phtml?dt=1289 class=MainTextLink>Юсси Куутса назначен новым-->
<!--                                    генеральным директором Itella в России</a><br><br></div>-->
                        </div>
                        <center></center>
                    </td>
                </tr>
                <tr>
                    <td>

                        <br>
                        <div><span class="MainTitle"><a href="/consulting/" style="color: white;">Услуги</a></span>
                        </div>
                        <div class=MainTextBody1><br>
                            <table cellspacing=8 cellpadding=2 border=0 class="MainTextBody1">
                                <tr valign="top">
                                    <td>
                                        <b><a href="/marketing/">Маркетинговые исследования</a></b>. Общий обзор и
                                        анализ рынка продукта, анализ ценовой конъюнктуры рынка, разработка
                                        маркетинговой стратегии предприятия, анализ конкурентов, анализ каналов сбыта.
                                        <br><br>
                                        Разработка программ импортозамещения, исследование конъюнктуры экспортных и
                                        импортных операций. <br><br>
                                        <b><a href="/consulting/">Операционный консалтинг</a></b>: аудит логистической
                                        системы, моделирование логистических бизнес-процессов, постановка логистики в
                                        компании, подготовка к проведению сертификации логистических систем и
                                        логистических цепей, сертификация логистических систем, разработка системы
                                        управления товародвижением, организация и проведение тендеров по закупке
                                        продукции/оказанию услуг. <br><br>
                                        <b>Организация системы материально-технического обеспечения (МТО)</b>
                                        предприятия. Технико-экономическое обоснование (ТЭО) проектов
                                        транспортно-логистической инфраструктуры: анализ объекта
                                        транспортно-логистической инфраструктуры, ТЭО проектов инфраструктурной
                                        обеспеченности транспортных коридоров, схемы размещения объектов и развития
                                        транспортно-логистической системы.
                                        Ситуационный анализ в регионах, субъектах РФ. <br><br>
                                        <b>Анализ отраслевых рынков товаров</b>. Анализ территориальной дифференциации
                                        цен по товарным рынкам. Анализ территориальной дифференциации стоимости труда по
                                        отраслям. Оптимизация системы снабжения специализированных грузов в пределах
                                        территории.
                                    </td>
                                    <td>
                                        <b>Разработка и оптимизация цепочек поставок</b>: оптимизация и разработка
                                        цепочки поставки товара в/через Россию из любой точки мира, маркетинговые
                                        исследования внешнеэкономических грузопотоков по выбранной товарной
                                        номенклатуре, включая трафик и организацию логистики, оценка эффективности
                                        внедрения новых проектов, ценовой анализ выбранного сегмента транспортного рынка
                                        (автомобильные, железнодорожные, морские перевозки, интермодальный сервис). <br><br>
                                        Готовые маркетинговые исследования логистических услуг. <br><br>
                                        <b><a href="/business/">Составление бизнес-планов и ТЭО</a></b>, разработка
                                        инвестиционных проектов<br><br>
                                        <b><a href="/mon/">Мониторинг рынка складской недвижимости</a></b>.
                                        <br><br>
                                        <b><a href="/tallage/">Налоги, право, финансы</a></b><br>
                                        Институт ИТКОР предлагает свои услуги в области налогового консультирования,
                                        сопровождения налоговых споров,
                                        а также организации и проведения семинаров по актуальным вопросам
                                        налогообложения.<br><br>
                                        Мы предлагаем комплекс юридических услуг, от консультирования до юридического
                                        сопровождения деятельности и обеспечения защиты прав и интересов в суде.<br><br>
                                        Институт ИТКОР предлагает полный спектр услуг в области <b>управления
                                            финансами</b>
                                        и повышения эффективности бизнеса. Финансовый консалтинг.
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>

                        <!-- News content -->


                    </td>
                </tr>

                <tr>
                    <td>
                        <div><span class="MainTitle" style="color: white;">Наши мероприятия</span></div>

                        <table cellspacing="15" cellpadding="2" border="0"></table>
                    </td>
                </tr>

            </table>
            <p></p>

            <span style="font-size: 10px; color: #909090; font-family: tahoma;">Реклама</span>
            <center>
                <div class="AdvDots">&nbsp;</div>

                <!--<H3><a href="http://www.kon-ferenc.ru/">Научные конференции</a>.</H3>-->

                <center>

                </center>
                <center></center>
                <div class="AdvDots">&nbsp;</div>


                <!-- <div class="AdvDots">&nbsp;</div> -->
            </center>

        </td>
    </tr>
</table>
<?php endif; ?>
<?php get_footer(); ?>