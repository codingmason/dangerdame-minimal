<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danger Diary - Veronica Varlow</title>


    <!-- Bootstrap core CSS -->
<!--     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <div class="upper-clouds"></div>
      <div class="panel">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="http://dangerdame.com/about-veronica-varlow/" title="About Veronica Varlow">Hello!</a>
          <a class="blog-nav-item" href="http://dangerdame.com/acts-and-booking/" title="Acts and Booking">On Stage</a>
          <a class="blog-nav-item" href="http://dangerdame.com/product-category/classes/" title="Classes">Classes</a>
          <a class="blog-nav-item" href="http://dangerdame.com/contact/" title="Contact">Contact</a>
          <a class="blog-nav-item" href="http://dangerdame.com/diary/" title="Danger Diary">Danger Diary</a>
        </nav>
      </div>
      <a href="" class="nav-bar-icon" title="Menu"></a>
      <div class="nav-cloud"></div> 

    
    <div class="container">
      <?php if (is_home() ) { ?>
        <div class="blog-header">
          <div class="vv-logo"></div>
          <h1 class="blog-title">Veronica Varlow</h1>
          <div class="danger-diary"></div>
        </div>
      <?php } else { ?>
        <a href="<?php echo get_home_url(); ?>">
          <div class="blog-header">
            <div class="vv-logo"></div>
            <h1 class="blog-title">Veronica Varlow</h1>
            <div class="danger-diary"></div>
          </div>
        </a>
      <?php } ?>
