<!DOCTYPE html>

<html lang="es">
    <head>
        <title>My Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" >
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/reset.css" >
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/responsive.css" >
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100;500,300,700' rel="stylesheet" >
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.slides.min.js"></script>
        
            <script>
                $(function(){
                  $("#slideshow").slidesjs({
                    height: 300,
                    navigation:false                    
                  });
                });
            </script>
       <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div id="logo"><p>My Blog</p><span>By JfZ</span></div>
            <nav>
                <?php wp_nav_menu(
                        array(
                            'container'         => false,
                            'items_wrap'        => '<ul id="menu-top">%3$s</ul>',
                            'theme_location'    => 'menu'
                            )
                    );
                ?> 
              
            </nav>
        </header>