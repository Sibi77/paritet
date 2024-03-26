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
        <h1 class="pir-title-h1"><?= get_field("history_issuer_name"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Эмитент</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации АО</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_jscRegistrationDate"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Вид ценной бумаги</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_securityType"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Категория ценной бумаги</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_securityCategory"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_registrationNumber"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ISIN код</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_isinCode"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации выпуска.</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_registrationDate"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата аннулирования выпуска</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_cancellationDate"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Номинальная стоимость.</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_denomination"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Количество размещено</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_issueVolume"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Сумма выпуска по номиналу</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_issueAmount"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создан</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_createdAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_publicationReason"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликованно</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_publishedAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("iss_del"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата удаления</div>
            <div class="disclosure-card__content"><?= get_field("history_issuer_deletedAt"); ?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

