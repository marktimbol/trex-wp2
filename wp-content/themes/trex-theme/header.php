<?php
$middleEastCountries = array(
	'BH', 'IR', 'IQ', 'IL', 'JO', 'KW', 'LB', 'OM', 'PS', 'QA', 'SA', 'SY', 'AE', 'YE', 'EG', 'TR'
);
$visitorCountryData = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$visitorCountry = $visitorCountryData['geoplugin_countryCode'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/vendor.css" />
	<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/app.css" />

	<style type="text/css">

		.middle-east-content {
			display: block;
		}

		<?php 
		if( in_array($visitorCountry, $middleEastCountries) ) { ?>
			.international-content {
				display: none;
			}
		<?php } ?>



	</style>
	<?= wp_head(); ?>
</head>
<body>
	
	<div class="top-nav-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="top-nav float-right">
						<ul>
							<li><i class="fa fa-phone"></i> +971 4 331 3103</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:sales@trex.ae">sales@trex.ae</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="container main-container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<div class="row">
						<div class="col-md-3 col-xs-4">
							<h1 class="logo">
								<a href="<?=get_bloginfo('url');?>">
									<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/logo.png" alt="TREX General Trading LLC" title="TREX General Trading LLC" class="img-responsive" />
								</a>								
							</h1>
						</div>

						<div class="col-md-9 col-xs-8">
							<nav class="main-nav float-right">
								<?php wp_nav_menu( array('menu' => 'MainMenu' )); ?>								
							</nav>
						</div>
					</div>
				</header>
