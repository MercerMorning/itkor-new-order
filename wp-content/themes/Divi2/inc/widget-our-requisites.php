<?php

class I_Widget_Our_Requisites extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Our_Requisites', 'Itkor - Виджет с реквизитами',
            [
                'name' => 'Itkor - Виджет с реквизитами',
                'description' => 'Выводит реквизиты',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('id-INN'); ?>">
                Введите ИНН:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-INN'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('INN')?>"
                value="<?php echo $instance['INN']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-KPP'); ?>">
                Введите КПП:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-KPP'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('KPP')?>"
                value="<?php echo $instance['KPP']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-RS'); ?>">
                Введите р/с:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-RS'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('RS')?>"
                value="<?php echo $instance['RS']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-BANK-NAME'); ?>">
                Введите имя банка:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-BANK-NAME'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('BANK-NAME')?>"
                value="<?php echo $instance['BANK-NAME']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-KS'); ?>">
                Введите к/с:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-KS'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('KS')?>"
                value="<?php echo $instance['KS']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-BIC'); ?>">
                Введите БИК:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-BIC'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('BIC')?>"
                value="<?php echo $instance['BIC']; ?>"
                class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-OGRN'); ?>">
                Введите ОГРН:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-OGRN'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('OGRN')?>"
                value="<?php echo $instance['OGRN']; ?>"
                class="widefat"
            >
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        //args- ключи переданные снаружи
?>
        <b>Наши реквизиты</b>
        <br>
        <br>
        <b>ИНН</b> <?php echo $instance['INN']; ?>
        <br>
        <b>КПП</b> <?php echo $instance['KPP']; ?>
        <br>
        <b>р/c</b> <?php echo $instance['RS']; ?>
        <br>
        <?php echo $instance['BANK-NAME']; ?>
        <br>
        <b>к/c</b> <?php echo $instance['KS']; ?>
        <br>
        <b>БИК </b> <?php echo $instance['BIC']; ?>
        <br>
        <b>БИК </b> <?php echo $instance['OGRN']; ?>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}