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
    'num_list_add'     => [
        'type' => 'addable-popup',
        'label' => __('Элемент списка', '{domain}'),
        'template' => '{{- num_list_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'num_list_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
        ],
    ],

];