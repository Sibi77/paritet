<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    'tile_price'     => [
        'type' => 'addable-popup',
        'label' => __('Плитки', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'price'     => [
                'type'  => 'text',
                'label' => __('Цена', '{domain}')
            ],
            'old_price'     => [
                'type'  => 'text',
                'label' => __('Старая цена', '{domain}')
            ],
            'title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'list'     => [
                'type' => 'addable-popup',
                'label' => __('Список', '{domain}'),
                'template' => '{{- name_list }}',
                'popup-title' => null,
                'size' => 'medium', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'name_list'     => [
                        'type'  => 'text',
                        'label' => __('Название', '{domain}')
                    ],
                ],
            ],
            'label'     => [
                'type'  => 'text',
                'label' => __('Лейбл', '{domain}')
            ],
            'btn1'     => [
                'type'  => 'text',
                'label' => __('Название кнопки 1', '{domain}')
            ],
            'link1'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}')
            ],
            'btn2'     => [
                'type'  => 'text',
                'label' => __('Название кнопки 2', '{domain}')
            ],
            'link2'     => [
                'type'  => 'text',
                'label' => __('Ссылка 2', '{domain}')
            ],
        ],

    ],
];