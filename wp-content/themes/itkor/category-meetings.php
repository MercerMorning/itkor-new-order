<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('konferencii'); ?>

        </td>

        <!-- Right column -->
        <td valign="top">

            <div class="MainTextBody1"><br>
                <h4><font color="red">»</font>Архив мероприятий</h4><br>
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                        <p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
