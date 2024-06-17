<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции


    'search_desk'     => [
        'type'  => 'text',
        'label' => __('Описание', '{domain}'),
        'value' => 'Для поиска документа введите в поле поиска часть наименования документа'
    ],
    'search_margin' => [
        'type' => 'checkbox',
        'value' => false, // checked/unchecked
        'label' => __('Нижний отступ компонента', '{domain}'),
        'text' => __('Убрать нижний отступ', '{domain}'),
    ],
    'search_placeholder'     => [
        'type'  => 'text',
        'label' => __('Плейсхолдер', '{domain}'),
        'value' => 'Поиск...'
    ],
    'search_archive'     => [
        'type'  => 'text',
        'label' => __('Ссылка на страницу архива', '{domain}'),
        'help'  => __('Если поле пустое, архив скрыт.', '{domain}'),
    ],
    'search_filter_id'     => [
        'type'  => 'text',
        'label' => __('id для блока с фильтрами', '{domain}')
    ],
    'search_filter_btn'     => [
        'type' => 'addable-popup',
        'label' => __('Кнопки фильтра', '{domain}'),
        'template' => '{{- search_btn_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'help'  => __('Если кнопки не добавлены они скрыты на сайте.', '{domain}'),
        'popup-options' => [
            'search_btn_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'search_btn_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}')
            ],
            'search_btn_cat'     => [
                'type'  => 'text',
                'label' => __('Название метки для ajax', '{domain}')
            ],
            'search_btn_section'     => [
                'type'  => 'text',
                'label' => __('Название категории для ajax', '{domain}')
            ],
            'search_btn_sort'     => [
                'type'  => 'text',
                'label' => __('Ключ для сортировки', '{domain}')
            ],


        ],
    ],
    'search_filter_additional'     => [
        'type' => 'addable-popup',
        'label' => __('Дополнительные фильтры', '{domain}'),
        'template' => '{{- search_btn_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'help'  => __('Если кнопки не добавлены они скрыты на сайте.', '{domain}'),
        'popup-options' => [
            'search_btn_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'search_btn_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}')
            ],
            'search_btn_cat'     => [
                'type'  => 'text',
                'label' => __('Название метки для ajax', '{domain}')
            ],
            'search_btn_section'     => [
                'type'  => 'text',
                'label' => __('Название категории для ajax', '{domain}')
            ],
            'search_btn_status'     => [
                'type'  => 'text',
                'label' => __('Название категории для ajax', '{domain}')
            ],
            'search_btn_sort'     => [
                'type'  => 'text',
                'label' => __('Ключ для сортировки', '{domain}')
            ],


        ],
    ],


];