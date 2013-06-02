
<?php if ( is_home() || is_404() || is_category() || is_day() || is_month() ||
    is_year() || is_search() || is_paged() || is_tag() ) {
    ?>
    <?php if ( !dynamic_sidebar('For Tag Cloud widget') ) : ?>
    <?php endif; ?>
<?php } ?>
<hr />
<div class="footer">
    <p class="text-center"><small>&copy; Apium Technologies LTD 2013</small></p>
</div>
</div>
<?php wp_footer(); ?>

<!-- Javascrip and Jquery -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript">
    $('.carousel').carousel();
</script>
</body>
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
</html>
