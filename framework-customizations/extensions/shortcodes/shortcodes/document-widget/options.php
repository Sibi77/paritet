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
    'doc_widget_title' =>[
        'type' => 'text',
        'label' => __('Заголовок', '{domain}')
    ],
    'doc_widget'     => [
        'type' => 'addable-popup',
        'label' => __('Документ', '{domain}'),
        'template' => '{{- doc_widget_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'doc_widget_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'doc_widget_file'     => [
                'type'  => 'upload',
                'label' => __('Файл', '{domain}')
            ],
            'doc_widget_icon'     => [
                'type'  => 'upload',
                'label' => __('Иконка', '{domain}')
            ],
        ],
    ],
    'doc_widget_btn_name' =>[
        'type' => 'text',
        'label' => __('Название кнопки', '{domain}')
    ],
    'doc_widget_btn_file' =>[
        'type' => 'upload',
        'label' => __('Архив документов', '{domain}')
    ],
];