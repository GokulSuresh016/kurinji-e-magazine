<?php
$story=$obj->select_any_one('tbl_about_story_about_us','1');
?>
<div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">About us</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="about-us">
        <div class="container">
          <div class="our-story">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="our-story_text">
                  <h1 class="title green-underline">The Story About Us</h1>
				  <h3 class="title green-underline" style="font-size:18px;"><?=$story['title'];?></h3>
                  <p><?=$story['story']?></p>
				  </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="our-story_video"><img src="../Admin-Assets/<?php echo str_replace("../","",$story['image']);?>" alt="../Admin-Assets/<?php echo str_replace("../","",$story['image']);?>"></div>
              </div>
            </div>
          </div>

        </div>
        </div>