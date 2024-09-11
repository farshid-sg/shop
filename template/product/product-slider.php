<?php

$age_range = $args['age_range'];

$products = new WP_Query([
    'post_type'=>     'product',
    'posts_per_page'=> 4,
    'post_status' => 'publish',
    'meta_query' =>[
        [
            'key' => 'age_range',
            'value' => $age_range
        ]
    ]
]);
if($products->have_posts()):
?>
<div class="swiper product-slider">
    <div class="swiper-wrapper">
        <?php while($products->have_posts()): $products->the_post();?>
        <div class="swiper-slide">
            <?php get_template_part("template/product/product-item"); ?>
        </div>
        <?php endwhile;wp_reset_postdata(); ?>
    </div>
    <div class="swiper-pagination swiper-products-pagination"></div>
</div>
<?php else: ?>
    <div class="not-found">محصولی یافت نشد !!!!</div>
<?php endif; ?>