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
    'doc_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}')
    ],
    'documents'     => [
        'type' => 'addable-popup',
        'label' => __('Добавить колонку', '{domain}'),
        'template' => '{{- doc_list_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 2, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'doc_list_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'doc_list_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка на полный список', '{domain}')
            ],
            'documents_list'     => [
                'type' => 'addable-popup',
                'label' => __('Добавить список документов', '{domain}'),
                'template' => '{{- doc_list_name_doc }}',
                'popup-title' => null,
                'size' => 'medium', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'doc_list_icon'     => [
                        'type'  => 'upload',
                        'label' => __('Иконка', '{domain}')
                    ],
                    'doc_list_name_doc'     => [
                        'type'  => 'text',
                        'label' => __('Название документа', '{domain}')
                    ],
                    'doc_list_upload'     => [
                        'type'  => 'upload',
                        'label' => __('Загрузить документ', '{domain}')
                    ],
                ],
            ],
        ],
    ],
];