<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package paritet
 */

get_header(); ?>

<div class="page-404">
   <div class="container">
       <div class="page-404__wrap">
           <h1 class="page-404__title">Упс... Ошибка 404</h1>
           <p class="page-404__desk">Такой страницы не существует или она была удалена администратором сайта</p>
           <p class="page-404__desk">
               Попробуйте другие страницы, там есть много интересного
           </p>
           <div class="page-404__btn">
               <a href="/" class="pir-btn">Главная</a>
               <a href="/joint-stock-companies/" class="pir-btn">Эмитентам</a>
               <a href="/vladelczam-czennyh-bumag/" class="pir-btn">Акционерам</a>
           </div>
       </div>
   </div>
</div>

<?php get_footer();
