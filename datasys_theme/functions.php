<?php
function datasys() {
    register_nav_menus(array(
       'main' => 'main',
       'internal' => 'internal'
    ));
    add_theme_support('post-thumbnails');
    add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
}
function __get_page(){
    $page = "";
      if(is_home()){
        $page = "index";
      }else{
        if(get_post_type( get_the_id() ) == "post"){
          $page = "blog";
        }else{
          $page = get_the_title('');
            switch ($page) {
                case "Blog":
                    $page = "blog";
                    break;
            }
        }
      }
    return $page;
}


add_action('init', 'datasys');