<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<div class="doc-widget">
    <h3 class="doc-widget__title"><?= $atts['doc_widget_title'] ?></h3>
    <?php foreach ($atts['doc_widget'] as $docsListWidget): ?>
        <a href="<?= $docsListWidget['doc_widget_file']['url'] ?>" download class="doc-widget__item">
            <img src="<?= $docsListWidget['doc_widget_icon']['url'] ?>" alt="doc">
            <?= $docsListWidget['doc_widget_name'] ?>
        </a>
    <?php endforeach; ?>
    <a href="<?= $atts['doc_widget_btn_file']['url'] ?>" download class="doc-widget__download-all"><?= $atts['doc_widget_btn_name'] ?></a>

</div>

