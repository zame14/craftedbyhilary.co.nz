<?php
vc_map( array(
    "name" => __("Home Banner"),
    "base" => "cbh_home_banner",
    "category" => __('Content'),
    'icon' => 'icon-wpb-single-image',
    'description' => 'Banner for the home page',
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __("Logo"),
            "param_name" => "logo",
        ),
        array(
            "type" => "textarea",
            "heading" => __("Company Description"),
            "param_name" => "description",
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Background Image"),
            "param_name" => "image",
        ),
    )
));
add_shortcode('cbh_home_banner', 'homeBanner');
function homeBanner($atts) {
    $args = shortcode_atts( array(
        'description' => '',
        'logo' => '',
        'image' => '',
    ), $atts);
    $company_description = $args['description'];
    $logo = intval($args['logo']);
    $logoImage = '';
    if($logo) {
        //$image = wp_get_attachment_image_src($banner, 'inside_banner');
        //$backgroundImage = $image[0];
        $logoImage = wp_get_attachment_image($logo,'');
    }
    $image = intval($args['image']);
    $imageUrl = '';
    $imageHeight = '';
    if($image) {
        $image = wp_get_attachment_image_src($image, '');
        $imageUrl = $image[0];
        $imageHeight = $image[2];
    }
    $html = '
    <div class="home-banner" style="background-image: url(\'' . $imageUrl . '\');">
        <div class="inner-wrapper">
            <div class="logo-big">
                ' . $logoImage . '
            </div>
            <h1>' . $company_description . '</h1>
        </div>  
        <div class="overlay"></div>     
    </div>';
    return $html;
}