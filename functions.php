<?php

add_filter('timber_context', 'add_to_context');
function add_to_context($data){

  $data['menu'] = new TimberMenu();
  $data['categories'] = Timber::get_terms('category', 'show_count=0&title_li=&hide_empty=0&exclude=1');
  return $data;
}

?>
