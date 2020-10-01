<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">
            <!-- *******   Left column   ******* -->
            <?php get_sidebar('marketing'); ?>

        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody">
                <font size="2"><b>Вы выбрали:</b></font>
                <table class="MainTextBody" width="360" cellspacing="5" cellpadding="5" border="0">
                    <tbody><tr align="center">
                        <td bgcolor="#d3d3d3"><b>Название</b></td>
                        <td bgcolor="#d3d3d3" align="center"><b>Цена</b> (руб.),<br><nobr> включая НДС</nobr></td>
                    </tr>
                    <tr>
                        <?php if (get_the_title()): ?>
                            <td><?php the_title(); ?></td>
                        <?php endif; ?>
                        <?php if (get_field('research_price')): ?>
                            <td align="center"><?php echo get_field('research_price'); ?></td>
                        <?php endif; ?>
                    </tr>
                    </tbody></table>
                <font size="2"><b>Форма заявки:</b></font>
                <form action="<?php echo admin_url('admin-post.php')?>" method="post">
                    Ф.И.О.:<br>
                    <input type="text" name="m_fio" size="50" required>
                    <br><br>
                    Организация:<br>
                    <input type="text" name="m_org" size="50" required>
                    <br><br>
                    Контактный телефон:<br>
                    <input type="text" name="m_phone" size="50" required>
                    <input type="hidden" name="tmp" value="Рынок услуг низкотемпературных складов Московского региона" size="150" required>
                    <br><br>
                    E-mail:<br>
                    <input type="text" name="m_email" size="50" required>
                    <br><br>
                    <input type="hidden" name="action" value="i-modal-form">
                    <input type="hidden" name="id_service" value="<?php echo $id ?>">
                    <button type="submit">Отослать</button>
                    <input type="Reset" value="Сбросить">
                </form>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>
