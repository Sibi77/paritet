<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    'pir_video_title'     => [
        'type' => 'text',
        'label' => __('Заголовок секции', '{domain}'),
    ],

    'pir_video_link'     => [
        'type' => 'text',
        'label' => __('Ссылка на видео', '{domain}'),
    ],

    'pir_video_text'     => [
        'type' => 'wp-editor',
        'label' => __('Текст секции', '{domain}'),
    ],

    'pir_video_btn'     => [
        'type' => 'text',
        'label' => __('Текст кнопки', '{domain}'),
    ],

    'pir_video_btn_link'     => [
        'type' => 'text',
        'label' => __('Ссылка кнопки кнопки', '{domain}'),
    ],
];


