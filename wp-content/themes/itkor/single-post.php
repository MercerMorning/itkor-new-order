<?php get_header(); ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">


            </td>

            <!-- Right column -->
            <td valign="top">
                <div class="MainTextBody">
                    <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->
                    <h4><font color="red">»</font> <?php
                        $category = get_the_category(get_the_ID());
                        $cat_id = get_cat_ID($category[0]->cat_name);
                        echo get_cat_name($cat_id); ?></h4>
                    <h5>
                        <?php the_title(); ?></h5><?php echo get_the_date('j F Y', $id); ?> года
                    <br>
                    <br>
                    <?php if (get_field('mag_page')): ?>
                        <p>
                            <a href="<?php echo get_field('mag_page'); ?>" target="_blank">Читайте в номере:</a>
                        </p>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>

