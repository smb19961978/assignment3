<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    
    <!--link to css file-->
    <link rel="stylesheet" type="text/css" href=" <?php bloginfo('stylesheet_url');?>" />
    
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat&display=swap" rel="stylesheet">
          
          
    <?php wp_head(); ?>
</head>
    
    <body>
        
            <div class="container">
                <header>
                <div class="row">
                    <div class="three columns">
                        <h1 id="header"><a href="bryanawall.com">Web Interactivity</a></h1>
                    </div>
                
                
                <div class="nine columns">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container-class' => 'menu-header'
                        ));
                    ?>
                    </div>
                </div>
            </div>
        </header>
