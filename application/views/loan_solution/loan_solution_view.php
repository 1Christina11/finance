      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner5.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Loan options</h1>
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
                     <ol class="breadcrumb">
                        <li><a href="https://gcsfinancialcorp.com/">Home</a></li>
                        <li>Loan options</li>
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
			   <?php foreach($loan_content as $row){?>		
               <div class="col-lg-4 col-md-12">
                  <h3 class="addons-title"><?php echo $row->title?></h3>
                  <div class="ts-service-box">
                     <div class="ts-service-image-wrapper">
                        <img style="width: 600px" class="img-fluid" src="<?php echo base_url()?>actrl/assets/images/loan/<?php echo $row->logo?>" alt="">
                     </div>
                     <div class="ts-service-content"><span class="ts-service-icon"><i class="icon icon-pie-chart2"></i></span>
                        <p><?php echo $row->short_description?></p>
						<?php
							  $loan_id=$row->loan_id;
							  $data_sess=array(
								"title$loan_id"=>$row->title,
							  );
							  $this->session->set_userdata($data_sess);

							  $title=trim($row->title);
							  $title=str_replace(", ","-",$title);
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