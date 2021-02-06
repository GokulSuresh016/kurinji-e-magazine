<?php
$team=$obj->select_any('tbl_about_our_team','1');
?>
  <div class="about-us"> 
	   <div class="container">
          <div class="our-farmer">
            <h1 class="title green-underline">Our Team</h1>
            <div class="row">
			<?php
			
			foreach($team as $teamSingle)
			{
			?>
              <div class="col-sm-6 col-lg-3">
                <div class="our-farmer-block our-farmer-block--1">
                  <div class="farmer-img"><img src="../Admin-Assets/<?php echo str_replace("../","",$teamSingle['image']);?>" alt="farmer"></div>
                  <div class="farmer-contact_wrapper">
                    <div class="farmer-contact">
                      <h2><?php echo $teamSingle['name'];?></h2>
                      <h5><?=$teamSingle['description'];?></h5>
                      <div class="farmer-social"><a href="<?=$teamSingle['facebook'];?>"><i class="fab fa-facebook-f"> </i></a><a href="<?=$teamSingle['whatsapp'];?>"><i class="fab fa-whatsapp"></i></a><a href="<?=$teamSingle['instagram'];?>"><i class="fab fa-instagram"> </i></a><a href="<?=$teamSingle['youtube'];?>"><i class="fab fa-youtube"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
			}
		  ?>
          
            </div>
          </div>
        </div>
        </div>
    