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
    'notification_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => 'Осторожно COVID-19',
    ],
    'notification_desk'     => [
        'type'  => 'text',
        'label' => __('Описание', '{domain}'),
        'value' => 'Прием посетителей происходит по предварительной записи при условии наличия маски и перчаток',
    ],
];