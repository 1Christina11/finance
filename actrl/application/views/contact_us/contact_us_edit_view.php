   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
							<br>
							<br>
                    <h5 class="m-b-10">contact Us</h5>
                  </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/home"><i class="feather icon-home"></i></a>
							</li>

                        </ul>
                    </div>
            <div class="page-block">                    
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
                        <h5>Contact Us</h5>
                    </div>
                    <div class="card-body">
		
	<form action="<?php echo site_url('Contact_us/update_contact_us')?>" method="post"  >			
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
								  <input type="hidden" name="id" value="<?php echo $contact_us->contact_us_id?>"/>
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" value="<?php echo $contact_us->address?>"  </input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E_mail</label>
                                        <input type="text" class="form-control" name="e_mail" value="<?php echo $contact_us->e_mail?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No. 1</label>
                                        <input type="text" class="form-control" name="phone1" value="<?php echo $contact_us->phone1?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Location</label>
                                        <input type="text" class="form-control" name="site_on_map" value="<?php echo $contact_us->site_on_map?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No. 2</label>
                                        <input type="text" class="form-control" name="phone2" value="<?php echo $contact_us->phone2?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook_link" value="<?php echo $contact_us->facebook_link?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Instgram Link</label>
                                        <input type="text" class="form-control" name="instgram_link" value="<?php echo $contact_us->instgram_link?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter_link" value="<?php echo $contact_us->twitter_link?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">LinkedIn Link</label>
                                        <input type="text" class="form-control" name="linkedin_link" value="<?php echo $contact_us->linkedin_link?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pinterest Link</label>
                                        <input type="text" class="form-control" name="pinterest_link" value="<?php echo $contact_us->pinterest_link?>">
                                    </div>
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