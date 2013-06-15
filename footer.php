
<?php if ( is_home() || is_404() || is_category() || is_day() || is_month() ||
    is_year() || is_search() || is_paged() || is_tag() ) {
    ?>
    <?php if ( !dynamic_sidebar('For Tag Cloud widget') ) : ?>
    <?php endif; ?>
<?php } ?>


<div class="footer">
    <p class="text-center"><small>&copy; Apium Technologies LTD 2013</small></p>
</div>
</div>
<?php wp_footer(); ?>

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo get_template_directory_uri() ?>/lib/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-transition.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-alert.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-modal.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-dropdown.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-tab.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-tooltip.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-popover.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-button.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-collapse.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-carousel.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/bootstrap-typeahead.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/lib/angular/angular.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/angular/angular-resource.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/angular/angular-ui.min.js"></script>



<script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/services.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/dummyController.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/filters.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/directives.js"></script>


<script>
    !function ($) {
        $(function(){
            // carousel demo
            $('.myCarousel').carousel()
        })
    }(window.jQuery)
</script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/holder/holder.js"></script>
</body>
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
</html>
