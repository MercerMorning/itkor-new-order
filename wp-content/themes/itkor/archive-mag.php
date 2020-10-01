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
                <h4><font color="red">»</font> Журналы по логистике, маркетингу, менеджменту</h4>

                <br><br><br><br><br><br>
                <table class="MainTextBody1" width="90%" cellspacing="2" cellpadding="12" border="0">

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
                                </tr>
                                <td colspan="2">
                                <b>Журнал «<?php the_title(); ?>»</b>
                            <?php if (get_the_content()) : ?>
                            —
                            <?php
                            the_content();
                        endif;
                            ?>

                            </td>

                            </tr>

                            <tr>
                                <?php if (get_field('journal_image')['url']) : ?>
                                    <td width="200"><img src="<?php echo get_field('journal_image')['url']; ?>" border="0"></td>
                                <?php endif; ?>
                                <td><b>
                                        Журнал
                                        <?php if (get_field('journal_site')): ?>
                                            <a href="<?php echo get_field('journal_site'); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        <?php
                                        else:
                                            the_title();
                                        endif;
                                        ?>
                                    </b>
                                    <br><br>
                                    <?php if (get_field('journal_short_inf')) :?>
                                        <?php echo get_field('journal_short_inf'); ?>
                                    <?php endif; ?>
                                    <?php if (get_field('journal_ogl')) :?>
                                        <a href="<?php echo get_field('journal_ogl')['url']; ?>">Оглавление</a><br><br>
                                    <?php endif; ?>
                                    <?php if (get_field('journal_archive')) :?>
                                        <a href="<?php echo get_field('journal_archive'); ?>">Архив журнала</a><br><br>
                                    <?php endif; ?>
                                    <?php if (get_field('journal_subscribe')) :?>
                                        <a href="<?php echo get_field('journal_subscribe'); ?>">Подписка</a><br><br>
                                    <?php endif; ?>
                                    <?php if (get_field('journal_site')) :?>
                                        <a href="<?php echo get_field('journal_site'); ?>"><?php echo get_field('journal_site'); ?></a><br><br>
                                    <?php endif; ?>
                                    <br><br>
                                    <?php if (get_field('journal_phones') || get_field('journal_email_1') || get_field('journal_email_2')): ?>
                                        <b>Редакция:</b><br><br>
                                        <?php if (get_field('journal_phones')):
                                            $phones = explode(',', get_field('journal_phones'));
                                            echo 'Тел.:';
                                            foreach ($phones as $phone):?>
                                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                                <br>
                                                <?php
                                                ?>
                                            <?php
                                            endforeach;
                                        endif; ?>
                                        <br>
                                        <br>
                                        <?php if (get_field('journal_email')):
                                            $mails = explode(',', get_field('journal_email'));
                                            echo 'E-mail:';
                                            foreach ($mails as $mail):?>
                                                <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                                                <br>
                                                <?php
                                                ?>
                                            <?php
                                            endforeach;
                                        endif; ?>
                                        <br>
                                        <br>
                                    <?php endif; ?>
                                    <br>
                                </td>
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
