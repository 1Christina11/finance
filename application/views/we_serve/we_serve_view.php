
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
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Industries we serve</li>
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
               <div class="col-12">
                  <h3 class="addons-title">Industries we serve</h3>
               </div>
				<?php foreach($industries_content as $row){?>
               <div class="col-lg-4 col-md-12">
                  <div class="ts-case-box">
                     <div class="ts-case-image-wrapper">
                        <img style=" width: 600px ; height: 400px" class="img-fluid" src="<?php echo base_url()?>actrl/assets/images/business/<?php echo $row->logo?>" alt="">
                        <div class="ts-case-content">
                           <h3 class="case-title">
                              <small><?php echo $row->title?></small></h3>
							  <p style="text-overflow:ellipsis; overflow: hidden; white-space: nowrap"><?php echo $row->short_description?></p>
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

      <!-- Footer start-->
 