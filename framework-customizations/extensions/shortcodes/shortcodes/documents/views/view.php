<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="pir-document">
    <div class="pir-container">
        <h2 class="pir-title"><?= $atts['doc_title']?></h2>
        <div class="pir-document__wrap">
            <?php foreach($atts['documents'] as $docs):?>
                <div class="pir-document__item">
                    <h3 class="pir-document__title"><?= $docs['doc_list_name']?></h3>
                    <ul class="pir-document__list">
                        <?php foreach($docs['documents_list'] as $docsList):?>
                            <li>
                                <a href="<?= $docsList['doc_list_upload']['url']?>" download>
                                    <img src="<?= $docsList['doc_list_icon']['url']?>" alt="">
                                    <?= $docsList['doc_list_name_doc']?>
                                </a>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                    <a href="<?= $docs['doc_list_link']?>" class="pir-btn pir-btn-white">Посмотреть все формы</a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

