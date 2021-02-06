  <?php 
$partners=$obj->select_any('tbl_home_page_partners','1');
?> 
	
	<div class="partner">
		
        <div class="container">
		  <?php
		  foreach($partners as $partnersSingle)
		  {
		  ?>
          <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">

            <div class="partner--logo" href=""> <a href="#"><img src="../Admin-Assets/<?php echo str_replace("../","",$partnersSingle['logo']);?>" alt="partner logo"></a></div>
         
		  
          </div>
		   <?php
		  }
		  ?>
        </div>
	
      </div>
	  	