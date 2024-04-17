<?php
/*
Template Name: issuers
Template Post Type: post
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <?php true_breadcrumbs(); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">

        <h1 class="pir-title-h1"><?= get_field("issuer_title"); ?></h1>


        <?php if (!get_field("issuer_shortName") == null || !get_field("issuer_shortName") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_shortName"); ?>
                </div>
            </div>
        <?php endif; ?>


        <?php if (!get_field("issuer_fullName") == null || !get_field("issuer_fullName") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Полное наименование</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_fullName"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_inn") == null || !get_field("issuer_inn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ИНН</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_inn"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_ogrn") == null || !get_field("issuer_ogrn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ОГРН</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_ogrn"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_address") == null || !get_field("issuer_address") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Адрес</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_address"); ?>
                </div>
            </div>
        <?php endif; ?>


        <?php if (!get_field("issuer_phone") == null || !get_field("issuer_phone") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Телефон</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_phone"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_fax") == null || !get_field("issuer_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Факс</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_fax"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_registryContractDate") == null || !get_field("issuer_registryContractDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата договора на вед. реестра</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("issuer_registryContractDate"), 0, 10); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_registryIncomingActDate") == null || !get_field("issuer_registryIncomingActDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата акта приема реестра</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("issuer_registryIncomingActDate"), 0, 10); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_registryOutgoingActDate") == null || !get_field("issuer_registryOutgoingActDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата акта передачи реестра</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("issuer_registryOutgoingActDate"), 0, 10); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_registryContractTerminationDate") == null || !get_field("issuer_registryContractTerminationDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата прекращения договора</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("issuer_registryContractTerminationDate"), 0, 10); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_registryIncomingForStorageDate") == null || !get_field("issuer_registryIncomingForStorageDate") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата приема на хранение</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("issuer_registryIncomingForStorageDate"), 0, 10); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_nextRegistrar") == null || !get_field("issuer_nextRegistrar") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Передано регистратору</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_nextRegistrar"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_publicationReason") == null || !get_field("issuer_publicationReason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина публикации</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_publicationReason"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_publishedAt") == null || !get_field("issuer_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_publishedAt"); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!get_field("issuer_deletedAt") == null || !get_field("issuer_deletedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                    <?= get_field("issuer_deletedAt"); ?>
                </div>
            </div>
        <?php endif; ?>

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
                                Опубликовано
                            </td>

                            <td>Удалено</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id = get_field("parent_issuer_id");
                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0,
                            ]);
                        } else {
                            $myposts = get_posts([
                                'posts_per_page' => -1,
                                'category_name' => 'history',
                                'post_type' => 'post',
                                'order' => 'DESC',
                                'tag' => $id,
                            ]);


                        }


                        foreach ($myposts as $post) {
                            setup_postdata($post); ?>
                            <tr>
                                <td><a class="pir-table-api"
                                       href="<?php the_permalink(); ?>"><?php the_field("history_issuer_title") ?></a>
                                </td>
                                <td><?php echo substr(get_field("history_issuer_publishedAt"), 0, 10); ?></td>
                                <td><?php echo substr(get_field("history_issuer_deletedAt"), 0, 10); ?></td>

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

