      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner1.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Loan Options</h1>
				     <br>
					 <div class="row">
						 <div class="col-12">
						   <h2 style="text-align: center; color:goldenrod" class="addons-title"><?php echo $loan_content->title?></h2>
						 </div>
					 </div>
				     <br>
					  <a class="btn btn-primary" href="<?php echo site_url('Apply_online')?>">Apply now</a>
					  <ol class="breadcrumb">
                        <li><a href="https://gcsfinancialcorp.com/">Home</a></li>
                        <li><a href="<?php echo site_url('Loan_solution/get_loan_solution')?>">Loan Options</a></li>
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
	   
	  <br>
	  <br>
	   
      <section class="main-container no-padding" id="main-container">

<!--
         <div class="ts-single-case-info" id="ts-single-case-info">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="list-style-classic box-solid">
                        <h3 class="classic-title">Alpha Century Software Inc.</h3>
                        <ul>
                           <li>
                              <div class="case-info-label">Client</div>
                              <div class="case-info-content">Jhon Carter</div>
                           </li>
                           <li>
                              <div class="case-info-label">Catagory</div>
                              <div class="case-info-content">Marketing Growth</div>
                           </li>
                           <li>
                              <div class="case-info-label">Date</div>
                              <div class="case-info-content">20 Nov, 2017</div>
                           </li>
                           <li>
                              <div class="case-info-label">Live demo</div>
                              <div class="case-info-content">www.domain.com</div>
                           </li>
                           <li>
                              <div class="case-info-label">Status</div>
                              <div class="case-info-content">Done</div>
                           </li>
                        </ul>
                     </div>
                  </div>
				   
                  <div class="col-lg-8">
                     <div class="case-single-img">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/images/case-study/case-details-big.jpg" alt="">
                     </div>
                  </div>
               </div>
				
            </div>
			 
         </div>
-->

         <div class="ts-case-challange" id="ts-case-challange">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-8">
					<div class="heading">
					   <h3 style="text-align:center" class=" content-title border-none"><?php echo $loan_content->title?></h3>
					</div>
                     <div class="case-single-img text-right">
                        <img class="img-fluid" src="<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $loan_content->logo?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-12">
				     <br>
					 <br>
                     <div class="case-details-inner">
                        <div class="ts-text-block">
                           <p><?php echo $loan_content->short_description?></p>
                        </div>
                        <div class="ts-text-block">
                           <p><?php echo $loan_content->long_description?></p>
					  	   <a class="btn btn-primary" href="<?php echo site_url('Apply_online')?>">Apply now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row case-img-left">
                  <div class="col-lg-6">
					<div class="heading">
					</div>
                     <div class="case-single-img text-left">
                        <img class="img-fluid" src="<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $loan_content->photo_1?>" alt="">
                     </div>
				   </div>
                  <div class="col-lg-6">
                     <div class="case-details-inner">
                        <div class="ts-text-block">
						   <h2 class=" content-title border-none"><?php echo $loan_content->title_photo_1?></h2>
                           <p><?php echo $loan_content->photo_description_1?></p>
               			   <div class="row">
						       <div class="col-lg-3">
							   </div>
							   <div class="col-lg-6">
							       <a  class="btn btn-primary" href="<?php echo site_url('Apply_online')?>">Apply now</a>
							   </div>
							   <div class="col-lg-3">
							   </div>
                        	</div>
                        </div>
<!--
                        <ul class="ts-list">
                           <li>Collaborate with the technology information security, and business partners.</li>
                           <li>Find and address performance issues are main.</li>
                           <li>Assisting senior consultants projects priorate first.</li>
                           <li>Share best both practices and knowledge need to think.</li>
                        </ul>
-->
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="ts-case-result" id="ts-case-result">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="case-details-inner">
                        <div class="heading">
                           <h3 class=" content-title border-none"> <?php echo $loan_content->title_photo_2?> </h3>
                        </div>
                        <div class="ts-text-block">
                           <p><?php echo $loan_content->photo_description_2?></p>
                        </div>
                     </div>
<!--
                     <div class="row">
                        <div class="col-md-4">
                           <div class="case-counter">
                              <p><span class="counterUp">3000</span>$</p>
                              <h3>Cost savings</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="case-counter">
                              <p><span class="counterUp">4.5</span>%</p>
                              <h3>Tax Saved</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="case-counter">
                              <p><span class="counterUp">10.5</span>%</p>
                              <h3>Conversion</h3>
                           </div>
                        </div>
                     </div>

-->				     
					  <a  class="btn btn-primary" href="<?php echo site_url('Apply_online')?>">Apply now</a>
                  </div>
                  <div class="col-lg-6 text-right">
                     <div class="single-case-img">
                        <img class="img-fluid" src="<?php echo base_url()?>/actrl/assets/images/loan/<?php echo $loan_content->photo_2?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="gap-40"></div>