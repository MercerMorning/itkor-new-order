<?php

get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <?php get_sidebar('education'); ?>
        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody">
                <br>
                <?php get_sidebar('education-form'); ?>
                <!-- <center><a href="http://www.itkor.ru/actions/ct_sem/"><img src="/ban/ct468x60.gif" border=0></a></center><br> -->
                <form action="<?php echo admin_url('admin-post.php')?>" method="post">
                    Ф.И.О.:<br>
                    <input type="text" name="m_fio" size="50" required>
                    <br>
                    email :<br>
                    <input type="text" name="m_email" size="50" required>
                    <br>
                    Ваш отзыв:
                    <br>
                    <textarea name="m_feedback"></textarea>
                    <input type="hidden" name="action" value="i-modal-form-feedback" required>
                    <br>
                    <br>
                    <input type="hidden" name="action" value="i-comment-form">
                    <button type="submit">Отослать</button>
                    <input type="Reset" value="Сбросить">
                </form>
            </div>
            <h4><font color="red">»</font> Отзывы участников</h4>
            <table cellspacing="4" cellpadding="4" border="0" class="MainTextBody1">
                <tbody>
                <?php
                $comments = new WP_Query([
                    'posts_per_page' => -1,
                    'post_type' => 'comments',
                    'meta_key' => 'is_good',
                    'meta_value' => 1,
                    'order' => 'ASC',
                ]);
                if ($comments->have_posts()) :
                    $i = 1;
                    while ($comments->have_posts()) :
                        $comments->the_post();
                        ?>
                        <tr><td bgcolor="#efefef"><a href="<?php the_permalink(); ?>"><b><?php the_excerpt(); ?><font color="red">(new!)</font></b></a></td><td></td></tr>
                        <tr><td></td></tr>
                    <?php
                    endwhile;
                endif;
                ?>
                </tbody>
            </table>
        </td>
    </tr>
</table>
<?php get_footer(); ?>


