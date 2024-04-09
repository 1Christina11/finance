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
                            <li class="breadcrumb-item"><a href="">Loan solutions content</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
		<div class="row">
			<!-- [ horizontal-layout ] start -->
			<?php foreach($loan_solution as $row){?> 
			<div class="col-sm-12">
				<div class="card">
					<div style="text-align: center" class="card-header">
						<h1><?php echo $row->title?></h1>
					</div>
					<div class="card-body">
						<h3 style="text-align: center"><?php echo $row->short_title?></h3>
						<div class="alert alert-info mb-0" role="alert">
							<h5 class="mb-0"><?php echo $row->long_title?></h5>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<!-- [ horizontal-layout ] end -->
		</div>
		<div class="row align-items-center m-l-0">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6 text-right">
				<button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Add card</button>
			</div>
		</div>
        <div class="row">
            <!-- subscribe start -->
<!--
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h5>Event </h5>
                    </div>
                </div>
            </div>
-->
			<?php foreach($content as $row){?> 
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?php echo base_url()?>assets/images/loan/<?php echo $row->logo?>" alt="image" class="img-fluid wid-100 mb-2">
                            <h5><br><?php echo $row->title?></h5>
                        </div>
                        <div style="text-align: center" class="table-responsive">
                            <table class="table table-sm mb-0">
                                <tbody>
                                    <tr>
                                    	<h6><?php echo $row->short_description?></h6>
                                    </tr>
									<br>
									<br>
                                    <tr>
										<textarea disabled style="font-size: 1.3em" name="long_title" class="form-control" id="description" rows="5"><?php echo $row->long_description?></textarea>
                                    </tr>
									<br>
									<br>
                                </tbody>
                            </table>
                        </div>
						<div class="row">
							<div class="col-sm-3">
							</div>
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
							<a href="<?php echo site_url('Loan_solution/edit_content/'.$title_after.'/'.$loan_id)?>"><button style="text-align: center" class="btn btn-primary feather">Read more >></button></a>
							<div class="col-sm-1">
							</div>
							<a href="<?php echo site_url('Loan_solution/delete_content/'.$row->loan_id)?>"><button style="text-align: center" class="btn btn-danger feather icon-trash-2" onClick="return confirm('Are you sure you want to delete this card?')">Delete</button></a>
							<div class="col-sm-3">
							</div>
						</div>
                    </div>
                </div>
            </div>
			<?php }?>
            <!-- subscribe end -->
		</div>
<!-- Modal start -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Card content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Loan_solution/insert_content')?>" method="post" enctype="multipart/form-data">
                    <div class="row">
						<div style="text-align: center" class="col-sm-3">
						</div>
						<div style="text-align: center" class="col-sm-6">
							<div class="form-group">
								<label class="form-label">logo</label>
								<div>
									<input type="file" name="userfiles2" class="validation-file">
								</div>
							</div>
                            <div class="form-group fill">
                                <label class="floating-label" for="title">Title</label>
                                <input required type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>
						<div style="text-align: center" class="col-sm-3">
						</div>
						<div class="col-sm-12">
						<div class="form-group fill">
							<label class="floating-label" for="title">Short description</label>
							<textarea style="font-size: 1em" name="short_description" class="form-control"  placeholder="Short description" rows="2"></textarea>
						</div>
                        </div>
						<div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="description">description</label>
								<textarea style="font-size: 1em" name="long_description" class="form-control"  placeholder="description" rows="12"></textarea>
                            </div>
                        </div>
						<div style="text-align: center" class="col-sm-3">
						</div>
                        <div style="text-align: center" class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="title">Photo title</label>
                                <input required type="text" class="form-control" id="title" name="title_photo_1" placeholder="Photo title">
                            </div>
							<div class="form-group">
								<label class="form-label">photo</label>
								<div>
									<input type="file" name="userfiles"class="validation-file">
								</div>
							</div>
						</div>
						<div style="text-align: center" class="col-sm-3">
						</div>
						<div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="description">Photo description</label>
								<textarea style="font-size: 1em" name="photo_description_1" class="form-control"  placeholder="Photo description" rows="12"></textarea>
                            </div>
                        </div>
						<div style="text-align: center" class="col-sm-3">
						</div>
                        <div style="text-align: center" class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="title">Photo title</label>
                                <input required type="text" class="form-control" id="title" name="title_photo_2" placeholder="Photo title">
                            </div>
							<div class="form-group">
								<label class="form-label">photo</label>
								<div>
									<input type="file" name="userfiles3"class="validation-file">
								</div>
							</div>
						</div>
						<div style="text-align: center" class="col-sm-3">
						</div>
						<div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="description">Photo description</label>
								<textarea style="font-size: 1em" name="photo_description_2" class="form-control"  placeholder="Photo description" rows="12"></textarea>
                            </div>
                        </div>
						<div class="col-sm-8">
                        </div>
						<div style="text-align: right" class="col-sm-4">
							<button type="submit" class="btn btn-primary">Create</button>
							<button type="reset" class="btn btn-danger">Clear</button>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
