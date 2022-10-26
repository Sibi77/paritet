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

    'bar_list_add'     => [
        'type' => 'addable-popup',
        'label' => __('Элемент списка', '{domain}'),
        'template' => '{{- bar_list_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'bar_list_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'bar_list_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}')
            ],
            'bar_list_price'     => [
                'type'  => 'text',
                'label' => __('Цена', '{domain}'),
            ],
//            'bar_list_icons'     => [
//                'type'  => 'upload',
//                'label' => __('Иконка', '{domain}'),
//            ],
        ],
    ],


];