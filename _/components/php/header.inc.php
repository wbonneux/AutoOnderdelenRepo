<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index.html"><?php echo $lang['MENU_TITLE']; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><?php echo $lang['MENU_COMPANY']; ?></a></li>
            <!-- <li><a href="zoekopdracht.php"><?php //echo $lang['MENU_SEARCHREQUEST']; ?></a></li> -->
            <li><a href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
<!--             <li class="dropdown"> -->
<!--               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a> -->
<!--               <ul class="dropdown-menu"> -->
<!--                 <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li> -->
<!--                 <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li> -->
<!--                 <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li> -->
<!--                 <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li> -->
<!--                 <li><a href="portfolio-item.html">Single Portfolio Item</a></li> -->
<!--               </ul> -->
<!--             </li> -->
<!--             <li class="dropdown"> -->
<!--               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a> -->
<!--               <ul class="dropdown-menu"> -->
<!--                 <li><a href="blog-home-1.html">Blog Home 1</a></li> -->
<!--                 <li><a href="blog-home-2.html">Blog Home 2</a></li> -->
<!--                 <li><a href="blog-post.html">Blog Post</a></li> -->
<!--               </ul> -->
<!--             </li> -->
<!--             <li class="dropdown"> -->
<!--               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a> -->
<!--               <ul class="dropdown-menu"> -->
<!--                 <li><a href="full-width.html">Full Width Page</a></li> -->
<!--                 <li><a href="sidebar.html">Sidebar Page</a></li> -->
<!--                 <li><a href="faq.html">FAQ</a></li> -->
<!--                 <li><a href="404.html">404</a></li> -->
<!--                 <li><a href="pricing.html">Pricing Table</a></li> -->
<!--               </ul> -->
<!--             </li> -->
<!--             <li><a href="index.php?lang=en""><img src="images/flags/en.png" /></a></li> -->
            <li><a href="index.php?lang=nl"><img src="images/flags/es.png" /></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>