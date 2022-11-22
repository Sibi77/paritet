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

    'icon_list_add'     => [
        'type' => 'addable-popup',
        'label' => __('Элемент списка', '{domain}'),
        'template' => '{{- icon_list_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'icon_list_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'icon_list_icon'     => [
                'type'  => 'upload',
                'label' => __('Иконка', '{domain}')
            ],
        ],
    ],
    'list_col_icon_margin' => [
        'type' => 'checkbox',
        'value' => false, // checked/unchecked
        'label' => __('Верхний отступ списка', '{domain}'),
        'text' => __('Убрать верхний отступ списка', '{domain}'),
    ],

];