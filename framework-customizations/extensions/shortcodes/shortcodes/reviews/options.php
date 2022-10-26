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

    'review'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить отзыв', '{domain}'),
        'template' => '{{- review_title }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'review_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок', '{domain}')
            ],
            'review_desk'     => [
                'type'  => 'wp-editor',
                'label' => __('Описание', '{domain}')
            ],
            'review_sidebar_title'     => [
                'type'  => 'text',
                'label' => __('Заголовок сайдбара', '{domain}')
            ],
            'review_sidebar_logo'     => [
                'type'  => 'upload',
                'label' => __('Логотип сайдбара', '{domain}'),
            ],
            'review_and_project_btn_link_screen'     => [
                'type'  => 'upload',
                'label' => __('Фото отзыва', '{domain}'),
            ],
            'review_and_project_btn_link'     => [
                'type'  => 'upload',
                'label' => __('Документ отзыва', '{domain}'),
            ],
        ],
    ],


];