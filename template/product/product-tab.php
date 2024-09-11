<section class="tab-section">
    <div class="container">
        <div class="tab-header">
            <div class="tab-nav">
                <div class="tab-nav-img">
                    <img width="80" src="<?= SHOP_TDU?>assets/img/person.svg" alt="">
                </div>
                <div>
                    <h1 class="tab-nav-title">
                        کتاب نوزاد و خردسال
                    </h1>
                    <div class="tab-nav-items">
                        <?php
                        $ageRange = [
                            "0-1"=>"0 تا 1 سال",
                            "1-2"=>"1 تا 2 سال",
                            "2-3"=>"2 تا 3 سال",
                            "3-4"=>"3 تا 4 سال",
                            "4-5"=>"4 تا 5 سال",
                            "5-6"=>"5 تا 6 سال"
                        ];
                        foreach($ageRange as $key=>$index):
                        ?>
                        <button data-range="<?php echo $key ?>" class="tab-nav-item <?php if($key == "0-1")echo "active" ?>"><?php echo $index ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-btn-more tab-btn-more-header">
                <a href="" class="tab-btn-link">
                    <span>فروشگاه خردسالان</span>
                    <span class="arrow-wrapper">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.6582 7.57812C2.6582 7.30198 2.88206 7.07812 3.1582 7.07812H12.0003C12.2765 7.07812 12.5003 7.30198 12.5003 7.57812C12.5003 7.85427 12.2765 8.07812 12.0003 8.07812H3.1582C2.88206 8.07812 2.6582 7.85427 2.6582 7.57812Z" fill="#FF6901"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.80465 7.22457C2.99991 7.02931 3.31649 7.02931 3.51176 7.22457L7.30123 11.014C7.49649 11.2093 7.49649 11.5259 7.30123 11.7212C7.10597 11.9164 6.78939 11.9164 6.59412 11.7212L2.80465 7.93168C2.60939 7.73642 2.60939 7.41983 2.80465 7.22457Z" fill="#FF6901"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.30123 3.43551C7.49649 3.63077 7.49649 3.94735 7.30123 4.14262L3.51176 7.93209C3.31649 8.12735 2.99991 8.12735 2.80465 7.93209C2.60939 7.73683 2.60939 7.42025 2.80465 7.22498L6.59412 3.43551C6.78939 3.24025 7.10597 3.24025 7.30123 3.43551Z" fill="#FF6901"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="container products-container">
        <div class="tab-products-wrapper">
            <div class="loader">
                <img src="<?= SHOP_TDU?>assets/img/ZKZx.gif" width="30" alt="">
            </div>
            <div class="tab-products">
                <?php get_template_part('template/product/product-slider',null,['age_range'=>"0-1"]) ?>
            </div>
        </div>
        <div class="tab-btn-more tab-btn-more-footer">
                <a href="" class="tab-btn-link">
                    <span>فروشگاه خردسالان</span>
                    <span class="arrow-wrapper">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.6582 7.57812C2.6582 7.30198 2.88206 7.07812 3.1582 7.07812H12.0003C12.2765 7.07812 12.5003 7.30198 12.5003 7.57812C12.5003 7.85427 12.2765 8.07812 12.0003 8.07812H3.1582C2.88206 8.07812 2.6582 7.85427 2.6582 7.57812Z" fill="#FF6901"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.80465 7.22457C2.99991 7.02931 3.31649 7.02931 3.51176 7.22457L7.30123 11.014C7.49649 11.2093 7.49649 11.5259 7.30123 11.7212C7.10597 11.9164 6.78939 11.9164 6.59412 11.7212L2.80465 7.93168C2.60939 7.73642 2.60939 7.41983 2.80465 7.22457Z" fill="#FF6901"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.30123 3.43551C7.49649 3.63077 7.49649 3.94735 7.30123 4.14262L3.51176 7.93209C3.31649 8.12735 2.99991 8.12735 2.80465 7.93209C2.60939 7.73683 2.60939 7.42025 2.80465 7.22498L6.59412 3.43551C6.78939 3.24025 7.10597 3.24025 7.30123 3.43551Z" fill="#FF6901"/>
                        </svg>
                    </span>
                </a>
        </div>
    </div>
</section>