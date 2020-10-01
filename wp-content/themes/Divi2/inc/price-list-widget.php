<?php

class I_Widget_Price_List extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Price_List', 'Inkor - Виджет с прайс листом',
            [
                'name' => 'Inkor - Виджет с прайс листом',
                'description' => 'Выводит прайс-лист готовых маркетинговых исследований',
            ]
        );
    }

    public function widget($args, $instance)
    {
        $areas = get_term_children(33, 'category');
        ?>
        <table class="MainTextBody" width="90%" cellspacing="4" cellpadding="8" border="0">
            <tbody>
            <tr valign="top">
                <?php
                $i = 1;
                foreach ($areas as $area):
                    $area = get_category($area);
                    ?>
                    <?php if ($i == 1 || $i % 10 == 0): ?>
                    <td style="background-color: #F3F3F3;">
                <?php endif; ?>
                    <a href="#<?php echo $area->term_id; ?>"><?php echo $area->name; ?></a><br><br>
                    <?php if ($i % 10 == 0): ?>
                    </td>
                <?php endif; ?>
                    <?php
                    $i ++;
                endforeach; ?>
            </tr>
            </tbody>
        </table>
        <?php foreach ($areas as $area):
        $area = get_category($area);
        ?>
        <a name="<?php echo $area->term_id; ?>">
            <div style="padding-left: 20px;"><h5><?php echo $area->name; ?></h5></div>
        </a>
        <table class="MainTextBody" width="90%" cellspacing="0" cellpadding="5" border="1">
            <tbody>
            <tr bgcolor="#FFF0D9" align="center">
                <td><b>№</b></td>
                <td><b>Название</b></td>
                <td><b>Дата выхода</b></td>
                <td><b>Описание</b></td>
                <td><b>Цена</b><br>руб.</td>
                <td>Заказ</td>
            </tr>
            <?php
            $actions = new WP_Query([
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => [ $area->slug ]
                    ]
                ]
            ]);
            if ($actions->have_posts()) :
                $i = 1;
                while ($actions->have_posts()) :
                    $actions->the_post();
                    ?>
                    <tr align="center">
                        <td><?php echo $i; ?>.</td>
                        <td align="left"><span style="color: red; font-size: 11px;"><!-- <b>New!</b><br> --></span><?php the_title(); ?></td>
                        <td></td>
                        <td><a href="<?php echo get_field('research_description')['url']; ?>" download>Скачать файл</a></td>
                        <!-- <td><a href=/marketing/describe/?num=286><img src=/marketing/descr.jpg border=0 alt='Описание исследования'></a></td> -->
                        <td><?php echo get_field('research_price'); ?></td>
                        <td><a href="<?php the_permalink();?>" class="MainTextBodyLink">Заказать</a></td>
                    </tr>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
            </tbody>
        </table>
    <?php
    endforeach;
        ?>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}