<?php get_header(); ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">
                >

            </td>

            <!-- Right column -->
            <td valign="top">

                <div class="MainTextBody">
                    <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->
                    <h4><font color="red">»</font> <?php
                        $category = get_the_category(get_the_ID());
                        $cat_id = get_cat_ID($category[0]->cat_name);
                        echo get_cat_name($cat_id); ?></h4>
                    <?php if(have_posts()) :
                        while (have_posts()):
                            the_post();
                            ?>
                            <font color="#990000"><?php the_date('j F Y'); ?> г.</font>&nbsp;&nbsp;&nbsp;&nbsp;
                            <br><a href="<?php the_permalink(); ?>" class="MainTextBodyLink"><?php the_title(); ?></a>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>