<?php
/*
Template Name: issuers history
Template Post Type: post, history
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
            <div class="disclosure-card__label">История</div>
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
            <div class="disclosure-card__header">Причина перевода</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_deleteReason") == null || get_field("history_issuer_deleteReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_deleteReason");
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
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_shortName") == null || get_field("history_issuer_shortName") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_shortName");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_fullName") == null || get_field("history_issuer_fullName") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_fullName");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_inn") == null || get_field("history_issuer_inn") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_inn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_ogrn") == null || get_field("history_issuer_ogrn") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_ogrn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_address") == null || get_field("history_issuer_address") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_phone") == null || get_field("history_issuer_phone") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_phone");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_fax") == null || get_field("history_issuer_fax") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_fax");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата договора на вед. реестра</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registryContractDate") == null || get_field("history_issuer_registryContractDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_issuer_registryContractDate"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата акта приема реестра</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registryIncomingActDate") == null || get_field("history_issuer_registryIncomingActDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_issuer_registryIncomingActDate"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата акта передачи реестра</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registryOutgoingActDate") == null || get_field("history_issuer_registryOutgoingActDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_issuer_registryOutgoingActDate"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата прекращения договора</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registryContractTerminationDate") == null || get_field("history_issuer_registryContractTerminationDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_issuer_registryContractTerminationDate"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата приема на хранение</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_registryIncomingForStorageDate") == null || get_field("history_issuer_registryIncomingForStorageDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_issuer_registryIncomingForStorageDate"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Передано регистратору</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_issuer_nextRegistrar") == null || get_field("history_issuer_nextRegistrar") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_issuer_nextRegistrar");
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

