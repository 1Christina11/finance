        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Business loan solution</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://actrl.gcsfinancialcorp.com"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Loan_solution/get_content')?>">Loan solutions content</a></li>
                            <li class="breadcrumb-item"><a href="">Content</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			<!-- [ horizontal-layout ] start -->
			<div class="col-sm-12">
				<div class="card">
                    <div class="card-header">
                        <h5>Card content</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url('Loan_solution/update_content')?>" method="post" enctype="multipart/form-data">
							<?php $x=0;
								  foreach($content as $row){?> 
							<div class="row">
								<input value="<?php echo $row->loan_id?>" type="hidden" class="form-control"  name="loan_id">
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div style="text-align: center" class="col-sm-6">
									<div class="form-group">
										<label class="form-label">logo</label>
										<img alt="image" class="img-fluid wid-100 mb-1" src="<?php echo base_url()?>assets/images/loan/<?php echo $row->logo?>">
										<div>
											<input name="logo" type="hidden" value="<?php echo $row->logo?>">
											<input type="file" name="userfiles2" class="validation-file">
										</div>
									</div>
									<div class="form-group fill">
										<label class="floating-label" for="title">Title</label>
										<input style="font-size: 1.4em" value="<?php echo $row->title?>" required type="text" class="form-control" id="title" name="title" placeholder="Title">
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div class="col-sm-12">
									<div class="form-group fill">
										<label class="floating-label" for="title">Short description</label>
										<textarea style="font-size: 1.3em" name="short_description" class="form-control"  placeholder="Short description" rows="2"><?php echo $row->short_description?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group fill">
										<label class="floating-label" for="description">description</label>
										<textarea style="font-size: 1.1em" name="long_description" class="form-control"  placeholder="description" rows="12"><?php echo $row->long_description?></textarea>
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div style="text-align: center" class="col-sm-6">
									<div class="form-group fill">
										<label class="floating-label" for="title">Photo title</label>
										<input style="font-size: 1.3em" value="<?php echo $row->title_photo_1?>" required type="text" class="form-control" id="title" name="title_photo_1" placeholder="Photo title">
									</div>
									<div class="form-group">
										<img alt="image" class="img-fluid wid-300 mb-1" src="<?php echo base_url()?>assets/images/loan/<?php echo $row->photo_1?>">
										<label class="form-label">photo</label>
										<div>
											<input name="photo1" type="hidden" value="<?php echo $row->photo_1?>">
											<input type="file" name="userfiles" class="validation-file" >
										</div>
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div class="col-sm-12">
									<div class="form-group fill">
										<label class="floating-label" for="description">Photo description</label>
										<textarea style="font-size: 1.1em" name="photo_description_1" class="form-control"  placeholder="Photo description" rows="12"><?php echo $row->photo_description_1?></textarea>
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div style="text-align: center" class="col-sm-6">
									<div class="form-group fill">
										<label class="floating-label" for="title">Photo title</label>
										<input style="font-size: 1.3em" value="<?php echo $row->title_photo_2?>" required type="text" class="form-control" id="title" name="title_photo_2" placeholder="Photo title">
									</div>
									<div class="form-group">
										<img alt="image" class="img-fluid wid-300 mb-1" src="<?php echo base_url()?>assets/images/loan/<?php echo $row->photo_2?>">
										<label class="form-label">photo</label>
										<div>
											<input name="photo2" type="hidden" value="<?php echo $row->photo_2?>">
											<input type="file" name="userfiles3" class="validation-file" >
										</div>
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div class="col-sm-12">
									<div class="form-group fill">
										<label class="floating-label" for="description">Photo description</label>
										<textarea style="font-size: 1.1em" name="photo_description_2" class="form-control"  placeholder="Photo description" rows="12"><?php echo $row->photo_description_2?></textarea>
									</div>
								</div>
								<div class="col-sm-8">
								</div>
								<div style="text-align: right" class="col-sm-4">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-danger">Clear</button>
								</div>
							</div>
							<?php $x++;}?>
						</form>
					</div>
				</div>
			</div>
			<!-- [ horizontal-layout ] end -->
		</div>
