<?php 
$category=$obj->select_any('tbl_category_category','1');

?>
   <div class="items-category">
        <div class="container">
          <div class="row">
		  <?php
		  foreach($category as $categorySingle)
		  {
		  ?>
            <div class="col-12 col-sm-6 col-md-3"><a class="product-item d-flex flex-column align-items-center justify-content-center" href="shop_grid+list_3col.html" style="background-image: url(assets/images/homepage01/item_category_1.png)">
                <div class="categories-img"><img src="../Admin-Assets/<?php echo str_replace("../","",$categorySingle['thumbnail']);?>" alt=""></div>
                <h2><?php echo $categorySingle['title'];?></h2>
                </a></div>
         <?php
		  }
?>		 
         
          </div>
        </div>
      </div>