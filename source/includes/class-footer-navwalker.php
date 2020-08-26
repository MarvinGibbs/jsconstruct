<?php

/* class-footer-navwalker */

class Footer_Navwalker extends Walker_Nav_Menu {

  function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
    /*
    * User can pass classes through WP_Nav_Menu_Args 'li_class'
    */
    $li_class_set = isset($args->li_class);
    $li_classes = $li_class_set ? preg_split('/\s+/', $args->li_class) : array();

    $item_classes = empty( $item->classes ) ? array() : (array) $item->classes;

    $split_on_spaces = function ( $class ) {
      return preg_split( '/\s+/', $class );
    };
    $classes = array_merge($this->flatten( array_map( $split_on_spaces, $item_classes ) ), $li_classes);

    if ( in_array( 'current-menu-item', $classes, true ) ||
         in_array( 'current-menu-parent', $classes, true ) ) {
      $classes[] = 'active';
    }

    $output .= "<li class='". implode(" ", $classes) . "'>";

    $is_link = $item->url && $item->url != '#';

    $output .= $is_link ? '<a href="' . $item->url . '">' : '<span>';

    $output .= $item->title;

    $output .= $is_link ? '</a>' : '</span>';
  }

  /**
   * Flattens a multidimensional array to a simple array.
   *
   * @param array $array a multidimensional array.
   *
   * @return array a simple array
   */
  public function flatten( $array ) {
    $result = array();
    foreach ( $array as $element ) {
      if ( is_array( $element ) ) {
        array_push( $result, ...$this->flatten( $element ) );
      } else {
        $result[] = $element;
      }
    }
    return $result;
  }

}

 ?>
