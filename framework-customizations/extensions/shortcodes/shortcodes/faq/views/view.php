<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="faq">
    <div class="pir-container">
        <h2 class="faq__title"><?= $atts['faq_title']?></h2>
        <div id="accordion">
            <?php foreach($atts['faq_add'] as $faq):?>
                <div class="pir-panel-group ">
                    <div class="panel-heading">
                        <?php if (!empty($faq['icon'])): ?>
                            <img src="<?= $faq['icon']['url'] ?>" alt="faq">
                        <?php endif; ?>
                        <?= $faq['question'] ?>
                    </div>

                    <div class="panel-body pir-p1">
                        <?= $faq['answer'] ?>
                        <?php if (!empty($faq['faq_link_add'])): ?>
                            <div class="pir-faq-link">
                                <?php foreach($faq['faq_link_add'] as $link):?>
                                    <a href="<?= $link['url_link'] ?>"><?= $link['name_link'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

