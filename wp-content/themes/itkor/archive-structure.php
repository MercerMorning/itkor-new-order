<?php
/*
Template Name: Шаблон для страницы "Руководство"
*/

get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('company'); ?>

        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody" align="left"><br>
                <h4 align="left"><font color="red">»</font> Руководство</h4>


                <table cellspacing="4" cellpadding="4" border="0">

                    <tbody><tr>
                        <td colspan="2" style="color: white;" bgcolor="#4588EE">Руководство института ИТКОР</td>
                    </tr>
                    <?php
                    $query = new WP_Query([
                        'numberposts' => -1,
                        'post_type' => 'structure',
                        'meta_key' => 'position',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    ]);
                    $cards = $query->posts;
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ):
                                $query->the_post();
                            if (get_field('position')):
                                ?>
                                <tr>
                                    <td><img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>" border="0"></td>
                                    <td><a href="/company/structure/adamov/"></a><br><br>
                                        <a href="<?php the_permalink(); ?>"><?php the_field('short_inf'); ?></a>
                                        <br>
                                        <br>
                                        тел. <?php the_field('phone_number'); ?>
                                        <br>
                                        <br>
                                        <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                        endif;
                            endwhile;
                    endif;
                    ?>
                    </tbody></table>
            </div>

        </td>
    </tr>
</table>
<?php get_footer(); ?>
