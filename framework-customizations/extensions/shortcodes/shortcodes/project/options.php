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
    'project_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок секции', '{domain}'),
    ],
    'project_add'     => [
        'type' => 'addable-popup',
        'label' => __('Проекты', '{domain}'),
        'template' => '{{- project_add_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'project_add_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'project_desk'     => [
                'type'  => 'wp-editor',
                'label' => __('Описание', '{domain}')
            ],
            'project_reviews'     => [
                'type'  => 'text',
                'label' => __('Отзыв', '{domain}')
            ],
            'project_photo'     => [
                'type'  => 'upload',
                'label' => __('Фото', '{domain}'),
                'image-only' => true
            ],
            'project_name'     => [
                'type'  => 'text',
                'label' => __('Имя', '{domain}'),
            ],
            'project_position'     => [
                'type'  => 'text',
                'label' => __('Должность', '{domain}'),
            ],
        ],
    ],
];