<?php

class MemberQuery extends Query {

  public function __construct($post_type) {
    parent::__construct(array('post_type' => $post_type, 'orderby' => 'post_id', 'order' => 'ASC'));
  }
};
 ?>
