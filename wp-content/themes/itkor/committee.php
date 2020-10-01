<?php
/*
Template Name: Шаблон для страницы "Совет директоров"
 */

get_header();
?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('company'); ?>
        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody" align="left"><br>
                <h4 align="left"><font color="red">»</font> <?php the_title(); ?></h4>


                <table cellspacing="4" cellpadding="4" border="0">
                    <tbody>
                    <?php
                    $query = new WP_Query([
                        'numberposts' => -1,
                        'post_type' => 'structure',
//                        'meta_key' => 'club_order',
//                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    ]);
                    $cards = $query->posts;
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ):
                            $query->the_post();
                            ?>
                            <tr>
                                <td>
                                    <?php if (get_field('image')['url']) :?>
                                        <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>" width="163" height="245" border="0">
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?php the_permalink(); ?>"><?php the_field('short_inf'); ?></a></td>
                            </tr>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
