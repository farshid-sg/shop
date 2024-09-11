<?php
define('SHOP_TDU',get_template_directory_uri().'/');
define('SHOP_TD',get_template_directory().'/');

//load Scripts and Styles
function shop_script(){
    //css
    wp_enqueue_style('swiper',SHOP_TDU.'assets/css/swiper.css',[],'1.1.1');
    wp_enqueue_style('custom-style',SHOP_TDU.'assets/css/style.css',[],'1.0.0');
    //js
    wp_enqueue_script('swiper',SHOP_TDU.'assets/js/swiper.js',[],'1.0.0',true);
    wp_enqueue_script('app',SHOP_TDU.'assets/js/app.js',['jquery'],'1.0.0',true);
    wp_localize_script( 'app', "globalVar", [
        'admin_url' => admin_url( "admin-ajax.php" ),
    ]);
}
add_action('wp_enqueue_scripts','shop_script');

//Theme Setup
function shop_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    //woocommerce
    add_theme_support('woocommerce');
    add_theme_support('wc_product_gallery_zoom');
    add_theme_support('wc_product_gallery_lightbox');
    add_theme_support('wc_product_gallery_slider');
    add_image_size('prodcut',266,266,true);
}
add_action('after_setup_theme','shop_setup');

add_filter('show_admin_bar', '__return_false');

//include ajax
get_template_part("inc/ajax/product");

//include meta
get_template_part("inc/meta/product");


// get product percentage
function product_percentage($product){
    $price=intval($product->regular_price);
    $sale=intval($product->sale_price);
    $saving=$price - $sale;
    $percentage=round(($saving / $price) * 100);
    return '٪'.$percentage;
}
