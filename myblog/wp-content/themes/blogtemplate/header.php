<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/stylel1.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wallpaper">
			<header>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<div class="logo">
									<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo1.png" alt="Blog Công Phan"></a>
									<?php if(is_home()){ ?>
									<h1><?php bloginfo('name'); ?></h1>
									<?php } ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<div class="banner">
									<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/banner1.png" alt="baner quảng cáo"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-nav">
					<div class="container">
						<div class="menu-header wow bounceInUp">
						<?php wp_nav_menu( 
								array( 
									'theme_location' => 'topmenu', 
									'container' => 'false', 
									'menu_id' => 'top--menu', 
									'menu_class' => 'top-menu'
									) 
						       ); ?>
						</div>
					</div>
				</div>
			</header>