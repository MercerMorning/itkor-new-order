<?php get_header(); ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">
                <!-- *******   Left column   ******* -->
                <?php get_sidebar('marketing'); ?>

            </td>

            <!-- Right column -->
            <td valign="top">
                <div class="MainTextBody1"><br>
                    <h4><font color="red">»</font><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <?php $page_obj = get_page_by_title('Форма заявки на маркетинговое исследование'); ?>
                    <a href="/<?php echo get_page_uri($page_obj); ?>"><h5>Заказать маркетинговое исследование</h5></a>
                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>