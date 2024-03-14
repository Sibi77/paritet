<?php
/*
Template Name: rules
Template Post Type: post, rules
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i><?= get_field("full_name"); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">

        <?php
       ?>
        <h1 class="disclosure-card__title"><?= get_field("short_name"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?= get_field("full_name"); ?></div>
        </div>
    </div>
    <div class="pir-table">
        <div class="pir-container">
            <h2 class="pir-content__title"">История изменений</h2>
            <div class="pir-table">
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

                                <td>Перенесено в архив</td>

                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            $id =  get_field("issuer_id");
                            global $post;

                            $myposts = get_posts( [
                                'category_name' => 'rules',
                                'post_type' => 'post',
                                'tag' => $id,
                            ] );

                            foreach( $myposts as $post ){setup_postdata( $post ); ?>
                                <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                    <td><?php the_title(); ?></td>
                                    <td>13.10.2023</td>
                                    <td>15.11.2023</td>

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
    </div>
</section>


<?php get_footer(); ?>

