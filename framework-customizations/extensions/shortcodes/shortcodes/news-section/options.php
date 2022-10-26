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
    'news_title'     => [
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => 'Новости и статьи',
    ],
    'news_btn_name'     => [
        'type'  => 'text',
        'label' => __('Название кнопки', '{domain}'),
        'value' => 'Посмотреть все',
    ],

];