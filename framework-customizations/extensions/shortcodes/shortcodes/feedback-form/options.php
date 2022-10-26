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

    'form_title' => [
        'type' => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => 'Остались вопросы?'
    ],
    'form_subtitle' => [
        'type' => 'text',
        'label' => __('Подзаголовок', '{domain}'),
        'value' => 'Закажите обратный звонок, и наш специалист свяжется с Вами
в течение 10 минут'
    ],
    'form_personal_data' => [
        'type' => 'text',
        'label' => __('Солгашение', '{domain}'),
        'value' => 'Отправляя данные, даю согласие на обработку персональных данных в соответствии с ФЗ № 152-ФЗ «О персональных данных»'
    ],
    'form_btn' => [
        'type' => 'text',
        'label' => __('Текст кнопки', '{domain}'),
        'value' => 'Отправить'
    ],
    'short' => [
        'type' => 'wp-editor',
        'label' => __('Шорт', '{domain}'),
        'value' => 'Отправить'
    ],
];