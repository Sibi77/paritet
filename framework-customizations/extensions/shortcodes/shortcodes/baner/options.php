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
        'value' => array(
            'url' => '/wp-content/uploads/2020/03/banner1.png'
        ),
    ],
    'banner_title' => [
        'type' => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value'=> 'Учреждение АО «под ключ»',
    ],
    'banner_desk' => [
        'type' => 'wp-editor',
        'label' => __('Описание', '{domain}'),
        'value' => '<p>
                    Регистрация акционерного общества при учреждении за 7 дней. Вам не надо обращаться в ФНС и
                    Банк России и оплачивать госпошлины. Достаточно одному из учредителей обратиться к нам, и компания
                    будет зарегистрирована.
                </p>'
    ],
    'banner_btn' => [
        'type' => 'text',
        'label' => __('Название кнопки', '{domain}'),
        'value' => 'Подать документы'
    ],
    'banner_btn_link' => [
        'type' => 'text',
        'label' => __('Ссылка кнопки', '{domain}'),
        'value' => '/uchrezhdenie-ao-pod-klyuch'
    ],
//    'features' => [
//        'type' => 'addable-popup',
//        'label' => __('Преимущества', '{domain}'),
//        'template' => '{{- name }}',
//        'popup-title' => null,
//        'size' => 'small', // small, medium, large
//        'limit' => 3, // limit the number of popup`s that can be added
//        'add-button-text' => __('Добавить', '{domain}'),
//        'sortable' => true,
//        'value' => [
//            [
//                'name' => 'Увеличение продаж на 20%',
//                'description' => 'За счет системной
//                            работы отдела продаж
//                            по клиентской базе',
//                'icon' => [
//
//                ]
//            ],
//            [
//                'name' => 'Все клиенты как на ладони',
//                'description' => 'На одном экране вы видите
//                            всех клиентов,  все сделки,
//                            и все будущие продажи',
//                'icon' => [
//
//                ]
//            ],
//            [
//                'name' => 'Тотальный контроль менеджеров',
//                'description' => 'Вы будете видеть все действия,
//                            которые совершает Ваш
//                            менеджер по продажам',
//                'icon' => [
//
//                ]
//            ],
//        ],
//        'popup-options' => [
//            'name' => [
//                'type' => 'text',
//                'label' => __('Название', '{domain}')
//            ],
//            'description' => [
//                'type' => 'text',
//                'label' => __('Описание', '{domain}')
//            ],
//            'icon' => [
//                'type' => 'upload',
//                'label' => __('Иконка', '{domain}'),
//                'images_only' => true,
//            ],
//        ],
//    ],
];