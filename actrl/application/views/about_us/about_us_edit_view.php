   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
							<br>
							<br>
                    <h5 class="m-b-10">About Us</h5>
                  </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/About_us/edit_about_us">About Us</a></li>
                        </ul>
                    </div>
            <div class="page-block">                    
                </div>
            </div>
        </div>
	</div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>About Us</h5>
                    </div>
                    <div class="card-body">
		
						<form action="<?php echo site_url('About_us/update_about_us')?>" method="post" enctype="multipart/form-data" >                        
			
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
								  <input type="hidden" name="id" value="<?php echo $about_us->about_us_id?>"/>
                                        <label class="form-label">Our Company</label>
                                        <textarea class="form-control" name="our_company"><?php echo $about_us->our_company?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "tittle" class="form-label">Company History</label>
                                        <textarea class="form-control" name="company_history"><?php echo $about_us->company_history?></textarea>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Head Line</label>
                                        <input type="text" class="form-control" name="head_line" value="<?php echo $about_us->head_line?>"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="form-label">About photo :</label>
										<h6>500px * 564px</h6>
                                              <img src="<?php echo base_url()?>/assets/images/about_us/<?php echo $about_us->photo?>" width="200" height="200"/>
                                               <input name="userfile" type="file" class="form-control">
                                        </div>     
                                    </div>
                                </div>
                            <button type="submit" class="btn  btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->