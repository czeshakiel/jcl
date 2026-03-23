<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle"><?=$title;?></h1>						
					</div>					
					<div class="row">													
						<div class="col-xl-6 col-sm-12 col-md-12 col-lg-12">
							<?php
							$display="style='display:none;'";
							$alert="";
							$message="";
							if($this->session->success){
								$display="";
								$alert="success";
								$message=$this->session->success;
							}
							if($this->session->failed){
								$display="";
								$alert="danger";
								$message=$this->session->failed;
							}
							?>
							<div class="alert alert-<?=$alert;?> alert-dismissible" role="alert" <?=$display;?>>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								<div class="alert-message">
									<strong><?=$message;?>!</strong>
								</div>
							</div>						
							<div class="card">
								<div class="card-header">                                    
									<h5 style="float:left;" class="card-title">Plan Type</h5>									
                                    <div style="float:right;">
                                        <a href="#" class="btn btn-primary btn-sm text-white addPlanType" data-bs-toggle="modal" data-bs-target="#ManagePlanType">Add New Type</a>
                                    </div>
								</div>
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>No.</th>
												<th>Description</th>
												<th>Amount</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$x=1;
											foreach($items as $item){
											?>
												<tr>
													<td><?=$x;?>.</td>
													<td><?=$item['description'];?></td>
													<td align="right"><?=number_format($item['amount'],2);?></td>
													<td><a href="#" class="btn btn-success btn-sm editPlanType" data-bs-toggle="modal" data-bs-target="#ManagePlanType" data-id="<?=$item['id'];?>_<?=$item['description'];?>_<?=$item['amount'];?>">Edit</a> <a href="<?=base_url("delete_plan_type/$item[id]");?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you wish to remove this plan type?');return false;">Delete</a></td>
												</tr>
											<?php
											$x++;
											}
											?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>