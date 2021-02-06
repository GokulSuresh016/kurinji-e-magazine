<?php 
$category=$obj->select_any('tbl_blog_blog_category','1');
$blogs=$obj->select_any('tbl_blog_blogs','1');
$blogrecent=$obj->select_any('tbl_blog_blogs','1');
?>
<div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Blog list sidebar</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="blog-layout">
        <div class="container">
          <div class="row">
            <div class="col-xl-3">
              <div class="blog-sidebar">
                <button class="no-round-btn" id="filter-sidebar--closebtn">Close sidebar</button>
                <div class="blog-sidebar_search">
                  <div class="search_block">
                    <form action="" method="get">
                      <input class="no-round-input" type="text" placeholder="Search...">
                    </form>
                  </div>
                </div>
                <div class="blog-sidebar_categories">
                  <div class="categories_top mini-tab-title underline">
                    <h2 class="title">Categories</h2>
                  </div>
                  <div class="categories_bottom">
                    <ul>
					<?php
					foreach($category as $categorySingle)
					{
					?>
                      <li> <a class="category-link" href="shop_grid+list_3col.html"><?=$categorySingle['category_name'];?></a></li>
                     <?php
					}
					 ?>
                    </ul>
                  </div>
                </div>
                <div class="blog-sidebar_recent-post">
                  <div class="recent-post_top mini-tab-title underline">
                    <h2 class="title">Recent post</h2>
                  </div>
                  <div class="recent-post_bottom">
                   <?php
				   foreach($blogrecent as $blogrecentSingle)
				   {
				   ?>
                
                    <div class="mini-post_block">
                      <div class="mini-post_img"><a href="blog_detail_sidebar.html"><img src="../Admin-Assets/<?php echo str_replace("../","",$blogrecentSingle['image']);?>" alt="blog image"></a></div>
                      <div class="mini-post_text"><a href="blog_detail_sidebar.html"><?=$blogrecentSingle['title'];?></a>
                        <h5><?=$blogrecentSingle['date'];?></h5>
                      </div>
                    </div>
                  </div>
				  <?php
				   }
				  ?>
				  
                </div>
                <div class="blog-sidebar_tags">
                  <div class="tags_top mini-tab-title underline">
                    <h2 class="title">Search By Tags</h2>
                  </div>
                  <div class="tags_bottom"><a class="tag-btn" href="shop_grid+list_3col.html">organic</a><a class="tag-btn" href="shop_grid+list_3col.html">vegatable</a><a class="tag-btn" href="shop_grid+list_3col.html">fruits</a><a class="tag-btn" href="shop_grid+list_3col.html">fresh meat</a><a class="tag-btn" href="shop_grid+list_3col.html">fastfood</a><a class="tag-btn" href="shop_grid+list_3col.html">natural</a></div>
                </div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div>
            <div class="col-12 col-xl-9">
              <div class="blog-list">
                <div id="show-filter-sidebar">
                  <h5> <i class="fas fa-bars"></i>Show sidebar</h5>
                </div>
				<?php
				foreach($blogs as $blogSingle)
				{
				?>
                <div class="blog-block">
                  <div class="row">
                    <div class="col-5">
                      <div class="blog-img"><a href="blog_detail_sidebar.html"><img src="../Admin-Assets/<?php echo str_replace("../","",$blogSingle['image']);?>" alt="blog image"></a></div>
                    </div>
                    <div class="col-7">
                      <div class="blog-text">
                        <h5 class="blog-tag"><?=$blogSingle['author'];?></h5></br><a class="blog-title" href="blog_detail_sidebar.html"><?=$blogSingle['title'];?></a>
                        <div class="blog-credit">
                          <p class="credit date"><?=$blogSingle['date'];?></p>
                          
                        </div>
                        <p class="blog-describe"></p><a class="blog-readmore" href="blog_detail_sidebar.html">Read Blog<span> <i class="arrow_carrot-2right"></i></span></a>
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
      </div>