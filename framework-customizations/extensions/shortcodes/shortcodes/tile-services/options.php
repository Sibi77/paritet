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
    'services_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок секции', '{domain}'),
        'help'  => __('Заголовок не отобразится если оставить поле пустым', '{domain}'),
    ],
    'services_tile'     => [
        'type' => 'addable-popup',
        'label' => __('Плитки', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'icon'     => [
                'type'  => 'upload',
                'label' => __('Иконка', '{domain}')
            ],
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
            'link'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}')
            ],
            'label'     => [
                'type'  => 'text',
                'label' => __('Лейбл', '{domain}')
            ],
        ],
    ],
    'services_btn_all'     => [
        'type'  => 'text',
        'label' => __('Кнопка "все услуги"', '{domain}'),
        'help'  => __('Кнопка не отобразится если оставить поле пустым', '{domain}'),
    ],
    'services_btn_all_link'     => [
        'type'  => 'text',
        'label' => __('Ссылка', '{domain}'),
    ],
];