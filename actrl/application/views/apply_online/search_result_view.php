			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">loans searsh result</h5>
							</div>
							<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="<?php echo site_url('Apply_online/loans_search') ?>">loans search</a></li>
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
					<th>name</th>
					<th>phone</th>
					<th>E_mail</th>
					<th>time_in_business</th>
					<th>credit_score</th>
					<th>monthly_revenue</th>
	
				</tr>
			 </thead>

			<tbody>
			
			 <?php $x=1;
				 foreach ($business_loans as $row)
				{;?>
			  <tr role="row">
				 <td scope="row"><?php echo $x?></td>

			  	 <td><?php echo $row->name?></td>           
				 <td><?php echo $row->phone?></td>
				 <td><?php echo $row->email ?></td>  
				 <td><?php echo $row->time_in_business?></td>
				 <td><?php echo $row->credit_score?></td>
				 <td><?php echo $row->monthly_revenue?></td>           
                
	
				  
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
