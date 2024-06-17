<tr>

    <td>
<?php $media = get_attached_media('');?>
        <a class="pir-table-api" href="<?php the_permalink(); ?>">
            <?php foreach($media as $url):?>

                <?php if($url->post_mime_type == 'application/msword') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/doc.svg" alt="Документ doc">
                <?php endif; ?>
                <?php if($url->post_mime_type == 'application/pdf') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/pdf.svg" alt="Документ pdf">
                <?php endif; ?>
                <?php if($url->post_mime_type == 'application/zip') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/zip.svg" alt="Архив zip">
                <?php endif; ?>
                <?php if($url->post_mime_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/xls.svg" alt="Документ xls">
                <?php endif; ?>

                <?php if($url->post_mime_type == 'image/jpeg') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/jpg.svg" alt="Картинка jpg">
                <?php endif; ?>

                <?php if($url->post_mime_type == 'image/png') : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/png.svg" alt="Картинка png">
                <?php endif; ?>

            <?php endforeach; ?>

            <?= get_field("doc_title"); ?>
        </a>
    </td>
    <td><?= substr(get_field("doc_validFromDate"),0,10) ; ?></td>
    <td><?= substr(get_field("doc_publishedAt"), 0, 10); ?></td>
    <td style="text-align: center">
        <?php if(!empty($media)) { ?>
            <?php foreach($media as $url):?>
                <a href="<?= $url->guid; ?>" download><img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" class="api-download" alt="Скачать документ"></a>
            <?php endforeach; ?>

            <?php
        } ?>
    </td>
</tr>