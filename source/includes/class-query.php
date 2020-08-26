<?php

class Query {

  private $loop;

  function __construct($query_array) {
    $this->$loop = new WP_Query($query_array);
  }



  function loop() {
    $keep_looping = $this->$loop != null ?
      $this->$loop->have_posts() : false;
    if ($keep_looping) {
      $this->$loop->the_post();
    }
    return $keep_looping;
  }

  function getTitle() {
    the_title();
  }


  function getContent() {
    the_content();
  }

  function postThumbnail($size_array) {
    if (has_post_thumbnail()) {
      the_post_thumbnail($size_array);
    }
  }

  function reset() {
    wp_reset_postdata();
  }

};
 ?>
