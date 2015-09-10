<?php
$middleEastCountries = array(
	'BH', 'IR', 'IQ', 'IL', 'JO', 'KW', 'LB', 'OM', 'PS', 'QA', 'SA', 'SY', 'AE', 'YE', 'EG', 'TR'
);
$visitorCountry = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

$visitorCountry = $visitorCountry['geoplugin_countryCode'];
echo $visitorCountry;
echo '<br />';
if( in_array( $visitorCountry, $middleEastCountries ) ) {
	echo 'You are in Middle East';
} else {
	echo 'You are out of Middle East';
}
