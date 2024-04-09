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
         <div class="container">
            <div class="row">
               <div class="col-lg-10">
                  <div class="post-content post-single">
                     <div class="post-media post-image">
                        <img class="img-fluid"  width="900" height="628" src="<?php echo base_url()?>/actrl/assets/images/gallery-grid/<?php echo $blog->photo_blog?>" alt=""><span class="post-meta-date"><span class="day"><?php echo  date("d" , strtotime( $blog->created_at)); ?></span><?php echo date("F", strtotime( $blog->created_at));?></span>
                     </div>
                     <div class="post-body clearfix">
                        <div class="entry-header">
                           <div class="post-meta"><span class="post-author"><img class="avatar" alt="" src="<?php echo base_url()?>/actrl/assets/images/gallery-grid/<?php echo $blog->photo_blog?>"> By admin</span>
                           </div>
                           <h2 class="entry-title"><?php echo $blog->titel_blog?></h2>
                        </div>
                        <!-- header end-->
                        <div class="entry-content">
                           <p><?php echo $blog->description_blog?></p>
                           </ul>
                        </div>
                        <!-- entry content end-->
                        <!-- Post footer end-->
                     </div>
                     <!-- post-body end-->
                  </div>
                  <!-- Post content end-->
                  <!-- Author box end-->
               </div>
               <!-- Content Col end-->
               <!-- Sidebar Col end-->
            </div>
            <!-- Main row end-->
         </div>
         <!-- Container end-->
      </section>