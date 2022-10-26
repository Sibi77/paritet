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
    'contact_block'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить офис', '{domain}'),
        'template' => '{{- contact_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'contact_title'     => [
                'type'  => 'text',
                'label' => __('Название офиса', '{domain}')
            ],
            'contact_address'     => [
                'type'  => 'text',
                'label' => __('Адрес офиса', '{domain}')
            ],
            'contact_desk'     => [
                'type'  => 'wp-editor',
                'label' => __('Дополнительная информация', '{domain}')
            ],
            'contact_map'     => [
                'type'  => 'text',
                'label' => __('Сслыка на карту', '{domain}')
            ],
            'clock_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'clock_add'     => [
                'type' => 'addable-popup',
                'label' => __('Добавить', '{domain}'),
                'template' => '{{- clock_time }}',
                'popup-title' => null,
                'size' => 'medium', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'clock_time'     => [
                        'type'  => 'text',
                        'label' => __('Часы примема', '{domain}')
                    ],
                ],
            ],
        ],
    ],



];