<?php
/**
 * Template part for displaying company title and description on landing page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

  $query = new Query(array( 'post_type' => 'company', 'orderby' => 'post_id', 'order' => 'ASC'));

  while($query->loop()) : ?>
    <h5><?php $query->getTitle(); ?></h5>
    <p><?php $query->getContent(); ?></p>
  <?php
  endwhile;
  $query->reset();
?>
