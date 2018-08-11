<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
<body class="home-page">

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
