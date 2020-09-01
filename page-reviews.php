<?php
/**
 * Template Name: Reviews Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

get_header();
?>

  <article id="reviews">
    <div class="container">
      <row>
        <div class="col-sm-12 pt-4">
        <?php
          echo do_shortcode( '[reviews_rating]' );
         ?>
     </div><!-- .col-sm-12 -->
     </row>
  </div>
 </article>

<?php
get_footer();
