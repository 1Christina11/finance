			<!-- Container end-->
			   <div class="site-nav-inner navigation-inner">
				   <div class="container">
					  <nav class="navbar navbar-expand-lg site-navigation navdown justify-content-end">
						 <div class="navbar-brand navbar-header">
							<div class="logo">
							   <a href="https://gcsfinancialcorp.com/">
								  <img width="80px" height="80px" src="<?php echo base_url()?>assets/images/GCS Logo-01.png" alt="">
							   </a>
							</div>
							<!-- logo end-->
						 </div>
						 <!-- Navbar brand end-->
						 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
						 <!-- End of Navbar toggler-->
						 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav">
								
								<li class="nav-item"><li class="<?php $current = site_url();
															  if(current_url()==$current){?><?php echo 'active';}?>">
									<a class="nav-link" href="https://gcsfinancialcorp.com/">Home<i class="fa"></i></a></li>
							    </li>
							   <!-- li end-->
								<li class="nav-item"><li class="<?php $current = site_url().'/We_serve/industries';
															  if(current_url()==$current){?><?php echo 'active';}?>">
									<a class="nav-link" href="<?php echo site_url('We_serve/industries')?>">Industries We Serve<i class=""></i></a></li>
							   </li>
							   <!-- li end-->
							   <li class="nav-item"><li class="<?php $current = site_url().'/Loan_solution/loan_options';
															  if(current_url()==$current){?><?php echo 'active';}?>">
								   <a class="nav-link" href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options<i class="fa"></i></a>
							   </li>
							   <!-- li end-->
							   <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Apply Now<i class="fa fa-angle-down"></i></a>
								  <ul class="dropdown-menu" role="menu">
									 <li class="<?php $current = site_url().'/Apply_online';
										 	  if(current_url()==$current){ echo 'active';}?>">
										 <a href="<?php echo site_url('Apply_online')?>">Apply Now</a></li>
									 <li class="<?php $current = site_url().'/Apply_online/request';
										 	  if(current_url()==$current){echo 'active';}?>">
										 <a href="<?php echo site_url('Apply_online/request')?>">Request A Quote</a></li>
								  </ul>
							   </li>
							   <!-- li end-->
								<li class="nav-item "><li class="<?php $current = site_url().'/About_us';
															  if(current_url()==$current){?><?php echo 'active';}?>">
							   		<a class="nav-link" href="<?php echo site_url('About_us')?>" >About Us<i class="fa"></i></a></li>
							   </li>
							   <!-- li end -->
							   <li class="nav-item "><li class="<?php $current = site_url().'/Blog';
															  if(current_url()==$current){?><?php echo 'active';}?>">
					  				 <a class="nav-link" href="<?php echo site_url('Blog')?>" >Blog<i class="fa"></i></a></li>
							   </li>
							   <!-- li end-->
								<li class="nav-item "><li class="<?php $current = site_url().'/Contact_us';
															  if(current_url()==$current){?><?php echo 'active';}?>">
									<a class="nav-link" href="<?php echo site_url('Contact_us')?>" >Contact Us<i class="fa"></i></a></li>
							   </li>
							   <!-- li end-->
							</ul>
							<!--Nav ul end-->
						 </div>
					  </nav>
					</div>
                  <!-- Collapse end-->
<!--                  <div class="nav-search"><span id="search"><i class="icon icon-search"></i></span></div>-->
                  <!-- Search end-->
                  <div class="search-block" style="display: none;">
                     <input class="form-control" type="text" placeholder="Search"><span class="search-close">×</span>
                  </div>
                  <!-- Site search end-->
               </div>
               <!-- Site nav inner end-->
