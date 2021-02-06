<?php 
$banner=$obj->select_any('tbl_home_page_banner','1');
?>
<div class="slider">
        <div class="full-fluid">
          <div class="slider_wrapper">
		  			  					  <?php
		foreach($banner as $bannerSingle)
		{
		?>
            <div class="slider-block" style="background-image: url('../assets/images/homepage01/slider_background_1.png')">
              <div class="slider-content">
		
                <div class="container">
	
                  <div class="row align-items-center justify-content-center">
		
                    <div class="col-12 col-md-5 col-xl-6">
                      <div class="slider-text d-flex flex-column align-items-center align-items-md-start">
                        <h5 data-animation="fadeInUp" data-delay=".2s"><?php echo $bannerSingle['title'];?></h5>
                        <h1 data-animation="fadeInUp" data-delay=".3s">Orange Lemon</h1>
                        <h3 data-animation="fadeInUp" data-delay=".4s">$14.00<span>/ pakage</span></h3><a class="normal-btn" href="shop_grid+list_3col.html" data-animation="fadeInUp" data-delay=".4s">Shop now</a>
                      </div>
                    </div>
			
                    <div class="col-12 col-md-6">
                      <div class="slider-img" data-animation="zoomIn" data-delay=".1s"><img src="../assets/images/homepage01/slider_subbackground_1.png" alt="">
                        <div class="prallax-img">
                          <div id="img-block"><img class="img" src="../assets/images/homepage01/slider_img_1.png" alt="" data-depth="1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
		
                </div>
		
              </div>
            </div>
		 <?php
		}
		  ?>
          </div>
		
          <div class="benefit-block">
            <div class="container">
              <div class="our-benefits">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="../assets/images/homepage01/benefit-icon1.png" alt="">
                      <h5 class="benefit-title">Free Shipping</h5>
                      <p class="benefit-describle">For all order over 99$</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="../assets/images/homepage01/benefit-icon2.png" alt="">
                      <h5 class="benefit-title">Delivery On Time</h5>
                      <p class="benefit-describle">If good have prolems</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="../assets/images/homepage01/benefit-icon3.png" alt="">
                      <h5 class="benefit-title">Secure Payment</h5>
                      <p class="benefit-describle">100% secure payment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>