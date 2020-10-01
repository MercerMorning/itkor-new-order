<?php

class I_Widget_Company_Contacts extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Company_Contacts', 'Itkor - Виджет для заполнения контактов',
            [
                'name' => 'Itkor - Виджет для заполнения контактов',
                'description' => 'Выводит контакты',
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
            <label for="<?php echo $this->get_field_id('id-gen-cab'); ?>">
                Введите контакты применой генерального директора:
            </label>
            <textarea id="<?php echo $this->get_field_id('id-gen-cab'); ?>"
                      name="<?php echo $this->get_field_name('gen-cab')?>">
                <?php echo $instance['gen-cab']; ?>
            </textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-mar-con'); ?>">
                Контакты для обращения по вопросам маркетинговых исследований и консалтинга:
            </label>
            <textarea id="<?php echo $this->get_field_id('id-mar-con'); ?>"
                      name="<?php echo $this->get_field_name('mar-con')?>">
                <?php echo $instance['mar-con']; ?>
            </textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-education'); ?>">
                Введите контакты для обращения по вопросам образования:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-education'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('education')?>"
                    value="<?php echo $instance['education']; ?>"
                    class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-asp'); ?>">
                Введите контакты аспирантуры:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-asp'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('asp')?>"
                    value="<?php echo $instance['asp']; ?>"
                    class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-unity'); ?>">
                Введите контакты для обращения по вопросам партнерства и сотрудничества:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-unity'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('unity')?>"
                    value="<?php echo $instance['unity']; ?>"
                    class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-email-questions'); ?>">
                Введите email по общим вопросам:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-email-questions'); ?>"
                    type="text"
                    name="<?php echo $this->get_field_name('email-questions')?>"
                    value="<?php echo $instance['email-questions']; ?>"
                    class="widefat"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('id-email-map'); ?>">
                Выберите изображение с картой:
            </label>
            <input
                    id="<?php echo $this->get_field_id('id-email-map'); ?>"
                    type="file"
                    name="<?php echo $this->get_field_name('email-map')?>"
                    value="<?php echo $instance['email-map']; ?>"
            >
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        ?>
        <table cellspacing="10" cellpadding="2" border="0" width="80%" align="center" class="MainTextBody">

            <tr bgcolor="#d3d3d3">
                <td><b>Адрес</b></td>
            </tr>
            <tr>
                <td>
                    <?php echo $instance['address']; ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>Приемная генерального директора</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['gen-cab']); ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>Вопросы маркетинговых исследований и консалтинга</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['mar-con']); ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>Вопросы образования</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['education']); ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>Аспирантура</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['asp']); ?>
                </td>
            <tr bgcolor="#d3d3d3"><td><b>Вопросы партнерства и сотрудничества</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['unity']); ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>E-Mail по общим вопросам</b></td></tr>
            <tr>
                <td>
                    <?php echo apply_filters('i_widget_company_contacts', $instance['email-questions']); ?>
                </td>
            </tr>
            <tr bgcolor="#d3d3d3"><td><b>Схема проезда</b></td></tr>
            <tr>
                <td align="center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/itk_map.jpg" width="445" height="400">
                </td>
            </tr>
        </table>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}