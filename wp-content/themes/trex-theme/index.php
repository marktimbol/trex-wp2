<?php 
$middleEastCountries = array(
	'BH', 'IR', 'IQ', 'IL', 'JO', 'KW', 'LB', 'OM', 'PS', 'QA', 'SA', 'SY', 'AE', 'YE', 'EG', 'TR'
);
$visitorCountryData = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$visitorCountry = $visitorCountryData['geoplugin_countryCode'];

get_header() ?>

	<div class="row">
		<div class="col-md-12">
			<div class="main-slideshow">
				<?php
					if( in_array($visitorCountry, $middleEastCountries) ) {
						layerslider(3);
					} else {
						layerslider(1);
					}
				?>
			</div>
		</div>
	</div>

	<div class="services-container">
		<div class="row">
			<div class="col-md-12">
				<div class="services">
					<?php
						$args = array(
							'post_type' => 'page',
							'post__in' => array(12, 14, 16),
							'orderby' => 'DATE',
							'order'	=> 'ASC'
							);
						$query = new WP_Query($args);

						if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-md-4">
								<div class="card">
									<div class="card-image">
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
										<img src="<?=$image[0]?>" alt="<?=get_the_title(); ?>" title="<?=get_the_title();?>" />
										<span class="card-title"><?=the_title();?></span>
									</div>

									<div class="card-content">
										<?php the_excerpt(); ?>
									</div>
		 
									<div class="card-action">
										<p class="read-more">
											<a href="<?php the_permalink(); ?>" class="btn btn-sm btn-danger waves-effect waves-light">Read more</a>
										</p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>

	<div class="business-network-container">
		<h2 class="text-center trex-title">Business Network</h2>

		<div id="world-map" style="width: 100%; height: 600px"></div>
	</div>

<?php get_footer(); ?>