<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('mag'); ?>

        </td>

        <!-- Right column -->
        <td valign="top">

            <div class="MainTextBody"><br>
                <h4><font color="red">»</font> Изданные учебные пособия и монографии</h4>
                <div class="entry">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr>
                            <?php
                            $areas = get_terms([
                                'taxonomy' => 'publish_year',
                                'order' => 'ASC',
                                'orderby' => 'slug',
                            ]);
                            ?>
                            <?php foreach ($areas as $area): ?>
                                <td style="background-color: #F3F3F3;">
                                <td width="200"><h3 style="text-align: center;" align="center"><a href="<?php echo get_category_link($area->term_id); ?>"><?php echo $area->name?></a></h3>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                        </tbody></table>
                    <table width="90%" cellspacing="2" cellpadding="12" border="0">
                        <tbody>
                        <?php if (have_posts()):
                            $i = 1;
                            while (have_posts()) :
                                the_post();
                                ?>
                                <tr>
                                <tr>
                                    <?php if ($i > 1): ?>
                                        <td>
                                            <hr>
                                        </td>
                                    <?php
                                    endif;
                                    $i++
                                    ?>
                                <tr>

                                    <td width="200">
                                        <img src="<?php echo get_field('lit_image')['url']; ?>" alt="<?php echo get_field('lit_image')['alt']; ?>" title="adamov_na" width="207" height="290">
                                        <br><br>
                                        <?php if (get_field('journal_ogl')) :?>
                                            [<a href="<?php echo get_field('journal_ogl')['url']; ?>">Оглавление</a>]
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (get_the_title()): ?>
                                            <h3 style="text-align: center;"><?php the_title(); ?></h3>
                                        <?php endif; ?>
                                        <?php if (get_field('under_red')): ?>
                                            <?php echo get_field('under_red'); ?>
                                        <?php endif; ?>
                                        <?php if (get_the_content()): ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>
                                    </td>

                                </tr>
                            <?php
                            endwhile;
                        endif;
                        ?>
                        </tr></tbody></table>
                </div>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
