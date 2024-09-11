<?php 
add_action('wp_ajax_get_product','get_products');
add_action('wp_ajax_nopriv_get_product','get_products');

function get_products(){
    $age_range = sanitize_text_field($_POST['age_range']);
    ob_start();
    get_template_part("template/product/product-slider",null,['age_range'=>$age_range]);
    $contents = ob_get_contents();
    ob_end_clean();
    wp_send_json(["result"=>$contents,'post'=>$_POST]);
}