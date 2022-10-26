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


    'facts_work' => [
        'type' => 'addable-popup',
        'label' => __('Факты о работе', '{domain}'),
        'template' => '{{- facts_work_title + facts_work_years}}',
        'popup-title' => null,
        'size' => 'medium',
        'limit' => 1,
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'facts_work_title' => [
                'type' => 'text',
                'label' => 'Заголовок',
                'value' => 'Работаем'
            ],
            'facts_work_year' => [
                'type' => 'text',
                'label' => 'Количество лет',
                'value' => '27 лет'
            ],
            'facts_work_link' => [
                'type' => 'text',
                'label' => 'Ссылка',
                'value' => '/about-company/'
            ],
            'facts_work_bg' => [
                'type' => 'upload',
                'label' => ' Фоновая картинка'
            ],
        ],
    ],
    'facts_online' => [
        'type' => 'addable-popup',
        'label' => __('Онлайн', '{domain}'),
        'template' => '{{- facts_online_title + facts_online_desk}}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'facts_online_title' => [
                'type' => 'text',
                'label' => 'Заголовок',
                'value' => 'Онлайн',
            ],
            'facts_online_desk' => [
                'type' => 'text',
                'label' => 'Описание',
                'value' => 'Электронное взаимодействие с акционерами и эмитентами'
            ],
            'link' => [
                'type' => 'text',
                'label' => 'Ссылка',
                'value' => '/online-services/',
            ],
            'facts_online_bg' => [
                'type' => 'upload',
                'label' => ' Фоновая картинка'
            ],
        ],
    ],
    'facts_project' => [
        'type' => 'addable-popup',
        'label' => __('Количесво проектов', '{domain}'),
        'template' => '{{- facts_project_num + facts_project_desk}}',
        'popup-title' => null,
        'size' => 'medium', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'facts_project_num' => [
                'type' => 'text',
                'label' => 'Заголовок',
                'value' => '700+'
            ],
            'facts_project_desk' => [
                'type' => 'text',
                'label' => 'Описание',
                'value' => 'Проектов выполнено по реорганизации, выкупам, слияниям, поглощениям',
            ],
            'facts_project_link' => [
                'type' => 'text',
                'label' => 'Ссылка',
                'value' => '/perechen-zaregistrirovannyh-zao-rdcz-paritet-vypuskov-czennyh-bumag/',
            ],
            'facts_project_bg' => [
                'type' => 'upload',
                'label' => ' Фоновая картинка'
            ],
        ],
    ],

];