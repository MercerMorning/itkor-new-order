<?php
/*
Template Name: Шаблон для заявки на маркетинговое исследование
  */
get_header(); ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">
                <!-- *******   Left column   ******* -->
                <?php get_sidebar('marketing'); ?>

            </td>

            <!-- Right column -->
            <td valign="top">
                <div class="MainTextBody"><br>


                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>