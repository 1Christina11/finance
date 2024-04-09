       <!-- [ breadcrumb ] start -->
       <div class="page-header">
         <div class="page-block">
           <div class="row align-items-center">
             <div class="col-md-12">
               <div class="page-header-title">
                 <h5 class="m-b-10">apply online</h5>
               </div>
               <ul class="breadcrumb">
                 <li class="breadcrumb-item">
                   <a href="
							<?php echo site_url()."/Home/";?>">
                     <i class="feather icon-home"></i>
                   </a>
                 </li>
                 <li class="breadcrumb-item">
                   <a href="
							<?php echo site_url()."/Apply_online/get_content/";?>">apply online </a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <!-- [ breadcrumb ] end -->
       <div class="row">
         <!-- customar project  start -->
         <div class="col-xl-12">
           <div class="card">
             <div class="card-body">
               <div class="row align-items-center m-l-0">
                 <div class="col-sm-6"></div>
               </div>
               <div class="table-responsive">
                 <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="dataTables_length" id="report-table_length">
                         <div class="row">
                           <div class="col-sm-12">
                             <table id="report-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="report-table_info">
                               <thead class="thead-light">
                                 <tr role="row">
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending"> #</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending"> name</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending"> phone</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending">email</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending">time_in_business</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending">credit_score</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending">monthly_revenue</th>
                                   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 161.85px;" aria-label="Action: activate to sort column ascending">Action</th>
                                 </tr>
                               </thead>
                               <tbody> <?php 
															  $x = 1;
															  foreach ($business_loans as $row){?> <tr role="row">
                                   <td scope="row"> <?php echo $x?> </td>
                                   <td> <?php echo $row->name?> </td>
                                   <td> <?php echo $row->phone?> </td>
                                   <td> <?php echo $row->email?> </td>
                                   <td> <?php echo $row->time_in_business?> </td>
                                   <td> <?php echo $row->credit_score?> </td>
                                   <td> <?php echo $row->monthly_revenue?> </td>
                                 </tr> <?php $x++;}?> </tbody>
                             </table>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- customar project  end -->
           </div>
           <!--------------------START MODAL ------------------>
           <!--------------------------END MODAL------------------->
           <!--<div class="row">-->
           <!--
             customar project  start 
       <div class="col-xl-12"><div class="card"><div class="card-body"><div class="row align-items-center m-l-0"><div class="col-sm-6"></div><div class="col-sm-6 text-right"><button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#theModal-1"><i class="feather icon-plus"></i> Add Photos</button></div></div>
-->
           <!--
                        <div class="table-responsive"><div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="report-table_length"></div></div><div class="col-sm-12 col-md-6"><div id="report-table_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="report-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="report-table_info"><thead class="thead-light"><tr role="row"><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending"> #</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="photo: activate to sort column ascending">photo </th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="ph_title: activate to sort column ascending"> Photo Title</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="created_at: activate to sort column ascending"> Created at</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 161.85px;" aria-label="Action: activate to sort column ascending">Action</th></tr></thead><tbody><script src="
		<?php echo base_url()?>assets/js/menu-setting.min.js"></script><script src="
		<?php echo base_url()?>assets/js/plugins/sweetalert.min.js"></script><script src="
		<?php echo base_url()?>assets/js/pages/ac-alert.js"></script>
                                    