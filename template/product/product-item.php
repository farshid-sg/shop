<?php
global $product;
?>
<div class="product-item">
    <div class="product-item-img parent-img">
        <?php
        if(has_post_thumbnail()){
            the_post_thumbnail('prodcut', ['class'=>'img-cover'] );
        }else{
            ?>
            <img src="<?= SHOP_TDU?>assets/img/product-1.png" class="img-cover" alt="<?php the_title() ?>">
            <?php
        }
        ?>
    </div>
    <div class="product-item-content">
        <a href="" class="product-item-title main-title">
            <span></span>
            <?php the_title() ?>
        </a>
        <?php 
        $collection = get_post_meta(get_the_ID(),'collection',true);
        if($collection):
        ?>
        <div class="product-item-collection">
            مجموعه <?php echo $collection;?> جلدی
        </div>
        <?php endif; ?>
        <div class="product-item-cart">
            <div class="product-item-price">
                <?php if($product->sale_price): ?>
                <div class="product-item-price-off">
                    <del><?php echo number_format($product->regular_price);?></del>
                    <span><?php echo product_percentage($product);?></span>
                </div>
                <div class="product-item-price-main">
                     <span class="product-price"><?php echo number_format($product->regular_price);?></span>
                    <span>تومان</span>
                </div>
                <?php else: 
                    if(intval($product->regular_price)):
                ?>
                <div class="product-item-price-main">
                    <span class="product-price"><?php echo number_format($product->regular_price);?></span>
                    <span>تومان</span>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <div>
                <a href="" class="shopping-cart-btn">
                <svg id="cart" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M5.88798 17.2745C5.12904 17.2745 4.5138 17.8898 4.5138 18.6487C4.5138 19.4077 5.12904 20.0229 5.88798 20.0229C6.64692 20.0229 7.26216 19.4077 7.26216 18.6487C7.26216 17.8898 6.64692 17.2745 5.88798 17.2745ZM3.33594 18.6487C3.33594 17.2393 4.47853 16.0967 5.88798 16.0967C7.29743 16.0967 8.44002 17.2393 8.44002 18.6487C8.44002 20.0582 7.29743 21.2008 5.88798 21.2008C4.47853 21.2008 3.33594 20.0582 3.33594 18.6487Z" fill="#FF6901"/>
                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M16.6868 17.2745C15.9279 17.2745 15.3126 17.8898 15.3126 18.6487C15.3126 19.4077 15.9279 20.0229 16.6868 20.0229C17.4457 20.0229 18.061 19.4077 18.061 18.6487C18.061 17.8898 17.4457 17.2745 16.6868 17.2745ZM14.1348 18.6487C14.1348 17.2393 15.2774 16.0967 16.6868 16.0967C18.0963 16.0967 19.2389 17.2393 19.2389 18.6487C19.2389 20.0582 18.0963 21.2008 16.6868 21.2008C15.2774 21.2008 14.1348 20.0582 14.1348 18.6487Z" fill="#FF6901"/>
                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M3.33594 2.94538C3.33594 2.62012 3.59961 2.35645 3.92487 2.35645H5.88798C6.21324 2.35645 6.47691 2.62012 6.47691 2.94538V16.0982H16.6851C17.0103 16.0982 17.274 16.3619 17.274 16.6871C17.274 17.0124 17.0103 17.2761 16.6851 17.2761H5.88798C5.56272 17.2761 5.29905 17.0124 5.29905 16.6871V3.53431H3.92487C3.59961 3.53431 3.33594 3.27064 3.33594 2.94538Z" fill="#FF6901"/>
                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M5.3023 4.86633C5.32548 4.5419 5.60727 4.29768 5.9317 4.32086L19.6735 5.30241C19.8365 5.31405 19.9873 5.3929 20.0899 5.52008C20.1925 5.64727 20.2376 5.81137 20.2145 5.97314L19.233 12.844C19.1915 13.1342 18.943 13.3497 18.65 13.3497H5.88974C5.56448 13.3497 5.30081 13.086 5.30081 12.7607C5.30081 12.4355 5.56448 12.1718 5.88974 12.1718H18.1392L18.9591 6.43225L5.84778 5.49573C5.52335 5.47256 5.27913 5.19077 5.3023 4.86633Z" fill="#FF6901"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>