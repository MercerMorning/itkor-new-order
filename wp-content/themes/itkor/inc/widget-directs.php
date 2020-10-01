<?php

class I_Widget_Direct extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Direct', 'Itkor - Текстовый виджет',
            [
                'name' => 'Itkor - Виджет с направлениями',
                'description' => 'Выводит направления обучения',
            ]
        );
    }

    public function widget($args, $instance)
    {
        //args- ключи переданные снаружи

        echo 123;
    }

}