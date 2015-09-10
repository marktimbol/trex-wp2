<?php

$middleEastCountries = array(
    'BH', 'IR', 'IQ', 'IL', 'JO', 'KW', 'LB', 'OM', 'PS', 'QA', 'SA', 'SY', 'AE', 'YE', 'EG', 'TR'
);
$visitorCountryData = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

$visitorCountry = $visitorCountryData['geoplugin_countryCode'];

function cleanWordpressHead () {
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    // #5

    add_filter('the_generator', '__return_false');            // #6
    add_filter('show_admin_bar','__return_false');            // #7

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action('after_setup_theme', 'cleanWordpressHead');


// [show-posts id="3"]
function showPartners( $atts ) {
    $atts = shortcode_atts( array(
        'id' => $atts['id']
    ), $atts );

    $args = array(
    	'cat' => $atts['id'],
    	'order' => 'DESC'
    	);

    query_posts($args);
    
    $html = '';

    if( have_posts() ) : 

    	$html .= '<div class="row">';

		    while( have_posts() ) : the_post();

                $showInMiddleEastValue = get_field('show_in_middle_east')[0];
                
                if( $showInMiddleEastValue ) {
                    $class = 'middle-east-content';
                } else {
                    $class = 'international-content';
                }

        
                if( has_post_thumbnail() ) {
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                }

                $html .= '<div class="col-md-2 '.$class.' ">';
                    $html .= '<div class="card">';                  
                        $html .= '<div class="card-image">';
                            $html .= '<img src="'.$image[0].'" alt="" />';
                        $html .= '</div>';
                        $html .= '<div class="card-action">';
                            $html .= '<a href="'.get_field('website_url').'" target="_blank">Visit Website</a>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';   

       

           


		    endwhile;

    	$html .= '</div>';

    return $html;

    endif;
}

add_shortcode( 'show-partners', 'showPartners' );


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );