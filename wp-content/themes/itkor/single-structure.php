<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('company'); ?>

        </td>
        <td valign="top">
            <div class="MainTextBody" align="left"><br>
                <h4 align="left"><font color="red">»</font> Структура института ИТКОР</h4>

                <h2>Председатель cовета директоров ОАО "ИТКОР"</h2>

                <table cellspacing="4" cellpadding="4" border="0">
                    <tbody><tr align="left">
                        <td width="160"><img src="<?php echo get_field('image')['url']; ?>"></td>
                        <td><h3><?php the_title(); ?></h3> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php if (get_field('awards_list')):
                                echo get_field('awards_list');
                            endif; ?>
                            <br>
                            <br>
                            <?php if (get_field('education')): ?>
                                <b>Образование: </b><br>
                                <?php echo get_field('education'); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    </tbody></table>



            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
