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
        <div class="disclosure-card__label">История</div>



        <?php if(!get_field("history_issuer_name") == null || !get_field("history_issuer_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Эмитент</div>
                <div class="disclosure-card__content">
                  <?=get_field("history_issuer_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_securityType") == null || !get_field("history_issuer_securityType") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Вид ценной бумаги</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_issuer_securityType");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_securityCategory") == null || !get_field("history_issuer_securityCategory") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Категория ценной бумаги</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_issuer_securityCategory");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_registrationNumber") == null || !get_field("history_issuer_registrationNumber") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
                <div class="disclosure-card__content">
                  <?= get_field("history_issuer_registrationNumber");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_isinCode") == null || !get_field("history_issuer_isinCode") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ISIN код</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_issuer_isinCode");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_issuer_registrationDate") == null || !get_field("history_issuer_registrationDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата регистрации выпуска.</div>
                <div class="disclosure-card__content">
                   <?=substr(get_field("history_issuer_registrationDate"),0,10) ;?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_issuer_cancellationDate") == null || !get_field("history_issuer_cancellationDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата аннулирования выпуска</div>
                <div class="disclosure-card__content">
                   <?=substr(get_field("history_issuer_cancellationDate"),0,10) ;?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_issuer_delReason") == null || !get_field("history_issuer_delReason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина удаления</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_issuer_delReason");?>
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
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_issuer_deletedAt");?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>

