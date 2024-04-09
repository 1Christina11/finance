
      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>/assets/images/banner/banner2.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">News</h1>
                     <ol class="breadcrumb">
                        <li><a href="https://gcsfinancialcorp.com/">Home</a></li>
                        <li>news</li>
                     </ol>
                  </div> 
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
      <section class="main-container" id="main-container">
         <div class="container">+-
				<div class="row">
			<?php foreach($blogs as $row){?> 
					<div class="col-lg-4">
					  <div class="post">
						 <div class="post-media post-image">
							<img class="img-fluid" width="900" height="628" src="<?php echo base_url()?>/actrl/assets/images/gallery-grid/<?php echo $row->photo_blog?>" alt="">
						 </div>
						 <div class="post-body clearfix">
							<div class="post-meta-left pull-left text-center"><span class="post-meta-date"><span class="day"><?php echo  date("d" , strtotime( $row->created_at)) ?></span><?php echo date("F", strtotime( $row->created_at));?></span><span class="post-author"><img class="avatar" alt="" src="<?php echo base_url()?>/actrl/assets/images/gallery-grid/<?php echo $row->photo_blog?>"> By Admin</span>
							</div>
							<!-- Post meta left-->
							<div class="post-content-right">
							   <div class="entry-header">
								  <h2 class="entry-title"><a href="<?php echo site_url('Blog/get_one_blog/' . $row->blog_id)?>"><?php echo $row->titel_blog?></a></h2>
							   </div>
							   <!-- header end-->
							   <div class="entry-content">
								  <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod">
									<?php
										echo substr(" $row->description_blog",6);
									?>  


								  </p>
							   </div>
							   <div class="post-footer text-right"><a class="btn btn-primary" href="<?php echo site_url('Blog/get_one_blog/' . $row->blog_id)?>">Continue Reading</a></div>
							</div>
							<!-- Post content right-->
						 </div>
						 <!-- post-body end-->
					  </div>
					</div>
			<?php }?>
				</div>
				
				
               
				   
                  <!-- 1st post end-->
               
               <!-- Content Col end-->
            <!-- Main row end-->
         </div>
         <!-- Container end-->
      </section>

