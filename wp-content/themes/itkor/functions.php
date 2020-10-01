<?php

require_once( __DIR__ . '/inc/widget-text.php');
require_once( __DIR__ . '/inc/widget-contacts.php');
require_once( __DIR__ . '/inc/widget-our-requisites.php');
require_once( __DIR__ . '/inc/widget-company-contacts.php');
require_once( __DIR__ . '/inc/widget-rubric-posts.php');
require_once( __DIR__ . '/inc/widget-directs.php');

add_action('wp_enqueue_scripts', 'i_styles');
add_action('after_setup_theme', 'i_setup');
add_action('widgets_init', 'i_register');
add_action('admin_init', 'i_register_date');
add_action('init', 'i_register_types');
add_action('admin_post_nopriv_i-modal-form', 'i_modal_form_handler');
add_action('admin_post_i-modal-form', 'i_modal_form_handler');
add_action('admin_post_nopriv_i-comment-form', 'i_modal_comment_handler');
add_action('admin_post_i-comment-form', 'i_modal_comment_handler');


add_shortcode( 'i-paste-link', 'i_paste_link' );

add_filter('i_widget_company_contacts', 'do_shortcode');

function i_styles(){
    wp_enqueue_style(
        'i-style',
        _i_assets_path('styles/style.css'),
        [],
        '1.0',
        'all'
    );
}

function i_setup(){
    register_nav_menu( 'header-footer-menu', 'Меню в шапке и подвале сайта' );
    register_nav_menu( 'sidebar-company', 'Меню сайдбаре раздела "О компании"' );
    register_nav_menu( 'sidebar-marketing', 'Меню сайдбаре раздела "Маркетинговые исследования"' );
    register_nav_menu( 'sidebar-konferencii', 'Меню сайдбаре раздела "Конференции"' );
    register_nav_menu( 'sidebar-mag', 'Меню сайдбаре раздела "Издательская деятельность"' );
    register_nav_menu( 'sidebar-consulting', 'Меню сайдбаре раздела "Консалтинговая деятельность"' );
    register_nav_menu( 'sidebar-business', 'Меню сайдбаре раздела "Бизнес"' );
    register_nav_menu( 'sidebar-education', 'Меню сайдбаре раздела "Дополнительное профессиональное образование"' );

    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails');
}

function i_register(){
    register_sidebar([
        'name' => 'Номер телефона в шапке сайта',
        'id' => 'i-phone-header',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Контакты в подвале сайта',
        'id' => 'i-contacts-footer',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Наши реквизиты на странице "О компании"',
        'id' => 'i-our-requisites-company',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Контакты на странице "Контакты"',
        'id' => 'i-contacts-page-contacts',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Карта на странице "Контакты"',
        'id' => 'i-map-page-contacts',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Услуги на главной странице',
        'id' => 'i-services-page-main',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Записи на главной странице',
        'id' => 'i-posts-page-main',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Список направлений',
        'id' => 'i-list-directs',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_widget( 'I_Widget_Text' );
    register_widget( 'I_Widget_Contacts' );
    register_widget( 'I_Widget_Our_Requisites' );
    register_widget( 'I_Widget_Company_Contacts' );
    register_widget( 'I_Widget_Rubric_Post' );
    register_widget( 'I_Widget_Directs' );
}

function i_register_date(){
    add_settings_field(
        'i_option_field_date',
        'Год основания института: ',
        'i_option_field_date_cb',
        'general',
        'default',
        ['label_for' => 'i_option_field_date']
    );
    register_setting(
        'general',
        'i_option_field_date',
        'intval'
    );
}

function i_option_field_date_cb( $args ){
    $slug = $args['label_for'];
    ?>
    <input
        type="text"
        id="<?php echo $slug; ?>"
        value="<?php echo get_option( $slug ); ?>"
        name="<?php echo $slug; ?>"
        class="regular-text code"
    >
    <?php
}

function i_register_types(){

    function rewrite_rule_my(){
        add_rewrite_tag( '%pagetype%', '([^&]+)' );
        add_rewrite_rule( '^(parent/slug)/([^/]*)', 'index.php?pagename=$matches[1]&foo=$matches[2]', 'top' );
    }
    /**
     * Кастомные поля для раздела "О компании"
     */
    $page_obj = get_page_by_title('О компании');

    $post_type1 = 'structure';
    register_post_type( $post_type1, [
        'labels' => [
            'name'               => 'Структура компании', // основное название для типа записи
            'singular_name'      => 'Структура компании', // название для одной записи этого типа
            'add_new'            => 'Добавить нового сотрудника', // для добавления новой записи
            'add_new_item'       => 'Добавить нового сотрудника', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать сотрудника', // для редактирования типа записи
            'new_item'           => 'Новый сотрудник', // текст новой записи
            'view_item'          => 'Смотреть сотрудника', // для просмотра записи этого типа.
            'search_items'       => 'Искать сотрудника', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в совете директоров', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Структура компании', // название меню
        ],
        'public'              => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-groups',
        'hierarchical'        => true,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => [
                'slug' =>  get_page_uri($page_obj) ."/" . $post_type1,
        ]
    ]);

    $post_type2 = 'licence';
    register_post_type( $post_type2, [
        'labels' => [
            'name'               => 'Лицензии и аккредитации', // основное название для типа записи
            'singular_name'      => 'Лицензии и аккредитации', // название для одной записи этого типа
            'add_new'            => 'Добавить лицензию или аккредитацию', // для добавления новой записи
            'add_new_item'       => 'Добавить лицензию или аккредитацию', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать лицензию или аккредитацию', // для редактирования типа записи
            'new_item'           => 'Новая лицензия или аккредитация', // текст новой записи
            'view_item'          => 'Смотреть лицензию или аккредитацию', // для просмотра записи этого типа.
            'search_items'       => 'Искать лицензию или аккредитацию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в лицензиях и аккредитациях', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Лицензии и аккредитации', // название меню
        ],
        'public'              => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-menu-alt3',
        'hierarchical'        => true,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => [
            'slug' =>  get_page_uri($page_obj) ."/" . $post_type2,
        ]

    ]);

    /*register_taxonomy('positions', [$post_type1], [
        'labels'                => [
            'name'              => 'Должности',
            'singular_name'     => 'Должность',
            'search_items'      => 'Найти должность',
            'all_items'         => 'Все должности',
            'view_item '        => 'Посмотреть должности',
            'edit_item'         => 'Редактировать должности',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить должность',
            'new_item_name'     => 'Добавить должность',
            'menu_name'         => 'Все должности',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);*/

    register_taxonomy('licence', [$post_type2], [
        'labels'                => [
            'name'              => 'Тип лицензии',
            'singular_name'     => 'Тип лицензии',
            'search_items'      => 'Найти тип лицензии',
            'all_items'         => 'Все тип лицензий',
            'view_item '        => 'Посмотреть типы лицензии',
            'edit_item'         => 'Редактировать типы лицензии',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить тип лицензии',
            'new_item_name'     => 'Добавить тип лицензии',
            'menu_name'         => 'Все типы лицензии',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);

    /**
     * Кастомные поля для раздела "Маркетинговые исследования"
     */

    $page_obj = get_page_by_title('Маркетинговые исследования');

    $post_type3 = 'price';
    register_post_type( $post_type3, [
        'labels' => [
            'name'               => 'Маркетинговые исследования', // основное название для типа записи
            'singular_name'      => 'Маркетинговое исследование', // название для одной записи этого типа
            'add_new'            => 'Добавить маркетинговое исследование', // для добавления новой записи
            'add_new_item'       => 'Добавить маркетинговое исследование', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать маркетинговое исследование', // для редактирования типа записи
            'new_item'           => 'Новое маркетинговое исследование', // текст новой записи
            'view_item'          => 'Смотреть маркетинговое исследование', // для просмотра записи этого типа.
            'search_items'       => 'Искать маркетинговое исследование', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "маркетинговое исследование"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Маркетинговые исследования', // название меню
        ],
        'public'              => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'hierarchical'        => true,
        'supports'            => ['title'],
        'has_archive' => true,
        'rewrite' => [
            'slug' =>  get_page_uri($page_obj) ."/" . $post_type3,
        ]
    ]);

    $post_type4 = 'list';
    register_post_type( $post_type4, [
        'labels' => [
            'name'               => 'Изученные рынки', // основное название для типа записи
            'singular_name'      => 'Изученные рынки', // название для одной записи этого типа
            'add_new'            => 'Добавить изученные рынки', // для добавления новой записи
            'add_new_item'       => 'Добавить изученный рынок', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать изученный рынок', // для редактирования типа записи
            'new_item'           => 'Новый изученный рынок', // текст новой записи
            'view_item'          => 'Смотреть изученный рынок', // для просмотра записи этого типа.
            'search_items'       => 'Искать изученный рынок', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "Изученные рынки"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Изученные рынки', // название меню
        ],
        'public'              => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-database-view',
        'hierarchical'        => true,
        'supports'            => ['title', 'editor'],
        'has_archive' => true,
        'rewrite' => [
            'slug' =>  get_page_uri($page_obj) ."/" . $post_type4,
        ]
    ]);

    register_taxonomy('area', [$post_type3], [
        'labels'                => [
            'name'              => 'Область',
            'singular_name'     => 'Область',
            'search_items'      => 'Найти область',
            'all_items'         => 'Все области',
            'view_item '        => 'Посмотреть области',
            'edit_item'         => 'Редактировать области',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить область',
            'new_item_name'     => 'Добавить область',
            'menu_name'         => 'Все области',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);

    /**
     * Кастомные поля для раздела "Партнеры и клиенты"
     */

    $post_type5 = 'partners';
    register_post_type( $post_type5, [
        'labels' => [
            'name'               => 'Партнеры и клиенты', // основное название для типа записи
            'singular_name'      => 'Партнеры и клиенты', // название для одной записи этого типа
            'add_new'            => 'Добавить партнера или клиента', // для добавления новой записи
            'add_new_item'       => 'Добавить партнера или клиента', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать партнера или клиента', // для редактирования типа записи
            'new_item'           => 'Новый партнер или клиент', // текст новой записи
            'view_item'          => 'Смотреть партнера или клиента', // для просмотра записи этого типа.
            'search_items'       => 'Искать партнера или клиента', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "Партнеры и клиенты"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Партнеры и клиенты', // название меню
        ],
        'public'              => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-admin-users',
        'hierarchical'        => true,
        'supports'            => ['title'],
        'has_archive' => true,
    ]);

    register_taxonomy('unit_type', [$post_type5], [
        'labels'                => [
            'name'              => 'Вид сотрудничества',
            'singular_name'     => 'Вид сотрудничества',
            'search_items'      => 'Найти вид сотрудничества',
            'all_items'         => 'Все виды сотрудничества',
            'view_item '        => 'Посмотреть виды сотрудничества',
            'edit_item'         => 'Редактировать виды сотрудничества',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить вид сотрудничества',
            'new_item_name'     => 'Добавить вид сотрудничества',
            'menu_name'         => 'Все виды сотрудничества',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);

    /**
     * Кастомные поля для раздела "Издательская деятельность"
     */

    $post_type6 = 'mag';
    register_post_type( $post_type6, [
        'labels' => [
            'name'               => 'Журналы', // основное название для типа записи
            'singular_name'      => 'Журналы', // название для одной записи этого типа
            'add_new'            => 'Добавить журнал', // для добавления новой записи
            'add_new_item'       => 'Добавить журнал', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать журнал', // для редактирования типа записи
            'new_item'           => 'Новый журнал', // текст новой записи
            'view_item'          => 'Смотреть журнал', // для просмотра записи этого типа.
            'search_items'       => 'Искать журнал', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "Журналы"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Журналы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 9,
        'menu_icon'           => 'dashicons-text-page',
        'hierarchical'        => true,
        'supports'            => ['title', 'editor'],
        'has_archive' => true,
    ]);

    $page_obj = 'Издательская деятельность';

    $post_type7 = 'monposob';
    $slug = "$post_type6/" . $post_type7;
    register_post_type( $post_type7, [
        'labels' => [
            'name'               => 'Изданные учебные пособия и монографии', // основное название для типа записи
            'singular_name'      => 'Изданные учебные пособия и монографии', // название для одной записи этого типа
            'add_new'            => 'Добавить учебные пособия и монографии', // для добавления новой записи
            'add_new_item'       => 'Добавить учебные пособия и монографии', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать учебные пособия и монографии', // для редактирования типа записи
            'new_item'           => 'Новые учебные пособия и монографии', // текст новой записи
            'view_item'          => 'Смотреть учебные пособия и монографии', // для просмотра записи этого типа.
            'search_items'       => 'Искать учебные пособия и монографии', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "Учебные пособия и монографии"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Учебные пособия и монографии', // название меню
        ],
        'public'              => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-schedule',
        'hierarchical'        => true,
        'supports'            => ['title', 'editor'],
        'has_archive' => true,
        'rewrite' => [
//            'slug' => $slug,
        ]
    ]);

    register_taxonomy('publish_year', [$post_type7], [
        'labels'                => [
            'name'              => 'Год публикации',
            'singular_name'     => 'Год публикации',
            'search_items'      => 'Найти год публикации',
            'all_items'         => 'Все года публикаций',
            'view_item '        => 'Посмотреть года публикаций',
            'edit_item'         => 'Редактировать года публикаций',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить год публикации',
            'new_item_name'     => 'Добавить год публикации',
            'menu_name'         => 'Все года публикаций',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite' => [
//            'slug' => 'monposob',
        ]
    ]);

    /**
     * Кастомные поля для раздела "Комментарии"
     */

    register_post_type( 'comments', [
        'labels' => [
            'name'               => 'Отзывы', // основное название для типа записи
            'singular_name'      => 'Отзывы', // название для одной записи этого типа
            'add_new'            => 'Добавить отзыв', // для добавления новой записи
            'add_new_item'       => 'Добавить отзыв', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать отзыв', // для редактирования типа записи
            'new_item'           => 'Новый отзыв', // текст новой записи
            'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
            'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в "Отзывы"', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отзывы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 11,
        'menu_icon'           => 'dashicons-smiley',
        'hierarchical'        => true,
        'supports'            => ['title', 'editor'],
        'has_archive' => true,
        'rewrite' => [
            'slug' =>  "study/comments",
        ]
    ]);
}

function i_paste_link( $attr ){
    $params = shortcode_atts([ //Сливаются данные
        'link' => '',
        'text' => '',
        'type' => 'link'
    ], $attr);
    $params['text'] = $params['text'] ? $params['text'] : $params['link'];
    if( $params['link'] ){
        $protocol = '';
        switch ( $params['type'] ){
            case 'email':
                $protocol = 'mailto:';
                break;
            case 'phone':
                $protocol = 'tel:';
                $params['link'] = preg_replace('/[^+0-9]/', '', $params['link']);
                break;
            default:
                $protocol = '';
                break;
        }
        $link = $protocol . $params['link'];
        $text = $params['text'];
        return "<a href=\"${link}\">${text}</a>";
    } else {
        return '';
    }
}

function i_modal_form_handler(){
    $name = $_POST['m_fio'] ? wp_strip_all_tags($_POST['m_fio']) : 'Аноним';
    $org = $_POST['m_org'] ? wp_strip_all_tags($_POST['m_org']) : '';
    $phone = $_POST['m_phone'] ? wp_strip_all_tags($_POST['m_phone']) : 'false';
    $email = $_POST['m_email'] ? wp_strip_all_tags($_POST['m_email']) : 'empty';
    $id_service = $_POST['id_service'] ? wp_strip_all_tags($_POST['id_service']) : 'nothing';
    if ($email) {
        wp_mail(get_option('admin_email'), 'Research order',
            $name . ' (' . $phone . ') ' . 'из организации ' . $org . ' заказал ' . get_the_title($id_service) . ' ,email:' . $email,
        [
                'from' => 's-office@itkor.ru',
        ]);
    }
    header('Location: /marketing/price?done=1');
}

function i_modal_comment_handler(){
    $name = $_POST['m_fio'] ? $_POST['m_fio'] : 'Аноним';
    $email = $_POST['m_email'] ? $_POST['m_email'] : '';
    $feedback = $_POST['m_feedback'] ? $_POST['m_feedback'] : '';
    $name = wp_strip_all_tags($name);
    $email = wp_strip_all_tags($email);
    $feedback = wp_strip_all_tags($feedback);
    $id = wp_insert_post(wp_slash([
        'post_title' => 'Комментарий № ',
        'post_content' => $feedback,
        'post_type' => 'comments',
        'post_status' => 'publish',
    ]));
    if ($id){
        wp_update_post([
            'ID' => $id,
            'post_title' => 'Комментарий № ' . $id,
        ]);
        update_field('author_name', $name, $id);
        update_field('author_email', $email, $id);
    }
    header('Location: /study/comments/');
}

function i_meta_comment_cb( $post_obj ){
    $checked = get_post_meta($post_obj->ID, 'i-checked', true);
    $checked = $checked ? $checked : '';
    echo $checked;
}

function _i_assets_path( $path ){
    return get_template_directory_uri() . '/assets/' . $path;
}