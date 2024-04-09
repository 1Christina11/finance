   <div class="page-header">
     <div class="page-block">
       <div class="row align-items-center">
         <div class="col-md-12">
           <div class="page-header-title">
             <br>
             <br>
             <h5 class="m-b-10">apply online</h5>
           </div>
           <ul class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="
									
									<?php echo site_url()?>/home">
                 <i class="feather icon-home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">
               <a href="
									
									<?php echo site_url()?>/Apply_online/edit_apply_online">apply online </a>
             </li>
           </ul>
         </div>
         <div class="page-block"></div>
       </div>
     </div>
     <!-- [ breadcrumb ] end -->
     <!-- [ Main Content ] start -->
     <div class="row">
       <!-- [ Form Validation ] start -->
       <div class="col-sm-12">
         <div class="card">
           <div class="card-header">
             <h5>apply online</h5>
           </div>
           <div class="card-body">
             <form action="
								
								<?php echo site_url('Apply_online/update_apply_online')?>" method="post">
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="hidden" name="id" value="
												<?php echo $apply_online->online_id?>" />
                     <label class="form-label">head line :</label>
                     <input type="text" class="form-control" name="head_title" value="
													<?php echo $apply_online->head_title?>" </input>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label class="form-label"> sub title :</label>
                     <input type="text" class="form-control" name="title" value="
													<?php echo $apply_online->title?>">
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label class="form-label">description :</label>
                     <input type="text" class="form-control" name="description" value="
														<?php echo $apply_online->description?>">
                   </div>
                 </div>
               </div>
           </div>
           <button type="submit" class="btn  btn-primary">Save</button>
           </form>
         </div>
       </div>
     </div>
     <!-- [ Form Validation ] end -->
   </div>
   <!-- [ Main Content ] end -->
   <!--

   <div class="page-header"><div class="page-block"><div class="row align-items-center"><div class="col-md-12"><div class="page-header-title"><br><br><h5 class="m-b-10">apply online</h5></div><ul class="breadcrumb"><li class="breadcrumb-item"><a href="
					<?php echo site_url()?>/home"><i class="feather icon-home"></i></a></li><li class="breadcrumb-item"><a href="
					<?php echo site_url()?>/Apply_online/edit_apply_online">apply online</a></li></ul></div><div class="page-block"></div></div></div>
-->
   <!-- [ breadcrumb ] end -->
   <!-- [ Main Content ] start -->
   <!--        <div class="row">-->
   <!-- [ Form Validation ] start -->
   <!--
            <div class="col-sm-12"><div class="card"><div class="card-header"><h5>apply online</h5></div><div class="card-body"><form action="
					<?php echo site_url('Apply_online/update_apply_online')?>" method="post"  ><div class="row"><div class="col-md-6"><div class="form-group"><input type="hidden" name="id" value="<?php echo $apply_online->online_id?>"/><label class="form-label">head_title :</label><input type="text" class="form-control" name="head_title" value="
					<?php echo $apply_online->head_title?>"  </input></div></div><div class="col-md-6"><div class="form-group"><label class="form-label">title :</label><input type="text" class="form-control" name="title" value="
					<?php echo $apply_online->title?>"></div></div><div class="col-md-6"><div class="form-group"><label class="form-label">description :</label><input type="text" class="form-control" name="description" value="
					<?php echo $apply_online->description?>"></div></div></div></div><button type="submit" class="btn  btn-primary">Save</button></form></div></div></div>
             [ Form Validation ] end 
-->
   <!--        </div>-->
   <!-- [ Main Content ] end -->