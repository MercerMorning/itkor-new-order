<?php
/*
Template Name: Шаблон для страниц раздела "Бизнес" с кнопкой заказа
 */

get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <?php get_sidebar('business'); ?>
        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody">
                <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->
                <h4><font color="red">»</font> <?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
        </td>
        <td valign="center" align="center">
            <a href="<?php echo get_page_link(260); ?>" class="MainTextBodyLink"><b>Форма заказа.</b></a><br><br>
            <a href="<?php echo get_page_link(260); ?>"><?php echo get_the_post_thumbnail(260, 'medium'); ?></a>
            <!-- <img src="/business/img/bp_p1.jpg" width="150" height="114" border="0" alt="Разработка бизнес-планов и ТЭО">-->
        </td>
    </tr>
</table>
<?php get_footer(); ?>




