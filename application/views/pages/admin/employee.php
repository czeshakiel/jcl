<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle"><?=$title;?></h1>						
					</div>					
					<div class="row">													
						<div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
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
									<h5 style="float:left;" class="card-title">Branch</h5>									
                                    <div style="float:right;">
                                        <a href="#" class="btn btn-primary btn-sm text-white addEmployee" data-bs-toggle="modal" data-bs-target="#ManageEmployee">Add New Employee</a>
                                    </div>
								</div>
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>No.</th>
												<th>Last Name</th>												
												<th>First Name</th>
                                                <th>Middle Name</th>
                                                <th width="5%">Suffix</th>
                                                <th>Designation</th>
                                                <th>Gender</th>
                                                <th>Birth Date</th>
                                                <th>Branch</th>
                                                <th>Date Employed</th>
                                                <th>Status</th>
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
													<td><?=$item['lastname'];?></td>
                                                    <td><?=$item['firstname'];?></td>
                                                    <td><?=$item['middlename'];?></td>
                                                    <td><?=$item['suffix'];?></td>
                                                    <td><?=$item['position'];?></td>
                                                    <td><?=$item['gender'];?></td>
                                                    <td><?=$item['birthdate'];?></td>
                                                    <td><?=$item['branch'];?></td>
                                                    <td><?=$item['date_employed'];?></td>
                                                    <td><?=$item['status'];?></td>
													<td><a href="#" class="btn btn-success btn-sm editEmployee" data-bs-toggle="modal" data-bs-target="#ManageEmployee" data-id="<?=$item['id'];?>">Edit</a> <a href="<?=base_url("delete_employee/$item[id]");?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you wish to remove this employee?');return false;">Delete</a> <a href="#" class="btn btn-warning btn-sm editUserAccount" data-bs-toggle="modal" data-bs-target="#ManageUserAccount" data-id="<?=$item['id'];?>_<?=$item['username'];?>_<?=$item['password'];?>">Account</a></td>
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