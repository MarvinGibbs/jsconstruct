<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jsconstruct
 */


?>




<?php wp_footer(); ?>

      <footer id="colophon" class="site-footer mt-auto">
         <div class="container-fluid pt-4">
           <row>
             <div class="col-sm-7 offset-sm-2" >
              <?php
                wp_nav_menu( array(
                  'theme_location'  => 'footer',
                  'depth'           => 1,
                  'container'       => 'nav',
                  'menu_class'      => 'list-unstyled list-inline',
                  'li_class'        => 'list-inline-item',
                  'walker'          => new Footer_Navwalker(),
                ));

               ?>
          </div><!-- .col-sm-7 .offset-sm-2 -->
         </row>
        </div><!-- .container-fluid .text-center .pt4 -->
      </footer><!-- #colophon -->

    </div><!-- .hero-body -->
  </div><!-- #page .site .hero -->

  <!-- CORE JAVASCRIPT -->
  <script src="<?php bloginfo('template_directory') ?>/node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_directory') ?>/node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

  <script src="<?php bloginfo('template_directory') ?>/build/js/main-min.js" type="text/javascript"></script>

</body>
</html>
