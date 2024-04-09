      <div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
			 <?php foreach($sliders as $row){ ?>
            <div class="carousel-item active" style="background-image:url(<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $row->photo_1 ?>);">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo $row->title_1?></h2>
<!--                        <h3 class="slide-sub-title">What you do today</h3>-->
                        <p class="slider-description lead"><?php echo $row->description_1?></p>
                        <p><a class="slider btn btn-primary" href="<?php echo site_url('Apply_online/request')?>">Get Started</a><a class="slider btn btn-border" href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $row->photo_2 ?>);">
               <div class="container">
                  <div class="slider-content text-center">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo $row->title_2?></h2>
                        <p class="slider-description lead"><?php echo $row->description_2?></p>
                        <p><a class="slider btn btn-primary" href="<?php echo site_url('Apply_online/request')?>">Get Started</a><a class="slider btn btn-border" href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $row->photo_3 ?>);">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo $row->title_3?></h2>
<!--                        <h3 class="slide-sub-title">We care about your Business</h3>-->
                        <p class="slider-description lead"><?php echo $row->description_3?></p>
                        <p><a class="slider btn btn-primary" href="<?php echo site_url('Apply_online/request')?>">Get Started</a><a class="slider btn btn-border" href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $row->photo_4 ?>);">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo $row->title_4?></h2>
<!--                        <h3 class="slide-sub-title">We care about your Business</h3>-->
                        <p class="slider-description lead"><?php echo $row->description_4?></p>
                        <p><a class="slider btn btn-primary" href="<?php echo site_url('Apply_online/request')?>">Get Started</a><a class="slider btn btn-border" href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
			 <?php }?>
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>
      <!-- Carousel end-->
      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner5.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Loan Options</h1>
					 <?php foreach($loan_solution as $row){?> 
					 <div class="row">
						 <div class="col-12">
						   <h2 style="text-align: center; color:cadetblue" class="addons-title"><?php echo $row->title?></h2>
						 </div>
						 <div class="col-md-12">
						   <div class="ts-service-box">
							 <div class="ts-service-content"><span class="ts-service-icon"><i class="icon icon-pie-chart2"></i></span>
								<h3 style="text-align: center; color: burlywood" class="service-title"><?php echo $row->short_title?></h3>
								<h4 style="text-align: center; color: goldenrod"><?php echo $row->long_title?></h4>
							 </div>
						   </div>
						 <!-- Service1 end-->
						 </div>
					 </div>
					 <?php }?> 
<!--
                     <ol class="breadcrumb">
                        <li><a href="https://gcsfinancialcorp.com/">Home</a></li>
                        <li>Loan Solutions</li>
                     </ol>
-->
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
			   <?php foreach($loan_content as $row){?>		
               <div class="col-lg-4 col-md-12">
                  <h3 class="addons-title"><?php echo $row->title?></h3>
                  <div class="ts-service-box">
                     <div class="ts-service-image-wrapper">
                        <img style="width: 600px" class="img-fluid" src="<?php echo base_url()?>actrl/assets/images/loan/<?php echo $row->logo?>" alt="">
                     </div>
                     <div class="ts-service-content"><span class="ts-service-icon"><i class="icon icon-pie-chart2"></i></span>
                        <h3 class="service-title"><?php echo $row->short_description?></h3>
                        <p style="text-overflow:ellipsis; overflow: hidden; white-space: nowrap"><?php echo $row->long_description?></p>
						<?php
							  $loan_id=$row->loan_id;
							  $data_sess=array(
								"title$loan_id"=>$row->title,
							  );
							  $this->session->set_userdata($data_sess);

							  $title=trim($row->title);
							  $title=str_replace(", ","-",$title);
							  $title=str_replace(",","-",$title);
							  $title=str_replace(".","-",$title);
							  $title=str_replace("/","-",$title);
							  $title_after=str_replace(" ","-",$title);
						?>
                        <p><a class="link-more" href="<?php echo site_url('Loan_solution/index/'.$title_after.'/'.$loan_id)?>">Read More <i class="icon icon-right-arrow2"></i></a></p>
                     </div>
                  </div>
                  <!-- Service1 end-->
               </div>
			   <?php }?>
            </div>
         </div>
      </section>

      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner5.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
				   
                  <div class="banner-heading">
					  		<h1 class="banner-title">Industries we serve</h1>
				 <?php foreach($industries as $row){?> 
					 <div class="row">
						 <div class="col-12">
						   <h2 style="text-align: center; color:cadetblue" class="addons-title"><?php echo $row->title?></h2>
						 </div>
						 <div class="col-md-12">
						   <div class="ts-service-box">
							 <div class="ts-service-content"><span class="ts-service-icon"><i class="icon icon-pie-chart2"></i></span>
								<h3 style="text-align: center; color: burlywood" class="service-title"><?php echo $row->short_title?></h3>
								<h4 style="text-align: center; color: goldenrod"><?php echo $row->long_title?></h4>
							 </div>
						   </div>
						 <!-- Service1 end-->
						 </div>
					 </div>
					 <?php }?> 
					  </div>
<!--
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Industries we serve</li>
                     </ol>
-->
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
               <div class="col-12">
                  <h3 class="addons-title"></h3>
               </div>
				<?php foreach($industries_content as $row){?>
               <div class="col-lg-4 col-md-12">
                  <div class="ts-case-box">
                     <div class="ts-case-image-wrapper">
                        <img style=" width: 400px ; height: 500px" class="img-fluid" src="<?php echo base_url()?>actrl/assets/images/business/<?php echo $row->logo?>" alt="">
                        <div class="ts-case-content">
                           <h3 class="case-title">
                              <small><?php echo $row->title?></small></h3>
							  <p><?php echo $row->short_description?></p>
						<?php
							  $industries_id=$row->industries_id;
							  $data_sess=array(
								"title$industries_id"=>$row->title,
							  );
							  $this->session->set_userdata($data_sess);

							  $title=trim($row->title);
							  $title=str_replace(", ","-",$title);
							  $title=str_replace(",","-",$title);
							  $title=str_replace(".","-",$title);
							  $title=str_replace("/","-",$title);
							  $title_after=str_replace(" ","-",$title);
						?>
                           <p><a class="link-more" href="<?php echo site_url('We_serve/index/'.$title_after.'/'.$industries_id)?>">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                     </div>
                     <!-- Case Content end-->
                  </div>
               </div>
				<?php }?>
            </div>
         </div>
      </section>
<br>
<br>
<br>

      <!-- Banner area end-->
<section class="quote-area bg-overlay overlay-color" id="quote-ZZZZZZZZarea">
		<form action="<?php echo site_url('Apply_online/send_mail')?>" method="post" >                        

         <div class="container">
            <div class="row">
               <div class="col-lg-6 qutoe-form-inner-left">
                  <div class="quote_form">
                     <h2 class="column-title title-white"><span>We are always ready</span> Request a call back</h2>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input class="form-control" id="s_name" name="s_name" placeholder="Full Name" required="">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input class="form-control" id="phone" name="phone" placeholder="Phone Number" required="">
                           </div>
                        </div>
                     </div>
                     <!-- Row 1 end-->
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input class="form-control" id="e_mail" name="e_mail" type="email" placeholder="E_mail Address" required="">
                           </div>
                        </div>
                     </div>
                     <!-- Row end-->
					  <style> select option {
					  margin: 40px;
					  background: rgba(0, 0, 0, 0.3);
					  color: #fff;
					  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
						}</style>
                                 <div class="row">
                        <div class="col-lg-6">
                           <select  class="form-control"  aria-label="Default select example" name="credit_score">
							  <option selected>credit_score</option>
							  <option value="Excellent (700 >)">Excellent (700 >)</option>
							  <option value="Good (650-700)">Good (650-700)</option>
							  <option value="Fair (600-650)">Fair (600-650)</option>           
							</select>
                        </div>
                        <div class="col-lg-6">
                           <select  class="form-control" aria-label="Default select example" name="time_in_business">
							  <option selected>time_in_business</option>
							  <option value="3+ years">3+ years</option>
							  <option value="2-3 years">2-3 years</option>
							  <option value="6-12 months">6-12 months</option>           
							</select>
                        </div>
                     </div>
					   <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input class="form-control" id="monthly_revenue" name="monthly_revenue" type="monthly_revenue" placeholder="monthly_revenue" required="">
                           </div>
                        </div>
                     </div>
					  <br>
                     <!-- Row end-->
                     <div class="form-group text-right mb-0">
                        <input class="button btn btn-primary" type="submit" value="submit">
                     </div>
                  </div>
                  <!-- Quote form end-->
               </div>
               <!-- Col end-->
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
		</form>
         <!-- Container end-->
      </section>
	<br>
<br>
<br>


<style>
  .center {
    text-align: center;
  }
</style>
<div class="banner-area" id="banner-area" style="background-image:url(
	<?php echo base_url()?>assets/images/banner/banner5.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="banner-heading">
          <div class="row">
            <div class="col-12">
              <h1 style="text-align: center; color:white" class="addons-title"> <?php echo $apply_online->head_title?> </h1>
            </div>
          </div>
<!--
          <ol class="breadcrumb">
            <li>
              <a href="https://gcsfinancialcorp.com/">Home</a>
            </li>
            <li>Apply_online</li>
          </ol>
-->
        </div>
      </div>
      <!-- Col end-->
    </div>
    <!-- Row end-->
  </div>
  <!-- Container end-->
</div>
<!-- Banner area end-->
<section class="main-container no-padding" id="main-container">
  <div id="ts-testimonial-static" class="ts-testimonial-static">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h4>
            <span> <?php echo $apply_online->title?> </span>
            <br> <?php echo $apply_online->description?>
          </h4>
        </div>
      </div>
      <div class="row"> <?php foreach($online_content as $row){?> <div class="col-lg-4 center">
          <div class="quote-item quote-classic mrb-40 ">
            <div class="quote-item-footer quote-footer-classic"> <?php

     
	if ( $row->logo != NULL ) {?> <img class="testimonial-thumb" src="
									<?php echo base_url()?>actrl/assets/images/apply/
									<?php echo $row->logo?>" alt="testimonial"> <?php   }else {  ?> <img class="testimonial-thumb" src="../../../assets/images/no_photo.jpg" alt="testimonial"> <?php  } ?> <div class="quote-item-info">
                <p class="quote-author"> <?php echo $row->title?> </p>
                <span class="quote-subtext"> <?php echo $row->item_1?> </span>
                <br>
                <span class="quote-subtext"> <?php echo $row->item_2?> </span>
                <br>
                <span class="quote-subtext"> <?php echo $row->item_3?> </span>
                <br>
                <span class="quote-subtext"> <?php echo $row->item_4?> </span>
              </div>
            </div>
            <div class="col-lg-6 center">
              <span class="text "> <?php echo $row->description?> </span>
              <div class="job-meta-data">
                <i class="feather icon-watch"></i>
              </div> <?php

     
	if ( $row->cta != NULL ) {?> <a href="
														<?php echo $row->cta?>" class="btn btn-icon btn-outline-primary">Get Started Now </a> <?php }?>
            </div>
          </div>
        </div> <?php } ?> </div> 
    </div>
  </div>
</section>