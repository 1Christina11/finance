		<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="page-header-title">
						<h5 class="m-b-10">loans search</h5>
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
	<div class="col-md-1">
	</div>
	<!-- [ Date-from & Date-to] start -->
	<div class="col-md-10">
		<div class="card">
			<div class="card-body">
			<div class="card-header" align="center">
	
			</div>
				<form action="<?php echo site_url('Apply_online/loans_search_result')?>" method="post">
					<!-- [ Date-from & Date-to ] end -->
			<!-- [ Account Type ] start -->
			<div class="card-header" align="center">
				<h5>title</h5>
			</div>
					<br>
					 <div class="row">
                        <div class="col-lg-6">
                           <select  class="form-control"  aria-label="Default select example" name="credit_score">
							  <option selected>credit_score</option>
							  <option value="Excellent (700 >)">Excellent (700 >)</option>
							  <option value="Good (650-700)">Good (650-700)</option>
							  <option value="Fair (600-650)">Fair (600-650)</option>           
							</select>
                        </div>
                        <div class="col-lg-6">
                           <select  class="form-control" aria-label="Default select example" name="time_in_business">
							  <option selected>time_in_business</option>
							  <option value="3+ years">3+ years</option>
							  <option value="2-3 years">2-3 years</option>
							  <option value="6-12 months">6-12 months</option>           
							</select>
                        </div>
                     </div>
					<!-- [ Account Type ] end -->
			<!-- [ User ] start -->
			<div class="card-header" align="center">
				<h5>Member Data</h5>
			</div>
				<br>
					<div class="row form-group">
						<div class="col-sm-8">
							<label class="col-form-label" for="first_name">Name</label>
							<input id="name" name="name" type="text" class="form-control date">
						</div>
						<div class="col-sm-8">
						<label class="col-form-label" for="mobile_no">Mobile Number</label>
							<input id="phone" name="phone" type="text" class="form-control date">
						</div>
						<div class="col-sm-8">
						<label class="col-form-label" for="email">E_mail</label>
							<input id="email" name="email" type="email" class="form-control date">
						</div>

						<div class="col-sm-8">
						<label class="col-form-label" for="address">monthly_revenue</label>
							<input id="monthly_revenue" name="monthly_revenue" type="text" class="form-control date">
						</div>
						</div>
					<br>

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

          

