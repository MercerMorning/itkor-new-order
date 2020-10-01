<?php
/*
Template Name: Шаблон для страниц раздела "Дополнительное профессиональное образование"
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
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>


