<?php
/**
 * Template Name: Gallery Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

get_header();
?>

  <article id="gallery">
      <div class="container">
        <row>
          <div class="col-sm-12 pt-4">
            <?php
            if ( function_exists( 'envira_gallery' ) ) {
              envira_gallery( 'project-images', 'slug' );
            }
            ?>
          </div>
        </row>
      </div><!-- .container -->
  </article><!-- #gallery -->
<?php
 ?>

<?php
get_footer();
