			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10"> Searsh Result</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Blog/search_blog') ?>"> Searsh</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Blog/search_sess_result_blog') ?>"> Search Result</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ notification ] start -->
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body">
							<div class="row align-items-center m-l-0">
								<div class="col-sm-6">
								</div>
							</div>
	<div class="table-responsive">
		<table id="report-table" class="table table-bordered table-striped mb-0">
			 <thead>
				<tr>
					<th>#</th>
					<th>Image</th>
					<th>Title</th>
					<th>Description</th>
					<th>Created_at</th>
					<th>Action</th>
				</tr>
			 </thead>

			<tbody>
			
			 <?php
					$x=1;
				 foreach ($blog as $row)
				{;?>
			  <tr role="row" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; black: goldenrod">
				 <td scope="row"><?php echo $x?></td>
			     <td><img src="<?php echo base_url()?>/assets/images/gallery-grid/<?php echo $row->photo_blog?>" width="200" height="200"/></td>

			  	 <td><?php echo $row->titel_blog?></td>           
				 <td><?php echo $row->description_blog?></td>
				 <td><?php echo $row->created_at?></td>
                
				 <td class="table-action">

					<a href="<?php echo site_url('Blog/edit_blog_sess/' . $row->blog_id)?>" class="btn btn-info btn-sm">Edit</a>
					<a href="<?php echo site_url('Blog/delete_blog_sess/' . $row->blog_id)?>" class="btn btn-danger btn-sm">Delete</a>


					</td>
				  
				</tr>
                
				  <?php $x++;
                }?>
			  
			 
			  </tbody>
			</table>
			</div>
	  	 </div>
	  </div>
    </div>	
  </div>
