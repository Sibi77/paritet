<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

//function baseInfo(){
//    $issuer_get = paritet_get_api();
//    foreach ( $issuer_get['items'] as $item) {
//        if($item['section'] == 'Main'){
////            echo '<pre>';
////            print_r($item);
//
//            $issuer_status = $item['status']; // cтатус эмитента
//            $issuer_id = $item['id'];// id эмитента
//            $base_info_title = $item['content']['registrar']['shortName'] . ' ' .'id '.$issuer_id; //Заголовок поста
//            $base_info_shortName = $item['content']['registrar']['shortName'];
//            $base_info_full_name = $item['content']['registrar']['fullName'];
//
//
////            echo '<pre>';
//            print_r($base_info_full_name);
//            $issuer_short_mane = $item['content']['issuer']['shortName']; //Краткое наименование
//            $issuer_full_name = $item['content']['issuer']['fullName'];// Полное наименование
//            $issuer_inn = $item['content']['issuer']['inn']; //Инн эмитента
//            $issuer_ogrn = $item['content']['issuer']['ogrn']; //ОГРН эмитента
//            $issuer_address = $item['content']['issuer']['address']; // Адресс эмитента
//            $issuer_contract_date = $item['content']['issuer']['registryContractDate']; //Дата заключения договора на ведение реестра
//            $issuer_act_date = $item['content']['issuer']['registryIncomingActDate']; //Дата акта приема реестра
//            $issuer_pub_reason = $item['publicationReason']; // Причина публикации'
//            $issuer_date_publish = $item['publishedAt']; // когда опублткованно
////            $my_post = array(
////                'post_title'  => $issuer_title,
////                'post_status' => 'publish',
////                'post_content' => $item,
////                'post_type' => 'post',
////                'post_category' => array(18)
////            );
////            $posts = get_posts(
////                [
////                    'post_type'              => 'post',
////                    'title'                  => $issuer_title,
////                    'post_status'            => 'publish',
////                    'post_category'          => array(48),
////                    'orderby'                => 'post_date ID',
////                    'order'                  => 'ASC',
////                ]
////            );
////            if(!empty($posts)){
////
////            } else{
////                $post_id = wp_insert_post($my_post);
////                if( $post_id ) update_post_meta( $post_id, '_wp_page_template', 'disclosure-basic-history.php' );
////                wp_set_object_terms($post_id , $issuer_status, 'post_tag', false);
//////                update_field( 'issuer_id', $issuer_id, $post_id );
////
////            }
//
//
//        }
//
//    }
//}
//baseInfo();
disclosureBasicInfoHistory();
?>


<section class="disclosure-card">
    <div class="pir-container">
        <?php
        $issuer_get = paritet_get_api('https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures/Full');
        foreach ($issuer_get->items as $item) {

            if ($item->section == 'Main') {
                $base_info_id = $item->id;
                $base_info_published_at = $item->publishedAt;
                $base_info_publication_reason = $item->publicationReason;
                $base_info_title = $item->content->registrar->shortName . ' ' . 'id ';
                $base_info_short_name = $item->content->registrar->shortName;
                $base_info_full_name = $item->content->registrar->fullName;
                $base_info_short_name_eng = $item->content->registrar->shortNameEng;
                $base_info_full_name_eng = $item->content->registrar->fullNameEng;
                $base_info_inn = $item->content->registrar->inn;
                $base_info_ogrn = $item->content->registrar->ogrn;
                $base_info_kpp = $item->content->registrar->kpp;
                $base_info_address = $item->content->registrar->address;
                $base_info_phone = $item->content->registrar->phone;
                $base_info_fax = $item->content->registrar->fax;
                $base_info_email = $item->content->registrar->email;
                $base_info_site = $item->content->registrar->webSite;
                $base_info_social = $item->content->registrar->socialMedia;
                    $base_info_bank = $item->content->registrar->bank->recipient;
                    $base_info_bank_rs = $item->content->registrar->bank->rs;
                    $base_info_bank_bic = $item->content->registrar->bank->bic;
                    $base_info_bank_ks = $item->content->registrar->bank->ks;
                    $base_info_bank_name = $item->content->registrar->bank->name;
                    $base_info_bank_inn = $item->content->registrar->bank->inn;
                    $base_info_bank_kpp = $item->content->registrar->bank->kpp;

            }

        }
        ?>
        <h1 class="disclosure-card__title">Основные сведения</h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= $base_info_short_name ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?= $base_info_full_name ?></div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование на английском</div>
            <div class="disclosure-card__content"><?= $base_info_short_name_eng ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование на английском</div>
            <div class="disclosure-card__content"><?= $base_info_full_name_eng ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= $base_info_inn ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">КПП</div>
            <div class="disclosure-card__content"><?= $base_info_ogrn ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content"><?= $base_info_ogrn ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс Указанные в ЕГРЮЛ</div>
            <div class="disclosure-card__content"><?= $base_info_address ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><a href="tel:<?= $phone = str_replace(array('(', ')', ' ', '-'), '', $base_info_phone ); ?>"><?= $base_info_phone ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Официальный сайт</div>
            <div class="disclosure-card__content"><a href="/"><?= $base_info_site ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Электронная почта</div>
            <div class="disclosure-card__content"><a href="mailto:<?= $base_info_email ?>"><?= $base_info_email ?></a>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Банковские реквезиты</div>

            <div class="disclosure-card__content">Получатель: <?= $base_info_bank ?></div>
            <div class="disclosure-card__content">Расчетный счет: <?= $base_info_bank_rs ?></div>
            <div class="disclosure-card__content">Бик: <?= $base_info_bank_bic ?></div>
            <div class="disclosure-card__content">Корреспондентский счёт банка: <?= $base_info_bank_ks ?></div>
            <div class="disclosure-card__content">Наименования банка: <?= $base_info_bank_name ?></div>
            <div class="disclosure-card__content">ИНН получателя: <?= $base_info_bank_inn ?></div>
            <div class="disclosure-card__content">КПП получателя: <?= $base_info_bank_kpp ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата публикации</div>
            <div class="disclosure-card__content"><?= substr($base_info_published_at, 0, 10)?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= $base_info_publication_reason ?></div>
        </div>
    </div>
    <div class="pir-table">
        <div class="pir-container">
            <h2 class="pir-content__title"">История изменений</h2>
            <div class="pir-table">
                <div class="pir-container">
                    <div class="table-calc__tab-mob">
                        <table class="pir-table__table">
                            <thead>
                            <tr>
                                <td>
                                    Наименование
                                </td>
                                <td>
                                    Опубликовано
                                </td>

                                <td>Перенесено в архив</td>

                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            $id =  $base_info_id;
                            global $post;

                            $myposts = get_posts( [
                                'category_name' => 'base_info',
                                'post_type' => 'post',
                                'tag' => $id,
                            ] );

                            foreach( $myposts as $post ){setup_postdata( $post ); ?>
                                <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                    <td><?php the_title(); ?></td>
                                    <td>13.10.2023</td>
                                    <td>15.11.2023</td>

                                </tr>
                                <?php

                            }
                            if (empty($myposts)) {
                                echo '<tr>' . '<td>Нет истории</td>' . '</tr>';
                            }
                            wp_reset_postdata();
                            ?>


                            </tbody>
                        </table>
                        <div class="notfound">Ничего не найдено</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




