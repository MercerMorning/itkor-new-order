<?php get_header(); ?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr valign="top">
            <td width="302">
                <!-- *******   Left column   ******* -->
                <?php get_sidebar('company'); ?>
            </td>

            <!-- Right column -->
            <td valign="top">
                <div class="MainTextBody" align="left"><br>
                    <h4 align="left"><font color="red">»</font> Лицензии и аккредитации</h4>
                    <?php
                    $query = new WP_Query([
                        'numberposts' => -1,
                        'post_type' => 'licence',
                        'meta_key' => 'licence_type',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'licence',
                                'field'    => 'slug',
                                'terms'    => 'licence'
                            )
                        ),
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    ]);
                    $licencies = $query->posts;
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ):
                            $query->the_post();
                            ?>
                            <?php if (get_field('licence_inf')): ?>
                            <b><?php the_field('licence_inf'); ?></b>
                        <?php endif; ?>
                            <p style="text-align: left">

                                <?php if ( get_field('licence_img_1')['url']) :?>
                                    <a href="<?php echo get_field('licence_img_1')['url']; ?>">
                                        <img src="<?php echo get_field('licence_img_1')['url']; ?>" alt="<?php echo get_field('licence_img_1')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                                <?php if ( get_field('licence_img_2')['url']) :?>
                                    <a href="<?php echo get_field('licence_img_2')['url']; ?>">
                                        <img src="<?php echo get_field('licence_img_2')['url']; ?>" alt="<?php get_field('licence_img_2')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                                <?php if ( get_field('licence_img_3')['url']) :?>
                                    <a href="<?php echo get_field('licence_img_3')['url']; ?>">
                                        <img src="<?php echo get_field('licence_img_3')['url']; ?>" alt="<?php get_field('licence_img_2')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                                <?php if ( get_field('licence_img_4')['url']) :?>
                                    <a href="<?php echo get_field('licence_img_4')['url']; ?>">
                                        <img src="<?php echo get_field('licence_img_4')['url']; ?>" alt="<?php get_field('licence_img_2')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                            </p>
                            <?php if ( get_field('licence_attach')['url']) :?>
                            Приложение к Лицензии:
                            <table>
                                <tbody><tr>
                                    <td>
                                        <a href="<?php echo get_field('licence_attach')['url']; ?>"><img src="<?php echo get_field('licence_attach')['url']; ?>" alt="" width="99" height="140"></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        <?php endif;
                        endwhile;
                    endif;
                    ?>
                    <?php
                    $query = new WP_Query([
                        'numberposts' => -1,
                        'post_type' => 'licence',
                        'meta_key' => 'licence_type',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'licence',
                                'field'    => 'slug',
                                'terms'    => 'accreditation'
                            )
                        ),
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    ]);
                    $licencies = $query->posts;
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ):
                            $query->the_post();
                            ?>
                            <b><?php the_field('licence_inf'); ?></b>
                            <p style="text-align: left">
                                <?php if (get_field('licence_img_1')['url']) : ?>
                                    <a href="<?php echo get_field('licence_img_1')['url']; ?>">
                                        <img src="<?php echo get_field('licence_img_1')['url']; ?>" alt="<?php echo get_field('licence_img_1')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                                <?php if ( get_field('licence_img_2')['url']) :?>
                                    <a href="<?php echo get_field('licence_img_2')['url']; ?>?">
                                        <img src="<?php echo get_field('licence_img_2')['url']; ?>" alt="<?php get_field('licence_img_2')['alt']; ?>" width="99" height="140">
                                    </a>
                                <?php endif; ?>
                            </p>
                            <?php if ( get_field('licence_attach')['url']) :?>
                            Приложение к Лицензии:
                            <table>
                                <tbody><tr>
                                    <td>
                                        <a href=""><img src="<?php echo get_field('licence_attach')['url']; ?>" alt="" width="99" height="140"></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        <?php endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>