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
        <div class="disclosure-card__label">История</div>



        <?php if(!get_field("history_issuer_shortName") == null || !get_field("history_issuer_shortName") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_issuer_shortName");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_fullName") == null || !get_field("history_issuer_fullName") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Полное наименование</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_issuer_fullName");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_inn") == null || !get_field("history_issuer_inn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ИНН</div>
                <div class="disclosure-card__content">
                <?=get_field("history_issuer_inn");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_ogrn") == null || !get_field("history_issuer_ogrn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ОГРН</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_issuer_ogrn");?>
                </div>
            </div>
        <?php endif; ?>

<!--        --><?php //if(!get_field("history_issuer_address") == null || !get_field("history_issuer_address") == '') : ?>
<!--            <div class="disclosure-card__item">-->
<!--                <div class="disclosure-card__header">Адрес</div>-->
<!--                <div class="disclosure-card__content">-->
<!--                   --><?php //=get_field("history_issuer_address");?>
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endif; ?>

<!--        --><?php //if(!get_field("history_issuer_phone") == null || !get_field("history_issuer_phone") == '') : ?>
<!--            <div class="disclosure-card__item">-->
<!--                <div class="disclosure-card__header">Телефон</div>-->
<!--                <div class="disclosure-card__content">-->
<!--                   --><?php //= get_field("history_issuer_phone");?>
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endif; ?>

<!--        --><?php //if(!get_field("history_issuer_fax") == null || !get_field("history_issuer_fax") == '') : ?>
<!--            <div class="disclosure-card__item">-->
<!--                <div class="disclosure-card__header">Факс</div>-->
<!--                <div class="disclosure-card__content">-->
<!--                    --><?php //= get_field("history_issuer_fax");?>
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endif; ?>

        <?php if(!get_field("history_issuer_registryContractDate") == null || !get_field("history_issuer_registryContractDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата договора на вед. реестра</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("history_issuer_registryContractDate"),0,10);?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_registryIncomingActDate") == null || !get_field("history_issuer_registryIncomingActDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата акта приема реестра</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("history_issuer_registryIncomingActDate"),0,10);?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_registryOutgoingActDate") == null || !get_field("history_issuer_registryOutgoingActDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата акта передачи реестра</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("history_issuer_registryOutgoingActDate"),0,10);?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_registryContractTerminationDate") == null || !get_field("history_issuer_registryContractTerminationDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата прекращения договора</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("history_issuer_registryContractTerminationDate"),0,10);?>
                </div>
            </div>
        <?php endif; ?>


        <?php if(!get_field("history_issuer_registryIncomingForStorageDate") == null || !get_field("history_issuer_registryIncomingForStorageDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата приема на хранение</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("history_issuer_registryIncomingForStorageDate"),0,10);?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_nextRegistrar") == null || !get_field("history_issuer_nextRegistrar") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Передано регистратору</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_issuer_nextRegistrar");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_issuer_publishedAt") == null || !get_field("history_issuer_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("history_issuer_publishedAt"),0,10)?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_deleteReason") == null || !get_field("history_issuer_deleteReason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина переноса в архив</div>
                <div class="disclosure-card__content">
                    <?= get_field("history_issuer_deleteReason");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_publishedAt") == null || !get_field("history_issuer_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_issuer_publishedAt");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_deletedAt") == null || !get_field("history_issuer_deletedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Перенесено в архив</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_issuer_deletedAt");?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

