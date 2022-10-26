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

    'interleaved_sections'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить секцию', '{domain}'),
        'template' => '{{- interleaved_sections_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'interleaved_sections_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'interleaved_sections_desk'     => [
                'type'  => 'wp-editor',
                'label' => __('Описание', '{domain}')
            ],
        ],
    ],


];