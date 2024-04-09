        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">content</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://actrl.gcsfinancialcorp.com"><i class="feather icon-home"></i></a></li>
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
						<form action="<?php echo site_url('Apply_online/update_content')?>" method="post" enctype="multipart/form-data">
			
							<div class="row">
								<input value="<?php echo $online_content->content_id?>" type="hidden" class="form-control"  name="content_id">
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div style="text-align: center" class="col-sm-6">
									<div class="form-group">
										<label class="form-label">logo</label>
										<img alt="image" class="img-fluid wid-100 mb-1" src="<?php echo base_url()?>assets/images/apply/<?php echo $online_content->logo?>">
										<div>
											<input name="logo" type="hidden" value="<?php echo $online_content->logo?>">
											<input type="file" name="userfiles2" class="validation-file">
										</div>
									</div>
									<div class="form-group fill">
										<label class="floating-label" for="title">Title</label>
										<input style="font-size: 1.4em" value="<?php echo $online_content->title?>" required type="text" class="form-control" id="title" name="title" placeholder="Title">
									</div>
								</div>
								<div style="text-align: center" class="col-sm-3">
								</div>
								<div class="col-sm-12">
									<div class="form-group fill">
										<label class="floating-label" for="title"> description</label>
										<textarea style="font-size: 1.3em" name="description" class="form-control"  placeholder=" description" rows="2"><?php echo $online_content->description?></textarea>
									</div>
								</div>
							<div class="form-group fill">
										<label class="floating-label" for="item_1">Item 1</label>
										<input style="font-size: 1.4em" value="<?php echo $online_content->item_1?>" required type="text" class="form-control" id="item_1" name="item_1" placeholder="item_1">
									</div>
														<div class="form-group fill">
										<label class="floating-label" for="item_1">Item 2</label>
										<input style="font-size: 1.4em" value="<?php echo $online_content->item_2?>" required type="text" class="form-control" id="item_2" name="item_2" placeholder="item_2">
									</div>
															<div class="form-group fill">
										<label class="floating-label" for="item_1">Item 3</label>
										<input style="font-size: 1.4em" value="<?php echo $online_content->item_3?>" required type="text" class="form-control" id="item_3" name="item_3" placeholder="item_3">
									</div>
							<div class="form-group fill">
										<label class="floating-label" for="item_1">Item 4</label>
										<input style="font-size: 1.4em" value="<?php echo $online_content->item_4?>" required type="text" class="form-control" id="item_4" name="item_4" placeholder="item_4">
									</div>
							
								
								<div style="text-align: right" class="col-sm-4">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-danger">Clear</button>
								</div>
							</div>
						
						</form>
					</div>
				</div>
			</div>
			<!-- [ horizontal-layout ] end -->
		</div>

		