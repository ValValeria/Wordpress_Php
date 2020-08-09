<?php

if (! function_exists("validate_form_input")){

  function validate_form_input(Array $data){

      $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

      $isValid= $email && strlen($data['message'])>10 && strlen($data['message'])<200;

      if ($isValid) {
          try{
            mail(
                "valeria18ua@ukr.net",
                "New message",
                $data['message'],
                join("\r\n",[
                    "From:  webmaster@dg.con",
                    "Reply-To: webrnaster@dg.con",
                    "X-Mailer: PHP/".phpversion() 
                ])
            );
          }catch (Throwable $e){

          }
         
      }

      return $isValid;
  }

}


add_action("wp_enqueue_scripts",'resourcesFun');

function resourcesFun() {
    wp_enqueue_style("style",get_stylesheet_uri());
}

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

add_theme_support( 'post-thumbnails' );

add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


?>