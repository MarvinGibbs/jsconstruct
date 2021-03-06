<?php
/**
 * Template Name: About Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

get_header();
?>
  <!--=============================================>>>>>
  = About Us =
  ===============================================>>>>-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 offset-sm-1">


          <?php get_template_part('template-parts/content', 'display-team', array( 'post_type' => 'team' )); ?>

          <?php get_template_part('template-parts/content', 'display-members', array( 'post_type' => 'owner' )); ?>

          <?php get_template_part('template-parts/content', 'display-members', array( 'post_type' => 'employee' )); ?>

        </div><!-- .col-sm-8 offset-sm-2 -->
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- #mission -->


<?php
get_footer();
