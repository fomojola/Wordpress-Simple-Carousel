<?php
/**
 * @package Simple Carousel
 * @version 1.0.0
 */
/*
Plugin Name: Simple Carousel
Plugin URI: http://www.ideasynthesis.com/projects/wordpress/simple-carousel
Description: Add a simple jquery image carousel to your website using the [simple-carousel] shortcode.
Author: IdeaSynthesis LLC
Version: 1.0.0
Author URI: http://www.ideasynthesis.com/projects/wordpress/simple-carousel
*/
if ( !function_exists( 'add_action' ) ) {
  echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
  exit;
}

function simple_carousel_init() {
  wp_enqueue_script('jquery.carousel.js', plugin_dir_url( __FILE__ ) . 'jquery.carousel.js', array('jquery'), false, true);
}

function simple_carousel_render($atts, $content) {
  $atts = shortcode_atts(array('circular' => "true",
			       'vertical' => "false",
			       'container' => '',
			       'class' => '',
			       'height' => '',
			       'width' => '',
			       'item' => '',
			       'visible' => '1',
			       'auto' => 3000,
			       'img' => ''), $atts);
  
  $val = "<script type=\"text/javascript\">jQuery(document).ready(function(){ jQuery(\"#".$atts['container'] . "\").jCarouselLite({ circular: ".$atts['circular'].", vertical: " . $atts['vertical'] . ", container: \"#".$atts['container']."-container\", item: \".".$atts['item']."\", visible: ".$atts['visible'].", auto: ".$atts['auto']." });  });</script>";

  $imgs = explode('|', $atts['img']);
  $val = $val . "<div style=\"margin: 0 0 0 0; padding: 0 0 0 0;\" id=\"".$atts['container']."\"><div id=\"".$atts['container'] . "-container\" style=\"padding: 0 0 0 0; margin: 0 0 0 0; overflow:hidden\">";
  foreach($imgs as $img){
    $val = $val . "<img class=\"".$atts['class']." ".$atts['item'] . "\" src=\"".$img."\" width=\"".$atts['width']."\" height=\"".$atts['height']."\" />";
  }
  $val = $val . "</div></div>";
  return $val;
}

add_shortcode('simple_carousel', 'simple_carousel_render');
add_action( 'init', 'simple_carousel_init' );