<?php

class I_Widget_Contacts extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Contacts', 'Itkor - Виджет контактов',
            [
                'name' => 'Itkor - Виджет контактов',
                'description' => 'Выводит номер телефона и адрес',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('id-address'); ?>">
                Введите адрес:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-address'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('address')?>"
                    value="<?php echo $instance['address']; ?>"
                    class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-phone'); ?>">
                Введите номер телефона:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-phone'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('phone')?>"
                value="<?php echo $instance['phone']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-email'); ?>">
                Введите номер email:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-email'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('email')?>"
                    value="<?php echo $instance['email']; ?>"
                    class="widefat"
            >
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        $tel_text = $instance['phone'];
        $pattern = '/[^+0-9]/';
        $tel = preg_replace($pattern, '', $tel_text);
        ?>
        <td align="left" class="SmallText" style="padding-left: 25px; padding-top: 10px; padding-bottom: 10px;">
            &copy;
            <?php
            echo get_option( 'i_option_field_date' ),
            ' - ',
            current_time('Y'),
            ', '; ?>
            <?php echo $instance['address'];
            ?>
            <br>
            Тел.: <?php echo $instance['phone']; ?>
            <br>
            <a href="mailto:<?php echo $instance['email']; ?>" class="SmallLink" style="color: #7A7A7A;">
                office@itkor.ru
            </a>
            <a href="/sitemap/">Карта сайта</a>
        </td>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}