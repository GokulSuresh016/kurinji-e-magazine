       <?php
$bookoftheweek=$obj->select_any_one('tbl_home_page_book_of_the_week','1');
?>
  <div class="deal-of-week">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-center order-1">
              <h1 class="title green-underline mx-auto">Book Of The Week</h1>
            </div>
            <div class="col-10 col-md-6 col-lg-4 order-3 order-md-2 order-lg-2">
              <div class="row">
                <div class="col-12">
                  <div class="featured-use text-md-right">
                    <div class="featured-use_intro order-2 order-md-1">
                      <h5><?php echo $bookoftheweek['review_1']?></h5>
                      
                    </div>
                    <div class="featured-use_icon text-md-right order-1 order-md-2 featured-use_icon-left">
                      <div class="icon-detail"><img src="../assets/images/homepage01/dow_icon_1.png" alt=""></div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="featured-use text-md-right">
                    <div class="featured-use_intro order-2 order-md-1">
                      <h5><?php echo $bookoftheweek['review_2']?></h5>
                      
                    </div>
                    <div class="featured-use_icon text-md-right order-1 order-md-2 featured-use_icon-left">
                      <div class="icon-detail"><img src="../Admin-Assets/<?php echo str_replace("../","",$bookoftheweek['thumbnail']);?>" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-2 order-md-4 order-lg-3 text-center">
              <div class="week-product_img"><img class="img-fluid" src="../assets/images/homepage01/deal-of-week.png" alt="">
                <p>Only<br><span>$19.00</span></p>
              </div>
            </div>
            <div class="col-10 col-md-6 col-lg-4 order-4 order-md-3 order-lg-4">
              <div class="row">
                <div class="col-12">
                  <div class="featured-use">
                    <div class="featured-use_intro order-2">
                      <h5><?php echo $bookoftheweek['review_3']?></h5>

                    </div>
                    <div class="featured-use_icon order-1 ml-0">
                      <div class="icon-detail"><img src="../assets/images/homepage01/dow_icon_3.png" alt=""></div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="featured-use">
                    <div class="featured-use_intro order-2">
                      <h5><?php echo $bookoftheweek['review_4']?></h5>
                      
                    </div>
                    <div class="featured-use_icon order-1 ml-0">
                      <div class="icon-detail"><img src="../assets/images/homepage01/dow_icon_4.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
