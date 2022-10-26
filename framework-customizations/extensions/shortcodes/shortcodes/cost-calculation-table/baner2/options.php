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
    'banner_img' => [
        'type' => 'upload',
        'label' => __('Картинка', '{domain}'),
        'images_only' => true,

    ],
    'banner_img1' => [
        'type' => 'upload',
        'label' => __('Картинка', '{domain}'),
        'images_only' => true,

    ],
];