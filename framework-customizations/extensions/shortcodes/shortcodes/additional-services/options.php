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

    'additional_serv_title' =>[
        'type' => 'text',
        'label' => __('Заголовок', '{domain}')
    ],
    'additional_serv'     => [
        'type' => 'addable-popup',
        'label' => __('Элемент списка', '{domain}'),
        'template' => '{{- additional_serv_name }}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'additional_serv_name'     => [
                'type'  => 'text',
                'label' => __('Название', '{domain}')
            ],
            'additional_serv_link'     => [
                'type'  => 'text',
                'label' => __('Ссылка', '{domain}'),
                'help'  => __('Элемент не будет ссылкой, если оставить поле пустым.', '{domain}'),

            ],
        ],
    ],
    'additional_serv_bg' =>[
        'type'  => 'color-picker',
        'value' => '#F2F2F2',
        'label' => __('Фоновый цвет секции', '{domain}'),
    ],

];