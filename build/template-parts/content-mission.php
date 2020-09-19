<?php
/**
 * Template part for displaying Mission title and stateents on landing page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

  $query = new Query(array( 'post_type' => 'mission_title', 'orderby' => 'post_id', 'order' => 'ASC'));

  while($query->loop()) :?>
    <h6><?php $query->getTitle() ?></h6>
  <?php
  endwhile;
  $query->reset();

  $query = new Query(array( 'post_type' => 'mission_statement', 'orderby' => 'post_id', 'order' => 'ASC'));

  while($query->loop()) :
    $query->getContent();
  endwhile;
  $query->reset();
?>
