<?php
/*
Template Name: Securities history
Template Post Type: post, Securities
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
        <h1 class="pir-title-h1"><?= get_field("history_issuer_title"); ?></h1>
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
        <h1 class="pir-title-h1"><?= get_field("history_issuer_title"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_publicationReason") == null || get_field("history_issuer_publicationReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_publicationReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_delReason") == null || get_field("history_issuer_delReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_delReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_source") == null || get_field("history_issuer_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_source");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Эмитент</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_name") == null || get_field("history_issuer_name") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации АО</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_jscRegistrationDate") == null || get_field("history_issuer_jscRegistrationDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("history_issuer_jscRegistrationDate"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Вид ценной бумаги</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_securityType") == null || get_field("history_issuer_securityType") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_securityType");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Категория ценной бумаги</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_securityCategory") == null || get_field("history_issuer_securityCategory") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_securityCategory");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registrationNumber") == null || get_field("history_issuer_registrationNumber") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_registrationNumber");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ISIN код</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_isinCode") == null || get_field("history_issuer_isinCode") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_isinCode");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации выпуска.</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registrationDate") == null || get_field("history_issuer_registrationDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("history_issuer_registrationDate"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата аннулирования выпуска</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_cancellationDate") == null || get_field("history_issuer_cancellationDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo substr(get_field("history_issuer_cancellationDate"),0,10) ;
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Номинальная стоимость.</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_denomination") == null || get_field("history_issuer_denomination") == '' || get_field("issuer_denomination") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_denomination");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Количество размещено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_issueVolume") == null || get_field("history_issuer_issueVolume") == '' || get_field("issuer_issue_volume") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_issueVolume");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Сумма выпуска по номиналу</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_issueAmount") == null || get_field("history_issuer_issueAmount") == '' || get_field("issuer_issue_amount") == 0){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_issueAmount");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_createdAt") == null || get_field("history_issuer_createdAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_createdAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_publishedAt") == null || get_field("history_issuer_publishedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_publishedAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_deletedAt") == null || get_field("history_issuer_deletedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_deletedAt");
                }
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

