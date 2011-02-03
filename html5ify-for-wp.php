<?php
/*
Plugin Name: html5ify for WP
Plugin URI: http://nordahl.me/products/HTML5ify
Description: This plugin enable the HTML5 tags &lt;article&gt;, &lt;section&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;aside&gt;, &lt;canvas&gt;, &lt;video&gt;, &lt;audio&gt;, &lt;source&gt;, &lt;hgroup&gt;, &lt;figure&gt;, &lt;figcaption&gt; in your post editor
Version: 1.0.1
Author: Kenneth Nordahl
Author URI: http://nordahl.me
*/ 
add_filter('tiny_mce_before_init', 'my_html5ify_tags');
function my_html5ify_tags($settings) {
  if ( !empty($settings['extended_valid_elements']) )
    $settings['extended_valid_elements'] .= ',';
  else
    $settings['extended_valid_elements'] = '';

  $settings['extended_valid_elements'] .= 'article[*],section[*],header[*],footer[*],aside[*],canvas[*],video[*],audio[*],source[*],hgroup[*],figure[*],figcaption[*]'; // add other HTML 5 tags as needed

  return $settings;
}