        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">online content</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="http://actrl.gcsfinancialcorp.com">
                      <i class="feather icon-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="">online content</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row">
          <!-- [ horizontal-layout ] start -->
          <!-- [ horizontal-layout ] end -->
        </div>
        <div class="row align-items-center m-l-0">
          <div class="col-sm-6"></div>
          <div class="col-sm-6 text-right">
            <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report">
              <i class="feather icon-plus"></i>Add card </button>
          </div>
        </div>
        <div class="row">
          <!-- subscribe start -->
          <!--
            <div class="col-md-12"><div class="card"><div class="card-header border-0"><h5>Event </h5></div></div></div>
--> <?php foreach($online_content as $row){?> <div class="col-lg-6 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img src="
						<?php echo base_url()?>assets/images/apply/
						<?php echo $row->logo?>" alt="image" class="img-fluid wid-100 mb-2">
                  <h5>
                    <br> <?php echo $row->title?>
                  </h5>
                </div>
                <div style="text-align: left" class="table-responsive">
                  <table class="table table-sm mb-0">
                    <tbody>
                      <tr> <?php echo $row->item_1?> <br> <?php echo $row->item_2?> <br> <?php echo $row->item_3?> <br> <?php echo $row->item_4?> <br> <?php echo $row->cta?>  </tr>
                      <br>
                      <br>
                      <tr>
                        <textarea disabled style="font-size: 1.5em" name="long_title" class="form-control" id="description" rows="5">
																<?php echo $row->description?>
															</textarea>
                      </tr>
                      <br>
                      <br>
                    </tbody>
                  </table>
                </div>
                <div class="row">
                  <div class="col-sm-3"></div>  <a href="
									<?php echo site_url('Apply_online/edit_content/'. $row->content_id)?>">
                    <button style="text-align: center" class="btn btn-primary feather">edit</button>
                  </a>
                  <div class="col-sm-1"></div>
                  <a href="
															<?php echo site_url('Apply_online/delete_content/'.$row->content_id)?>">
                    <button style="text-align: center" class="btn btn-danger feather icon-trash-2" onClick="return confirm('Are you sure you want to delete this card?')">Delete</button>
                  </a>
                  <div class="col-sm-3"></div>
                </div>
              </div>
            </div>
          </div> <?php }?>
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
                <form action="
														<?php echo site_url('Apply_online/insert_content')?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div style="text-align: center" class="col-sm-3"></div>
                    <div style="text-align: center" class="col-sm-6">
                      <h5>dont write any special character</h5>
                      <div class="form-group">
                        <label required class="form-label">logo</label>
                        <div>
                          <input type="file" name="userfile" class="validation-file">
                        </div>
                      </div>
                      <div class="form-group fill">
                        <label class="floating-label" for="title">Title</label>
                        <input required type="text" class="form-control" id="title" name="title" placeholder="Title">
                      </div>
                    </div>
                    <div style="text-align: center" class="col-sm-3"></div>
                    <div class="col-sm-12">
                      <div class="form-group fill">
                        <label class="floating-label" for="description"> description</label>
                        <textarea style="font-size: 1em" name="description" class="form-control" required placeholder="description" rows="2"></textarea>
                      </div>
                      <div class="form-group fill">
                        <label class="floating-label" for="title"> Cta</label>
                       
                        <input type="text" class="form-control" id="cta" name="cta" required placeholder="cta" style="font-size: 1em">
                      </div>
                      
                            <div class="form-group fill"><label class="floating-label" for="title">item_1</label><input  type="text" class="form-control" id="item_1" name="item_1" placeholder="item_1" style="font-size: 1em" ></div>

                      <br>
                      <div class="form-group fill">
                        <label class="floating-label" for="title">item_2</label>
                        <input type="text" class="form-control" id="item_2" name="item_2" placeholder="item_2" style="font-size: 1em">
                      </div>
                      <br>
                      <div class="form-group fill">
                        <label class="floating-label" for="title">item_3</label>
                        <input type="text" class="form-control" id="item_3" name="item_3" placeholder="item_3" style="font-size: 1em">
                      </div>
                      <br>
                      <div class="form-group fill">
                        <label class="floating-label" for="title">item_4</label>
                        <input type="text" class="form-control" id="item_4" name="item_4" placeholder="item_4" style="font-size: 1em">
                      </div>
                      <br>
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