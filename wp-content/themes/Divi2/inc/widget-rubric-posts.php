<?php

class I_Widget_Rubric_Post extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Rubric_Post', 'Itkor - Виджет, выводящий посты рубрики',
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
        $category_description = category_description($instance['rub']);
        $category_name = $category->name;
        $category_id = $instance['rub'];
    ?>
        <div class="MainTextBody"><br>
            <h4><font color="red">»</font> <?php echo $category_name; ?></h4>



            <a name="#p1"></a>
            <b><?php echo $category_description; ?></b>
            <br><br>


            <table width="100%" align="center">
                <tbody><tr valign="top">
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
                            <td align="center" width="25%"><?php the_post_thumbnail(); ?>
                                <a href="<?php the_permalink(); ?>"><br><?php the_title(); ?></a>
                            </td>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </tr>
                </tbody></table>
        </div>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}