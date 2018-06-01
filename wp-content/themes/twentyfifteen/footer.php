<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer" class="footer">
    <div class="container inner-wrapper">
        <?php
        if ( function_exists('dynamic_sidebar') )
            dynamic_sidebar('widget-copyright');
        ?>
    </div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
