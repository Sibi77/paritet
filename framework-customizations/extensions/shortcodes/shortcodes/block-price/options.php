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

    'price_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => 'Стоимость'
    ],
    'price_add'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить стоимость', '{domain}'),
        'template' => '{{- price_price }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'price_price'     => [
                'type'  => 'text',
                'label' => __('Цена', '{domain}')
            ],
            'price_desk'     => [
                'type'  => 'text',
                'label' => __('Описание', '{domain}')
            ],
        ],
    ],


];