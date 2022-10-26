<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paritet
 */
?>
<?php wp_footer(); ?>
<script>

    if ( $.cookie('popupHide')) {
        $('.popup-header').hide();
        $('.pir-nav-wrap').addClass('nav-wrap-top')
    }
</script>
</body>
</html>
