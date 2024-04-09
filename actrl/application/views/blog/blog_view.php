        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Blog</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

		<div class="row align-items-center m-l-0">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6 text-right">
				<button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Add card</button>
			</div>
		</div>
        <div class="row">
            <!-- subscribe start --> 
			<?php foreach($blogs as $row){?> 
			
			<div class="col-md-6 col-xl-4">
				<hr>
				<div class="card">
					<div class="card-body-6">
						<h4 class="card-title"><?php echo $row->titel_blog?></h4>
						<br>
						<h5><?php echo $row->created_at?></h5>
						<p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; black: goldenrod"><?php echo $row->description_blog?>.....</p>
						<p class="card-text"><small class="text-muted">
							</small></p>
					</div>
					<img class="img-fluid card-img-bottom" height="233" width="363"  src="<?php echo base_url()?>/assets/images/gallery-grid/<?php echo $row->photo_blog?>" alt="image">
					<div class="row-sm-12 text-right">
						<a href="<?php echo site_url('Blog/delete_blog/'.$row->blog_id)?>"><button style="text-align: center" class="btn btn-danger feather icon-trash-2" onClick="return confirm('Are you sure you want to delete this card?')">Delete</button></a>
						<a href="<?php echo site_url('Blog/edit_blog/'.$row->blog_id)?>"><button style="text-align: center" class="btn btn-primary feather">Read more >></button></a>
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
                <h5 class="modal-title">Card Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('/Blog/insert_blog')?>" method="post" enctype="multipart/form-data">
                    <div class="row">
						<div style="text-align: center" class="col-sm-3">
						</div>
                        <div style="text-align: center" class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="title">Title</label>
                                <input required type="text" class="form-control" id="title" name="titel_blog" >
                            </div>
							<div class="form-group">
								<label class="form-label" for="photo_blog">photo</label>
								<div>
									<input required type="file" id="photo_blog" name="photo_name"class="validation-file">
								</div>
							</div>
						</div>
						<div style="text-align: center" class="col-sm-3">
						</div>
						<div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="description"> description</label>
								<textarea style="font-size: 1em" name="description_blog" class="form-control"   id="description" rows="12" required></textarea>
                            </div>
                        </div>
						<div class="col-sm-8">
                        </div>
						<div style="text-align: right" class="col-sm-4">
							<button type="reset" class="btn btn-danger">Create</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
