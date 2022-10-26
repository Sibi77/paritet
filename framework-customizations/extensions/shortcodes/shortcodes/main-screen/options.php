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
    'main_screen_bg'     => [
        'type'  => 'upload',
        'label' => __('Фоновое изображение секции', '{domain}'),
        'images_only' => true,
    ],
    'main_screen_slide'     => [
        'type' => 'addable-popup',
        'label' => __('Слайдер', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'desk'     => [
                'type'  => 'text',
                'label' => __('Описание', '{domain}')
            ],
            'btn'     => [
                'type'  => 'text',
                'label' => __('Название кнопки', '{domain}')
            ],
            'link_btn'     => [
                'type'  => 'text',
                'label' => __('Ссылка кнопки', '{domain}')
            ],

        ],
    ],
    'info'     => [
        'type'  => 'text',
        'label' => __('Инфо о компании', '{domain}'),
        'value' => 'РДЦ “ПАРИТЕТ” специализированный регистратор и консультант по корпоративному праву',
    ],
    'main_screen_additional_nav'     => [
        'type' => 'addable-popup',
        'label' => __('Дополнительные кнопки', '{domain}'),
        'template' => '{{- btn }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'btn'     => [
                'type'  => 'text',
                'label' => __('Название кнопки', '{domain}')
            ],
            'link_btn'     => [
                'type'  => 'text',
                'label' => __('Ссылка кнопки', '{domain}')
            ],
        ],
    ],
];