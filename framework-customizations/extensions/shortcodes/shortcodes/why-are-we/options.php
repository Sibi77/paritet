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
    'why_us_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок секции', '{domain}'),
        'value' => 'Почему мы?'
    ],
    'why_us_add'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить список', '{domain}'),
        'template' => '{{- why_us_list_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'why_us_list_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'why_us_add_list'     => [
                'type' => 'addable-popup',
                'label' => __('Список', '{domain}'),
                'template' => '{{- why_us_list }}',
                'popup-title' => null,
                'size' => 'medium', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'why_us_list'     => [
                        'type'  => 'text',
                        'label' => __('Почему?', '{domain}')
                    ],
                ],
            ],
        ],
    ],

];