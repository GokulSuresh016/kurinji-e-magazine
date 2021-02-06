<?php 
$category=$obj->select_any('tbl_category_category','1');
?>
<div class="feature-products">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="title mx-auto">Our Product</h1>
            </div>
            <div class="col-12">
              <div id="tab">
                <ul class="tab-control">
                  <li><a class="active" href="#tab-1">All</a></li>
                <?php
				foreach($category as $categorySingle)
				{
				?>
				<li><a href="#<?php echo $categorySingle['title'];?>"><?php echo $categorySingle['title'];?></a></li>
<?php
				}
?>
                </ul>
				 <?php
				foreach($category as $categorySingle)
				{
				?>
				  <div id="<?php echo $categorySingle['title'];?>">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="../assets/images/product/product08.png" alt=""></a>
                        <h5 class="product-type"><?php echo $categorySingle['title'];?></h5>
                        <h3 class="product-name">Pure Pineapple</h3>
                        <h3 class="product-price">$14.00 
                          <del>$35.00</del>
                        </h3>
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<?php
				}
				?>
				  <div id="tab-1">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="../assets/images/product/product08.png" alt=""></a>
                        <h5 class="product-type">All</h5>
                        <h3 class="product-name">Pure Pineapple</h3>
                        <h3 class="product-price">$14.00 
                          <del>$35.00</del>
                        </h3>
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>