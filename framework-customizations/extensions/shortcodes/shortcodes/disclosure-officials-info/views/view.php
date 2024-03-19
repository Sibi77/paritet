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
OfficialsHistory();
?>


<section class="disclosure-card">
    <div class="pir-container">
        <?php
        $officials_get_list = paritet_get_api('https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures?filter=%7B%22Section%22%3A%22Officials%22%7D'); ?>

        <h1 class="disclosure-card__title">Должностные лица</h1>
        <?php foreach($officials_get_list->items as $item):

           $id =$item->id;
            $officials_get_data = paritet_get_api('https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures/'.$id);

            ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ФИО</div>
                <div class="disclosure-card__content"><?= $officials_get_data->data->content->official->fullName?></div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Должность</div>
                <div class="disclosure-card__content"><?= $officials_get_data->data->content->official->position?></div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата избрания</div>
                <div class="disclosure-card__content"><?= $officials_get_data->data->content->official->electionDate?></div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опыт работы</div>
                <div class="disclosure-card__content"><?= $officials_get_data->data->content->official->workExperience?></div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="pir-table">
        <div class="pir-container">
            <h2 class="pir-content__title">История изменений</h2>
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
                            $id =  get_field('officials_id');
                            global $post;

                            $myposts = get_posts( [
                                'category_name' => 'officials_history',
                                'post_type' => 'post',
                                'tag' => $id,
                            ] );

                            foreach( $myposts as $post ){setup_postdata( $post ); ?>
                                <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                    <td><?= get_field("officials_fio"); ?></td>
                                    <td><?= get_field("officials_published_at"); ?></td>
                                    <td><?= get_field("officials_created_at"); ?></td>

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




