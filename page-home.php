<?php
/**
 * Template Name: Home Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */


get_header(); ?>


<!--=============================================>>>>>
= Description and Mission Statement =
===============================================>>>>-->
<section id="mission">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-3">
        <article>
          <?php get_template_part('template-parts/content', 'company'); ?>
          <?php get_template_part('template-parts/content', 'mission') ?>
        </article>
      </div><!-- .col-lg-6 offset-lg-3 -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- #mission -->


<?php get_footer(); ?>
