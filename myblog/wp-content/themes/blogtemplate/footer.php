<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp" data-wow-delay="0.3s">
							<div class="block-footer">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=page&p=2'); ?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
									<?php endwhile; wp_reset_postdata(); ?>
							
								
								<a href="<?php the_permalink(); ?>" class="readmore">Xem thêm</a>
							</div> 
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp" data-wow-delay="0.3s">
							<div class="block-footer">
								<h3>Chuyên mục</h3>
								<ul>
									<?php
                    $args = array(
                        'child_of'  => 0,
                        'orderby'    => 'id',
                    );
                    $categories = get_categories( $args );
                    foreach ( $categories as $category ) { ?>

                    <li>
                       <a href="<?php echo get_term_link($category->slug, 'category');?>"><?php echo $category->name;?>
                       </a>
                    </li>

                    <?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp" data-wow-delay="0.3s">
							<div class="block-footer">
								<h3>Liên hệ</h3>
								<p>Điện thoại: 01644875769</p>
								<p>Email: phanvancong7@gmail.com</p>
								<p>Lên hệ với tôi hay <a href="<?php bloginfo('url'); ?>/lien-he" title="">Click</a> vào đây ?</p>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright wow bounceInUp" data-wow-delay="0.3s">
					<p>Bản quyền thuộc về Công Phan </p>
				</div>
			</footer>
		</div>
		<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/main1.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/wow.min.js"></script>
		<?php wp_footer(); ?>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0]; 
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html> 