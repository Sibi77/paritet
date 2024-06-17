<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>




<div class="pir-container">
    <div class="pir-search <?php if ($atts['search_margin']) { ?> search_margin_not<?php } ?>">
        <p class="pir-search__desk">
            <?= $atts['search_desk'] ?>
        </p>
        <div class="pir-search__wrap">
            <label class="pir-search__icon" for="pir-search"><img src="<?php bloginfo('template_directory'); ?>/img/icons/search.svg" alt="search"></label>
            <input type="search" id="pir-search" placeholder="<?= $atts['search_placeholder'] ?>" class="pir-search__search">
        </div>
        <?php if($atts['search_filter_additional']){?>

            <div class="addition-filter pir-search__filter-btn" >
                <?php foreach($atts['search_filter_additional'] as $addFilter):?>
                    <a href="<?= $addFilter['search_btn_link'] ?>" data-section = "<?= $addFilter['search_btn_section'] ?>" data-category-slug="<?= $addFilter['search_btn_cat'] ?>" data-sort-key="<?= $addFilter['search_btn_sort'] ?>">
                        <?= $addFilter['search_btn_name'] ?>
                    </a>
                <?php endforeach; ?>

            </div>
        <?php } ?>

        <?php if($atts['search_filter_btn']){?>

            <div class="pir-search__filter-btn pir-search__filter-js" id="<?= $atts['search_filter_id']?>">
                <?php foreach($atts['search_filter_btn'] as $linkbtn):?>
                    <a href="<?= $linkbtn['search_btn_link'] ?>" data-section = "<?= $linkbtn['search_btn_section'] ?>" data-category-slug="<?= $linkbtn['search_btn_cat'] ?>" data-sort-key="<?= $linkbtn['search_btn_sort'] ?>">
                        <?= $linkbtn['search_btn_name'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php } ?>

        <div class="archive-wrap">
            <div class="pir-search__result">Найдено <span class="table-counter""></span></div>
            <?php if($atts['search_archive']){?>
                <a class="link-archive" href="<?= $atts['search_archive'] ?>">Архив</a>
            <?php } ?>

        </div>
    </div>
</div>

