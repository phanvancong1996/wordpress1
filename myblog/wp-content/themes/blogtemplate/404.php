<?php get_header(); ?>
			<div id="content">
				<div class="container">
						<div class="break">
						<?php if(function_exists('yoast_breadcrumb'))
							{
								yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ',' </p>');
							}
						 ?>
						
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-9 wow bounceInUp" data-wow-delay="0.3s">
							
							<div class="post-news post-news-single">
								
										<h1 class="singke-title">Trang không tồn tại</h1>
										
										<article class="post-content" >
											<p>Trang không tồn tại , vui lòng về trang chủ. <a href="<?php bloginfo('url'); ?>">Trang chủ</a></p>
										</article>										
											
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 wow bounceInUp" data-wow-delay="0.3s">
							<div class="sidebar">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>