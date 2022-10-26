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
    'calc_table_item' => [
        'type' => 'addable-popup',
        'label' => __('Элементы таблицы', '{domain}'),
        'template' => '{{- calc_table_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'calc_table_name' => [
                'type' => 'text',
                'label' => __('Наименование Услуги', '{domain}'),
            ],
            'calc_table_price' => [
                'type' => 'text',
                'label' => __('Цена, Р', '{domain}'),
            ],
            'calc_table_discount' => [
                'type' => 'text',
                'label' => __('Скидка, %', '{domain}'),
            ],

        ],
    ],
];