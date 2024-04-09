        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.gcsfinancialcorp.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Privacy Policy</h5>
                    </div>
                    <div class="card-body">
						<div class="row">
							<?php //foreach($privacy_policy as $row){?>
							<div class="col-sm-12">
								<form action="<?php echo site_url('Privacy_policy/update_privacy_policy')?>" method="post">
									<div class="form-group">
										<textarea name="privacy_policy" class="form-control" rows="7"><?php //echo $row->privacy_policy?></textarea>
									</div>
								</form>
							</div>
							<?php //}?>
						</div>
						<div class="row">
							<div class="col-sm-11">
							</div>
							<div class="col-sm-1">
								<button style="text-align: right" type="submit" class="btn  btn-primary">Save</button>
							</div>
						</div>
                    </div>
                </div>
            </div>
		</div>