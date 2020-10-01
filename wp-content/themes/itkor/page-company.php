<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('company'); ?>

        </td>

        <!-- Right column -->
        <td valign="top">

            <div class="MainTextBody"><br>
                <h4><font color="red">»</font> <?php the_title(); ?></h4>
                <?php the_content(); ?>

                <?php
                if (is_active_sidebar('i-our-requisites-company') ){
                    dynamic_sidebar('i-our-requisites-company');
                }
                ?>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
