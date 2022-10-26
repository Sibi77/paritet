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
    'desk' => [
        'type' => 'wp-editor',
        'label' => 'Описание',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'shortcodes' => true,
        'size' => 'small', // small, large
        'editor_height' => 400,
    ],
    'not_last_margin' => [
        'type' => 'checkbox',
        'value' => false, // checked/unchecked
        'label' => __('Нижний отступ абзаца', '{domain}'),
        'text' => __('Убрать последний отступ абзаца', '{domain}'),
    ],
];