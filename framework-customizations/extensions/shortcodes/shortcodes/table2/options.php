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
    'table_v2'     => [
        'type'  => 'wp-editor',
        'label' => __('Вставка таблицы html', '{domain}'),
        'size' => 'large',
    ]
];