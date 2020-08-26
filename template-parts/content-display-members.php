<?php
/**
 * Template part for displaying memmbers both owners and employees
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

 $query = new MemberQuery($args['post_type']);

 while($query->loop()) :
?>
  <div class="row inform">
    <div class="col-sm-4">
      <?php $query->postThumbnail(array(200, 200)); ?>
    </div><!-- .col-sm-4 -->
    <div class="col-sm-8 pt-sm-4">
      <h5><?php $query->getTitle(); ?></h5>
      <blockquote><?php  $query->getContent(); ?></blockquote>
    </div><!-- .col-sm-8 -->
  </div><!-- .row .inform -->

<?php
  endwhile;
  
  $query->reset();
?>
