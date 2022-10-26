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
    'review_and_project_section_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок Секции', '{domain}')
    ],
    'review_and_project'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить', '{domain}'),
        'template' => '{{- review_and_project_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'review_and_project_logo'     => [
                'type'  => 'upload',
                'label' => __('Логотип', '{domain}')
            ],
            'review_and_project_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'review_and_project_desk'     => [
                'type'  => 'text',
                'label' => __('Описание', '{domain}')
            ],
            'review_and_project_btn_name'     => [
                'type'  => 'text',
                'label' => __('Название кнопки', '{domain}'),
                'value' => 'Читать отзыв'
            ],
            'review_and_project_btn_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка кнопки', '{domain}'),
            ],
        ],
    ],
    'review_and_project_section_btn'     => [
        'type'  => 'text',
        'label' => __('Название кнопки секции ', '{domain}')
    ],
    'review_and_project_section_btn_link'     => [
        'type'  => 'text',
        'label' => __('Ссылка кнопки секции ', '{domain}')
    ],

];