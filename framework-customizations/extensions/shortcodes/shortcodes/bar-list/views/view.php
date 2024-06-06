<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="pir-disclosure">
    <div class="pir-container">
        <ul class="pir-disclosure__list">

            <?php $my_posts = get_posts(array(
                'posts_per_page' => -1,
                'tag' => '1 Published'
            ));
            $save_posts_link = array();

            foreach ($my_posts as $post1) {
                array_push($save_posts_link, array($post1->post_content, $post1->guid));
            }
            $barsLink = '';
            ?>

            <?php foreach ($atts['bar_list_add'] as $bars): ?>
                <li>
                    <?php
                    $barsLink = $bars['bar_list_link'];
                        foreach ($save_posts_link as $link) {
                            if ($link[0] == $bars['bar_list_name']) {
                                $barsLink = $link[1];
                                break;
                            }
                        }
                    ?>

                    <a href="<?= $barsLink ?>">

                        <?= $bars['bar_list_name'] ?>
                        <span class="pir-disclosure__list-label"><?= $bars['bar_list_price'] ?></span>
                    </a>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

