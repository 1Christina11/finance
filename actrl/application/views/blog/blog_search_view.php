		<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="page-header-title">
						<h5 class="m-b-10">Blog search</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="<?php echo site_url('Blog/') ?>">Blogs</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->

<div class="row">
	<div class="col-md-1">
	</div>
	<!-- [ Date-from & Date-to] start -->
	<div class="col-md-10">
		<div class="card">
			<div class="card-body">
			<div class="card-header" align="center">
				<h5>Search</h5>
			</div>
				<form action="<?php echo site_url('Blog/search_result_blog')?>" method="post">
					<div class="row form-group">
						<div class="col-sm-2">
							<label for="date_from" class="col-form-label">Date from</label>
						</div>
						<div class="col-sm-4">
							<input id="date_from" name="date_from" type="date" class="form-control date" data-mask="99/99/9999">
						</div>
						<div class="col-sm-2">
							<label for="date_to" class="col-form-label">Date to</label>
						</div>
						<div class="col-sm-4">
							<input id="date_to" name="date_to" type="date" class="form-control date2" data-mask="99/99/9999">
						</div>
					</div>
					<!-- [ Date-from & Date-to ] end -->

					<!-- [ Impotancem ] end -->
					<div class="row">
						<div class="col-sm-12 text-right">
							<button type="submit" style=" right: auto" class="btn btn-success btn-sm btn-round has-ripple" ><i class="feather icon-search"></i> Search</button>
							<button type="reset" style=" right: auto" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="feather icon-delete"></i> Clear</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		<!-- [ Main Content ] end -->

          

