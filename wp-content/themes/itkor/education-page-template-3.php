<?php
/*
Template Name: Шаблон для страниц раздела "Дополнительное профессиональное образование" 2 с кнопкой "Подать заявку на обучение"
 */

get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <?php get_sidebar('education'); ?>
        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody">
                <br>
                <?php get_sidebar('education-form'); ?>
                <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->
                <h4><font color="red">»</font> <?php the_title(); ?></h4>
                <?php the_content(); ?>
                <a href="<?php echo get_page_link(315); ?>"><?php echo get_the_post_thumbnail(315, 'medium'); ?></a>
            </div>
        </td>
    </tr>
</table>
<div style="position:fixed; top:400px; right:0;">
    <a href="<?php echo get_page_link(310); ?>">
        <?php echo get_the_post_thumbnail(310); ?>
    </a>
</div>
<?php get_footer(); ?>
