jQuery(document).ready(function($){
    if($('.product-slider').length){
      function productSliderInit() {
        var productSlider = new Swiper(".product-slider", {
          spaceBetween: 30,
          slidesPerView: 1.1,
          pagination: {
            el: ".swiper-products-pagination",
            clickable: true,
          },
          breakpoints: {
              576: {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              768: {
                slidesPerView: 3,
                spaceBetween: 30,
              },
              1200: {
                slidesPerView: 4,
                spaceBetween: 40,
              }
            },
      });
      }
      productSliderInit()
        $('.tab-nav-item').click(function(){
          let age_range = $(this).attr('data-range');
          let loader = $('.loader');
          let tab_products = $('.tab-products');
          loader.show();
          tab_products.hide();
          $(this).addClass('active');
          $(this).siblings().removeClass('active');
          $('.tab-products')
          $.ajax({
            url:globalVar.admin_url,
            type:'post',
            dataType:'json',
            data:{
                action:'get_product',
                age_range
            },
            success:function(response){
              if(response.result){
                tab_products.html(response.result);
                productSliderInit();
              }
            },
            error:function(errors){
              alert('خطایی در ارتباط با سرور رخ داده است')
            },
            complete:function(){
              loader.hide();
              tab_products.show();
            }
          })
        })
    }

    if($('.categories-slider').length){
        var categorySlider = new Swiper(".categories-slider", {
            slidesPerView: 2.5,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-categories-pagination",
              clickable: true,
            },
            breakpoints: {
                640: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                },
                1024: {
                  slidesPerView: 4,
                  spaceBetween: 40,
                },
              },
        });
    }
})

// $('.countdown_time').each(function() {
//         var endTime = $(this).data('time');
//         $(this).countdown(endTime, function(tm) {
//             $(this).html(tm.strftime('<div class="countdown_box"><div class="countdown-wrap"><span class="countdown days">%D </span><span class="cd_text">روز</span></div></div><div class="countdown_box"><div class="countdown-wrap"><span class="countdown hours">%H</span><span class="cd_text">ساعت</span></div></div><div class="countdown_box"><div class="countdown-wrap"><span class="countdown minutes">%M</span><span class="cd_text">دقیقه</span></div></div><div class="countdown_box"><div class="countdown-wrap"><span class="countdown seconds">%S</span><span class="cd_text">ثانیه</span></div></div>'));
//         });
//     });