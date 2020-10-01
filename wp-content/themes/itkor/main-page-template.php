<?php
/*
Template Name: Шаблон для главной страницы
 */
get_header(); ?>
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
                            <?php
                            if (is_active_sidebar('i-posts-page-main') ){
                                dynamic_sidebar('i-posts-page-main');
                            }
                            ?>
                    </tr>
                    <tr>
                        <td>

                            <br>
                            <?php
                            if (is_active_sidebar('i-services-page-main')) : ?>
                            <div><span class="MainTitle"><a href="/consulting/" style="color: white;">Услуги</a></span>
                            </div>
                            <div class=MainTextBody1><br>
                                <?php dynamic_sidebar('i-services-page-main'); ?>
                            </div>
                            <?php endif; ?>
                            <br>

                            <!-- News content -->


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
<?php get_footer(); ?>