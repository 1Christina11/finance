

      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>/assets/images/banner/banner1.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">About Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li>About Us</li>
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
               <div class="col-lg-6">
                  <h2 class="column-title title-small"><span>About us</span><?php echo $about_us->head_line?></h2>
                  <p></p>
                  <div class="gap-15"></div>
                  <div class="row">
                     <div class="col-12">
                        <div class="ts-feature-box">
                           <div class="ts-feature-info">
                              
                              <h3 class="ts-feature-title">Our Company</h3>
                              <p><?php echo $about_us->our_company?></p>
                           </div>
                        </div>
                        <!-- feature box-1 end-->
                     </div>
                     <!-- col-1 end-->
                     <div class="col-12">
                        <div class="ts-feature-box">
                           <div class="ts-feature-info">
                              
                              <h3 class="ts-feature-title">Company History</h3>
                              <p><?php echo $about_us->company_history?></p>
                           </div>
                        </div>
						 <!-- feature box-2 end-->
                        
                     </div>
                     <!-- col-2 end-->
                  </div>
                  <!-- container row end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-6">
                  <img class="img-fluid" src="<?php echo base_url()?>/assets/images/pages/about_2.png" alt="">
               </div>
               <!-- Col end-->
            </div>
            <!-- Main row end-->
         </div>
	</section>  
