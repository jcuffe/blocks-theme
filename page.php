<?php

get_header();

if (have_posts()) {

  // Load posts loop.
  while (have_posts()) {
    the_post();
    the_content();
  }
} else {
  get_template_part('template-parts/content/content', 'none');
}

get_footer();
