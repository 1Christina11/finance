
<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
							<br>
							<br>
                            <h5 class="m-b-10">Contact Us</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Contact Us</a></li>
                        </ul>
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
                        <h5>Contact Us</h5>
                    </div>
                    <div class="card-body">
					<form action="<?php echo site_url('Contact_us/update_contact_us')?>" method="post"  >

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<input type="hidden" name="contact_us_id" value=""/>
										
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="The Address" value="<?php echo $contact_us->address?>"/>
                                    </div>
                                </div>
								
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="e_mail" placeholder="Email" value="<?php echo $contact_us->e_mail?>"/>
                                    </div>
                                </div>
								
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No.</label>
                                        <input type="tel" class="form-control" name="phone1" value="<?php echo $contact_us->phone1?>"/>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Another Phone No.</label>
                                        <input type="tel" class="form-control" name="phone2" value="<?php echo $contact_us->phone2?>"/>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Site ON Map</label>
                                        <input type="tel" class="form-control" name="site_on_map" value="<?php echo $contact_us->site_on_map?>"/>
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
<!--
    </div>
</section>
-->