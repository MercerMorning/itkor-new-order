<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->


        </td>

        <!-- Right column -->
        <td valign="top">

            <div class="MainTextBody"><br>
                <?php
                $areas = get_terms([
                    'taxonomy' => 'unit_type',
                    'order' => 'ASC',
                    'orderby' => 'slug',
                ]);

                foreach ($areas as $area):
                    $actions = new WP_Query([
                        'posts_per_page' => -1,
                        'post_type' => 'partners',
                        'unit_type' => $area->slug,
                        'order' => 'ASC',
                    ]);
                    ?>
                    <h4><font color="red">»</font> <?php echo $area->name; ?></h4>
                    <?php
                    if ($actions->have_posts()) :
                        while ($actions->have_posts()) :
                            $actions->the_post();
                            ?>
                        <?php if (get_field('site')) :?>
                            <a target="_blank" href="<?php echo get_field('site'); ?>">
                                <img src="<?php echo get_field('cl_image')['url']; ?>" alt="<?php echo get_field('cl_image')['alt']; ?>" width="150" border="1">
                            </a>
                        <?php else: ?>
                            <img src="<?php echo get_field('cl_image')['url']; ?>" alt="<?php echo get_field('cl_image')['alt']; ?>" width="150" border="1">
                        <?php endif; ?>
                        <?php
                        endwhile;
                    endif;
                endforeach;
                ?>

<!--                <h4><font color="red">»</font> Клиенты</h4>-->
<!--                <a target="_blank" href="http://lukoil.ru"><img src="/partners/img/lukoil.png" width="150" height="100" border="0"></a>-->
<!--                <a target="_blank" href="http://www.mitsubishi-motors.ru/"><img src="/partners/img/mitsubishi.png" width="150" height="100" border="0"></a>-->
<!--                <a target="_blank" href="http://www.univeg.com/en/"><img src="/partners/img/univeg.png" width="150" height="100" border="0"></a>-->
<!--                <a target="_blank" href="http://www.veb.ru"><img src="/partners/img/vneshekonom.png" width="150" height="100" border="0"></a>-->

            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
