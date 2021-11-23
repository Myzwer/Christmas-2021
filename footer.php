<?php
/**
 * The template for displaying the footer on the site.
 * It does not use tailwind, it's SCSS file can be found at ./assets/src/sass/components/footer.scss.
 * The "Footer Columns" generated by PHP can be configured in functions.php.
 *
 * Contains the footer of the site as well as WP's required code and the closing body and HTML tags.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */
?>

<!--Start Footer-->
<footer class="footer">
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><img src="https://foothillschristmas.com/wp-content/uploads/2021/11/Footer-Icon.png" alt=""></a>
    </div>

    <!--Wordpress Generated Link Lists-->
    <?php wp_nav_menu(array('theme_location' => 'footer-column-1')); ?>
    <!--Copyright Info-->
    <p class = "copyright">© <?php echo date("Y"); ?> Foothills Church. You Belong Here.</p>
</footer>
<!--End Footer-->


<!--Wordpress Requires This-->
<?php wp_footer(); ?>

</body>
</html>

