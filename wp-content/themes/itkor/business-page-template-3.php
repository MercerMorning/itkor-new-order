<?php
/*
Template Name: Шаблон для страниц раздела "Бизнес-> методики"
 */

get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <?php get_sidebar('business'); ?>
        </td>

        <!-- Right column -->
        <td valign="top">
            <table class="MainTextBody" cellspacing="5" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td>
                         <?php the_content(); ?>
                    </td>
                    <td>
                <?php the_post_thumbnail(); ?>
                </tbody></table>
        </td>
    </tr>
</table>
<?php get_footer(); ?>




