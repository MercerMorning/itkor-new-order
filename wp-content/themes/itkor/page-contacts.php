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
                    <h5><?php the_content(); ?></h5>
<?php if (is_active_sidebar('i-contacts-page-contacts') ) : ?>
    <table class="MainTextBody" width="80%" cellspacing="10" cellpadding="2" border="0" align="center">
        <tbody>
        <?php
        if (is_active_sidebar('i-contacts-page-contacts') ){
            dynamic_sidebar('i-contacts-page-contacts');
        }
        ?>
        <tr bgcolor="#d3d3d3"><td><b>Схема проезда</b></td></tr>
        <tr>
            <td align="center">
                <?php
                if (is_active_sidebar('i-map-page-contacts')) {
                    dynamic_sidebar('i-map-page-contacts');
                }
                ?>
            </td>
        </tr>
        </tbody></table>

    </div>
    </td>
    </tr>
    </table>
<?php endif; ?>
<?php get_footer(); ?>