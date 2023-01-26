<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo rand(111,999)?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
  

 <nav class="navbar">
      <ul class="navbar-nav">
        <li class="nav-logo">TRC Energy</li>
        <li class="nav-item"><a href="#">Home</a></li>
        <li class="nav-item"><a href="#">About</a></li>
        <li class="nav-item"><a href="#">Products</a></li>
      </ul>
    </nav>

  <div class="image">
  <a href="#">
  <img src="https://lh4.googleusercontent.com/lOIFGWPBOB1wH9PeqEheKtukNZIYT3ikYqonuzZRrMWiz8f9Bu-ER26nHkqHmEk7veid_MPazIa84cab3ImOM7DvZrfW9gSOFrSxBwy55TAKz2EEheyocdxaZk5n3jlkrCebeLqG7sJoyRJNVtPE53RFIpfepAJinY05JgyBybqDFEv6iiVPvhPGscEvFA"  alt="TRC Energy"><a href="#"></a> 
  </a>
  </div>
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>
