     <?php
$upcoming=$obj->select_any('tbl_home_page_upcoming','1');

?>
<div class="banner"> 
        <div class="full-fluid">
          <div class="banner-block">
            <div class="row no-gutters">
			<?php
			foreach($upcoming as $upcomingSingle)
			{
			?>
              <div class="col-12 col-lg-4">
                <div class="banner-block_detail" style="background-image: url('../Admin-Assets/<?php echo str_replace("../","",$upcomingSingle['background']);?>')"><img src="../Admin-Assets/<?php echo str_replace("../","",$upcomingSingle['images']);?>" alt=""><a class="banner-btn normal-btn" href="shop_grid+list_3col.html">Shop now</a></div>
              </div>
            
             <?php
			}
			 ?>
            </div>
          </div>
        </div>
      </div>