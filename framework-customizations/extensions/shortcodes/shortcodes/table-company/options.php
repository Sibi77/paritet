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
    'table_company' => [
        'type' => 'addable-popup',
        'label' => __('Элементы таблицы', '{domain}'),
        'template' => '{{- table_company_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'table_company_name' => [
                'type' => 'text',
                'label' => __('Наименование', '{domain}'),
            ],
            'table_company_reg' => [
                'type' => 'text',
                'label' => __('Регистрация', '{domain}'),
            ],
            'table_company_region' => [
                'type' => 'text',
                'label' => __('Регион', '{domain}'),
            ],
            'table_company_tax' => [
                'type' => 'text',
                'label' => __('Налогооблажение', '{domain}'),
            ],
            'table_company_price' => [
                'type' => 'text',
                'label' => __('Цена, Р', '{domain}'),
            ],
            'table_company_check' => [
                'type' => 'checkbox',
                'value' => false, // checked/unchecked
                'label' => __('Забронированно', '{domain}'),
                'text' => __('Ометить бронь', '{domain}'),
            ],

        ],
    ],
];