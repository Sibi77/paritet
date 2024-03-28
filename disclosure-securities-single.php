<?php
/*
Template Name: Securities
Template Post Type: post
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <?php true_breadcrumbs();?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">

        <?php
       ?>
        <h1 class="pir-title-h1"><?= get_field("issuerrr_title"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_publication_reason") == null || get_field("issuer_publication_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_publication_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuerrr_delReason") == null || get_field("issuerrr_delReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuerrr_delReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuerrr_source") == null || get_field("issuerrr_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuerrr_source");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Эмитент</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuerrr_name") == null || get_field("issuerrr_name") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuerrr_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации АО</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_registration_date") == null || get_field("issuer_registration_date") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("issuer_registration_date"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Вид ценной бумаги</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_security_type") == null || get_field("issuer_security_type") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_security_type");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Категория ценной бумаги</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_security_category") == null || get_field("issuer_security_category") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_security_category");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_registration_number") == null || get_field("issuer_registration_number") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_registration_number");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ISIN код</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_isin_code") == null || get_field("issuer_isin_code") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_isin_code");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации выпуска.</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_registration_date") == null || get_field("issuer_registration_date") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("issuer_registration_date"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата аннулирования выпуска</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_cancellation_date") == null || get_field("issuer_cancellation_date") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("issuer_cancellation_date"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Номинальная стоимость.</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_denomination") == null || get_field("issuer_denomination") == '' || get_field("issuer_denomination") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_denomination");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Количество размещено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_issue_volume") == null || get_field("issuer_issue_volume") == '' || get_field("issuer_issue_volume") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_issue_volume");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Сумма выпуска по номиналу</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_issue_amount") == null || get_field("issuer_issue_amount") == '' || get_field("issuer_issue_amount") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_issue_amount");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создан</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_created_at") == null || get_field("issuer_created_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_created_at");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликованно</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_published_at") == null || get_field("issuer_published_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_published_at");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удален</div>
            <div class="disclosure-card__content">
                <?php if(get_field("issuer_deleteAt") == null || get_field("issuer_deleteAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("issuer_deleteAt");
                }
                ?>
            </div>
        </div>
    </div>
    <div class="pir-container">
        <h2 class="pir-content__title"">История изменений</h2>
        <div class="pir-table" style="padding-bottom: 0">
            <div class="pir-container">
                <div class="table-calc__tab-mob">
                    <table class="pir-table__table">
                        <thead>
                        <tr>
                            <td>
                                Наименование
                            </td>
                            <td>
                                Опубликован
                            </td>

                            <td>Удален</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id =  get_field("issuerrr_parent_id");
                        $section_name =  get_field("security_section_name");
                        $category_name =  get_field("security_category_name");
                        //                            $category_name_history = get_field("doc_cat_name_history");
                        securitiesIssuerHistory($category_name, $section_name);
                        global $post;

                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0
                            ]);
                        } else{
                            $myposts = get_posts( [
                                'posts_per_page' => -1,
                                'category_name' => $category_name,
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>

                            <tr>
                                <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?php the_field("history_issuer_title") ?></a></td>
                                <td><?php the_field("history_issuer_publishedAt") ?></td>
                                <td><?php the_field("history_issuer_deletedAt") ?></td>

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
</section>


<?php get_footer(); ?>

