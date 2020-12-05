<?php
/**
 * Template part for displaying memmbers team
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

 $query = new MemberQuery($args['post_type']);

 while($query->loop()) :
?>
  <h2><?php $query->getTitle(); ?></h2>

  <div class="row inform">
    <div class="col-sm-4">
      <?php $query->postThumbnail(array(300, 300)); ?>
    </div><!-- .col-sm-4 -->
  </div><!-- .row .inform -->

<?php
  endwhile;

  $query->reset();
?>
