<?php
/**
 * Template Name: Contact Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsconstruct
 */

$contact_lead_in        = get_field('contact_lead_in');

get_header();
?>

  <article id="contact">
    <div class="container">
      <row>
        <div class="col-sm-12">
          <p><?php echo $contact_lead_in; ?></p>
        </div>
      <?php
        echo do_shortcode( '[contact-form-7 id="100" title="Primary Contact Form"]' );
       ?>
     </row>
  </div>
 </article>

<?php
get_footer();
