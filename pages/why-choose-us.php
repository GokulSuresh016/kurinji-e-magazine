  <?php
$project=$obj->select_any('tbl_about_our_projects','1');
?>
  <div class="about-us">       
	   <div class="full-fluid">
          <div class="why-choose-us">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm-8 col-md-4 align-self-end">
                  <div class="wcu_img"><img src="../assets/images/pages/wcu_img.png" alt="image"></div>
                </div>
                <div class="col-sm-10 col-md-8">
                  <div class="wcu-wrapper">
                    <div class="row">
                      <div class="col-12">
                        <h1 class="title green-underline">Our Projects</h1>
                      </div>
                      <div class="col-12">
                        <div class="row">
										 <?php
				foreach($project as $projectSingle)
				{
				?>
                          <div class="col-lg-6">
                            <div class="wcu-block">
                              <div class="wcu_icon">
                                <div class="icon-detail"><img src="../assets/images/homepage01/dow_icon_1.png" alt=""></div>
                              </div>
                              <div class="wcu_intro">
                                <h5><?=$projectSingle['title'];?></h5>
                                <p><?=$projectSingle['details'];?></p>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>