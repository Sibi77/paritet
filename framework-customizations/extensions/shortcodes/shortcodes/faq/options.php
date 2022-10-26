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
    'faq_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок секции', '{domain}'),
        'value' => 'Часто задаваемые вопросы'
    ],
    'faq_add'     => [
        'type' => 'addable-popup',
        'label' => __('Вопрос-ответ', '{domain}'),
        'template' => '{{- question }}',
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'question'     => [
                'type'  => 'text',
                'label' => __('Вопрос', '{domain}')
            ],
            'answer'     => [
                'type'  => 'wp-editor',
                'label' => __('Ответ', '{domain}')
            ],
            'icon'     => [
                'type'  => 'upload',
                'label' => __('Опциональная иконка', '{domain}')
            ],
            'faq_link_add'     => [
                'type' => 'addable-popup',
                'label' => __('Связанные ссылки', '{domain}'),
                'template' => '{{- name_link }}',
                'popup-title' => null,
                'size' => 'large', // small, medium, large
                'limit' => 3, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'name_link'     => [
                        'type'  => 'text',
                        'label' => __('Имя ссылки', '{domain}')
                    ],
                    'url_link'     => [
                        'type'  => 'text',
                        'label' => __('Ссылка', '{domain}')
                    ],

                ],
            ],

        ],
    ],

];