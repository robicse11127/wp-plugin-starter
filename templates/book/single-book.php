<?php
/**
 * Book Single Post Page Template
 * @since 1.0.0
 */
get_header();
?>
<div class="wpps-container">
    <?php while( have_posts() ) : the_post(); ?>
        <!-- Do your stuffs here -->
    <?php endwhile; ?>
</div>
<?php
get_footer();