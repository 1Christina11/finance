        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Industries we serve</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.gcsfinancialcorp.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Industries we serve</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url('We_serve/update_we_serve')?>" method="post">
<!--
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
-->
							<?php foreach($industries as $row){?>
                            <div class="row">
								<div style="text-align: center" class="col-sm-12">
									<div class="form-group">
										<label>Head title</label>
										<h1><input value="<?php echo $row->title?>" style="font-size: 1.5em" name="title" type="text" class="form-control" placeholder="Head title"></h1>
									</div>
								</div>
							</div>
                            <div class="row">
								<div style="text-align: center" class="col-sm-12">
									<div class="form-group">
										<label>Sub-title</label>
										<input value="<?php echo $row->short_title?>" style="font-size: 1.2em" name="short_title" type="text" class="form-control" placeholder="Sub-title">
									</div>
								</div>
							</div>
                            <div class="row">
								<div style="text-align: center" class="col-sm-12">
									<div class="form-group">
										<label>Short description</label>
										<textarea style="font-size: 1em" name="long_title" class="form-control"  placeholder="Short description" rows="3"><?php echo $row->long_title?></textarea>
									</div>
								</div>
							</div>
							<?php }?>
<!--
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea id="tinymce-editor">
                                                <p>hello..</p>
                                            </textarea>
                                <div class="file btn waves-effect waves-light btn-outline-primary mt-3 file-btn">
                                    <i class="feather icon-paperclip"></i>Add Atachment
                                    <input type="file" name="file" />
                                </div>
                            </div>
-->
                            <div class="row">
								<div class="col-sm-3">
								</div>
								<div style="text-align: center" class="col-sm-6">
									<button  type="submit" class="btn waves-effect waves-light btn-primary">Altering</button>
								</div>	
								<div class="col-sm-3">
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->