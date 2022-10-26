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
    'title_h1' => [
        'type' => 'text',
        'label' => 'Заголовок'
    ],
    'title_h1_padding' => [
        'type' => 'checkbox',
        'value' => false, // checked/unchecked
        'label' => __('Нижний отступ заголовка', '{domain}'),
        'text' => __('Убрать нижний отступ заголовка', '{domain}'),
    ],
    'title_h1_desk' => [
        'type' => 'wp-editor',
        'label' => 'Описание'
    ],

];