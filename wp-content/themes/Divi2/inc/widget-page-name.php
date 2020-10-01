<?php

class I_Widget_Page_Name extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Page_Name', 'Выводит имя страницы',
            [
                'name' => 'Inkor - Имя страницы',
                'description' => 'Выводит имя страницы',
            ]
        );
    }

    /*public function form( $instance )
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
    }*/

    public function widget($args, $instance)
    {
        //args- ключи переданные снаружи

        echo '<h4><font color="red">» </font>' .  get_the_title() . '</h4>';
    }

    /*
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }*/
}