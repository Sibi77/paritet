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
    'alert_text'     => [
        'type'  => 'text',
        'label' => __('Текст', '{domain}'),
    ],'alert_link'     => [
        'type'  => 'text',
        'label' => __('Ссылка на страницу', '{domain}'),
    ],

];