<!-- [ breadcrumb ] start -->
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Edit Blog</h5>
				</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo site_url('')?>"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="<?php echo site_url('Blog/') ?>"> Blogs</a></li>
					</ul>
			</div>
		</div>
	</div>
</div>
<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row btn-page">
	<!-- [ edit ] start -->
	<div class="col-sm-12">
		
		<form action="<?php echo site_url('Blog/update_blog')?>" method="post" enctype="multipart/form-data">
			<div class="card">
				
				<div class="card-header">
					<input value="<?php echo $blog->blog_id ?>" type="hidden" name="blog_id">
					<h5 style="background-color: #D1E8FF" >Blog Data</h5>
				</div>
				<div class="card-body">
					<div class="row align-items-center m-l-0">
						<div class="col-sm-6">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="floating-label" for="titel_blog">Title</label>
								<input value="<?php echo $blog->titel_blog ?>" class="form-control" id="title_blog" name="titel_blog" ></input>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="floating-label" for="description_blog" >Description</label>
								<textarea class="form-control"  name="description_blog"  id="description_blog" rows="15"><?php echo $blog->description_blog ?></textarea>
							</div>
						</div>
	
					<div class="col-sm-6">
						<label style="color: dodgerblue" >Photo</label>
						<img src="<?php echo base_url() . '/assets/images/gallery-grid/'?><?php echo $blog->photo_blog?>" width="300" height="300"/>
						<input name="photo_name" type="file" class="form-control">
					 </div>
				  </div>
				<div class="row btn-page">
					<div class="col-sm-12">
						<div class="row align-items-center m-l-6">
							<div class="col-sm-6 text-right">
								<button data-type="horizontal" type="submit" style=" right: auto" class="btn notifications btn-success btn-sm btn-round has-ripple" >Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>	
	</div>
	<!-- [ notification ] end -->
</div>
<!-- [ Main Content ] end -->
