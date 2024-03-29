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
									<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<?php setpostview(get_the_id()); ?>
										<h1 class="singke-title"><?php the_title(); ?></h1>
										<div class="meta">
											<span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span>
											<span>Lượt xem: <?php echo getpostviews(get_the_id()); ?> lượt</span>
										</div>
										<article class="post-content" >
											<?php the_content(); ?>
										</article>										
										<div class="like">
											<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
										</div>																			
									<?php endwhile; ?>								
									<?php endif; ?>		
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