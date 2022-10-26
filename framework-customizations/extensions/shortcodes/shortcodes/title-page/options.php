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
    'title_page_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
    ],
    'title_page_desk'     => [
        'type'  => 'wp-editor',
        'label' => __('Описание', '{domain}'),
    ],
    'title_page_bg'     => [
        'type'  => 'upload',
        'label' => __('Фоновое изображение', '{domain}'),
        'images_only' => true,
    ],
];