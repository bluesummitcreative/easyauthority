<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><? global $title; ?><? if ($title): ?><?=$title?> <?php echo " | "; bloginfo('name'); ?> <? else: ?><? wp_title('');?><? endif; ?></title>	
<link rel="icon" href="/wp-content/themes/easyauthority/images/favicon.png" type="image/png">
<link rel="stylesheet" href="/wp-content/themes/easyauthority/css/all-stylesheets.css" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
</head>
<body class="home-page">
<div class="page-loader-wrapper page-loader-wrapper-1">
  <div id="preloader_1"> <span></span> <span></span> <span></span> <span></span> <span></span> 
    <!-- preloader_1--> 
  </div>
  <!--page-loader-wrapper-1--> 
</div>
<!--=====================================--> 
<!--============ Navigation =============--> 
<!--=====================================-->
<div class="greyBg header-con col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
      <aside class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo pull-left"><a href="/"><img src="/wp-content/themes/easyauthority/images/logo.png" alt="logo" /></a></div>
        <nav class="navbar navbar-default pull-right">
          <div class="container-fluid">
            <div class="row"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--navbar-header--> 
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="row">
                  <ul class="nav navbar-nav">
					  <?php
						wp_nav_menu( array( 
							'theme_location' => 'my-custom-menu', 
							'container_class' => 'custom-menu-class' ) ); 
						?>
                  </ul>
                  <aside class="social-icons pull-right">
                    <ul>
                      <li><a href="https://www.facebook.com/pg/EasyAuthority/" target="_blank" class="fa fa-facebook"></a></li>
                      <li><a href="https://twitter.com/Easy_Authority" target="_blank" class="fa fa-twitter"></a></li>
                    </ul>
                    <!--social-icons--> 
                  </aside>
                  <!--row--> 
                </div>
                <!--collapse--> 
              </div>
              <!--row--> 
            </div>
            <!--container-fluid--> 
          </div>
          <!--navbar--> 
        </nav>
        <!--header--> 
      </aside>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--greyBg--> 
</div>