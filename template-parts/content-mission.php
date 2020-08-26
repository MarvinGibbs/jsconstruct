<?php
/**
 * Template part for displaying landing page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

  // Advanced Custom Fields
  $company_title        = get_field('company_title');
  $company_description  = get_field('company_description');
  $mission_title        = get_field('mission_title');

  $query = new Query(array( 'post_type' => 'mission_statement', 'orderby' => 'post_id', 'order' => 'ASC'));
?>

<!--=============================================>>>>>
= Description and Mission Statement =
===============================================>>>>-->
<section id="mission">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-3">
        <article>
          <h5><?php echo $company_title; ?></h5>
          <p><?php echo $company_description ?></p>
          <h6><?php echo $mission_title; ?></h6>
          <?php
            while($query->loop()) :
              $query->getContent();
            endwhile;
            $query->reset();
          ?>
        </article>
      </div><!-- .col-lg-6 offset-lg-3 -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- #mission -->
