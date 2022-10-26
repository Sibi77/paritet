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
    'table_header'     => [
        'type' => 'addable-popup',
        'label' => __('Шапка таблицы', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'title'     => [
                'type'  => 'text',
                'label' => __('Ячейка', '{domain}')
            ],
        ],
    ],
    'table_body'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить ряд', '{domain}'),
        'template' => '{{- table_row_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'table_row_name'     => [
                'type'  => 'text',
                'label' => __('Название ряда', '{domain}')
            ],
            'table_row'     => [
                'type' => 'addable-popup',
                'label' => __('Добавить ячейку', '{domain}'),
                'template' => '{{- table_name }}',
                'popup-title' => null,
                'size' => 'medium', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'table_icon'     => [
                        'type'  => 'upload',
                        'label' => __('Иконка', '{domain}')
                    ],
                    'table_name'     => [
                        'type'  => 'text',
                        'label' => __('Название', '{domain}')
                    ],
                    'table_file'     => [
                        'type'  => 'upload',
                        'label' => __('Документ', '{domain}'),
                    ],
                ],
            ],
        ],
    ],
];