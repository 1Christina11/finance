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
          <ol class="breadcrumb">
            <li>
              <a href="https://gcsfinancialcorp.com/">Home</a>
            </li>
            <li>Apply_online</li>
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
            <div class="quote-item-footer quote-footer-classic"> 
				
       <img class="testimonial-thumb" src="
									<?php echo base_url()?>actrl/assets/images/apply/
									<?php echo $row->logo?>" alt="no photo">  <div class="quote-item-info">
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