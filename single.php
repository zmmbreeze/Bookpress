<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
        <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template( '', true );
        ?>
    <?php endwhile; // end of the loop. ?>
</div><!-- .main -->
<?php get_sidebar(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/google-code-prettify/prettify.js"></script>
<script>
    (function() {
        var pres = document.getElementsByTagName('pre');
        for (var i=0,l=pres.length; i<l; i++) {
            pres[i].className = 'prettyprint';
        }
        prettyPrint();
    })();
</script>
<?php get_footer(); ?>
