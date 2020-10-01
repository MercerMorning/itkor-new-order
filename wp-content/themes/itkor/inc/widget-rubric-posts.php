<?php

class I_Widget_Rubric_Post extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Rubric_Post', 'Itkor - Текстовый виджет',
            [
                'name' => 'Itkor - Виджет с выбором рубрики постов, которые будут отображаться',
                'description' => 'Выводит посты рубрики',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <?php
            $areas = get_categories( [
                'taxonomy'     => 'category',
                'type'         => 'post',
            ] );
            ?>
            <select
                    id="<?php echo $this->get_field_id('id-rub'); ?>"
                    name="<?php echo $this->get_field_name('rub')?>"
                    class="widefat"
            >
                <option disabled>Выберите рубрику</option>
                <?php
                foreach ($areas as $area) :
                    ?>
                    <option
                            value="<?php echo $area->term_id; ?>"
                        <?php selected( $instance['rub'], $area->term_id, true); ?>
                    >
                        <?php echo $area->name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        $category = get_category($instance['rub']);
        $category_name = $category->name;
        $category_id = $instance['rub'];
    ?>
        <div>
            <span class="MainTitle"><a href="<?php echo get_term_link(intval($category_id)); ?>" style="color: white;"><?php echo $category_name; ?></a>
            </span>
        </div>
        <div class=MainTextBody1><br>
            <table cellspacing=10 cellpadding=2 border=0 class=MainTextBody1 bgcolor='#F3F3F3'
                   width='100%'>
                <tr valign=top>
                    <?php
                    $query = new WP_Query([
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                        'category_name' => $category->slug,
                        'order' => 'ASC',
                    ]);
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ):
                            $query->the_post();
                            ?>
                            <td width='50%'><?php the_date('j F'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                <br>
                                <a href="<?php the_permalink(); ?>" class=MainTextLink>
                                    <?php the_title(); ?>
                                </a>
                            </td>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </tr>
            </table>
            <br></div>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}