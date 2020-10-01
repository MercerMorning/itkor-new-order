<?php

class I_Widget_Rubric_Name extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Rubric_Name', 'Выводит имя рубрики',
            [
                'name' => 'Inkor - Имя рубрики',
                'description' => 'Выводит имя рубрики',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('id-text'); ?>">
                Введите текст:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-text'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('text')?>"
                value="<?php echo $instance['text']; ?>"
                class="widefat"
            >
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        //args- ключи переданные снаружи

        echo '<h4><font color="red">» </font>' . $instance['text'] . '</h4>';
    }

    /*
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }*/
}





