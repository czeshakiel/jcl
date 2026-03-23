<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Leaving so soon?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<div class="modal-body m-3">
				<h2>Do you wish  to logout?</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, I will stay.</button>
				<a href="<?=base_url('admin_logout');?>" class="btn btn-danger">Yes, I will go!</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ManagePlanType" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Manage Plan Type</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?=form_open(base_url('save_plan_type'));?>
			<input type="hidden" name="id" id="plan_id">
			<div class="modal-body m-3">
				<div class="mb-3">
					<label class="form-label">Description</label>
					<input class="form-control form-control-lg" type="text" name="description" id="plan_description">
				</div>
				<div class="mb-3">
					<label class="form-label">Amount</label>
					<input class="form-control form-control-lg" type="text" name="amount" id="plan_amount">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</a>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>

<div class="modal fade" id="ManageDesignation" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Manage Designation </h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?=form_open(base_url('save_designation'));?>
			<input type="hidden" name="id" id="des_id">
			<div class="modal-body m-3">
				<div class="mb-3">
					<label class="form-label">Description</label>
					<input class="form-control form-control-lg" type="text" name="description" id="des_description">
				</div>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</a>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>

<div class="modal fade" id="ManageBranch" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Manage Branch</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?=form_open(base_url('save_branch'));?>
			<input type="hidden" name="id" id="branch_id">
			<div class="modal-body m-3">
				<div class="mb-3">
					<label class="form-label">Description</label>
					<input class="form-control form-control-lg" type="text" name="description" id="branch_description">
				</div>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</a>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>

<div class="modal fade" id="ManageEmployee" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Manage Employee</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?=form_open(base_url('save_employee'));?>
			<input type="hidden" name="id" id="emp_id">
			<div class="modal-body m-3">
				<div class="mb-3">
					<label class="form-label">Last Name</label>
					<input class="form-control form-control-lg" type="text" name="lastname" id="emp_lastname" required>
				</div>
				<div class="mb-3">
					<label class="form-label">First Name</label>
					<input class="form-control form-control-lg" type="text" name="firstname" id="emp_firstname" required>
				</div>
				<div class="mb-3">
					<label class="form-label">Middle Name</label>
					<input class="form-control form-control-lg" type="text" name="middlename" id="emp_middlename" required>
				</div>
				<div class="mb-3">
					<label class="form-label">Suffix</label>
					<input class="form-control form-control-lg" type="text" name="suffix" id="emp_suffix">
				</div>
				<div class="mb-3">
					<label class="form-label">Designation</label>
					<select class="form-control form-control-lg" name="designation" id="emp_designation" required>
						<option value="">Select Designation</option>
						<?php
						$query=$this->General_model->getAllDesignation();
						foreach($query as $des){
							echo "<option value='$des[id]'>$des[description]</option>";
						}
						?>
					</select>	
				</div>
				<div class="mb-3">
					<label class="form-label">Birth Date</label>
					<input class="form-control form-control-lg" type="date" name="birthdate" id="emp_birthdate" required>
				</div>
				<div class="mb-3">
					<label class="form-label">Gender</label>
					<select class="form-control form-control-lg" name="gender" id="emp_gender" required>
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>						
					</select>	
				</div>
				<div class="mb-3">
					<label class="form-label">Date Employed</label>
					<input class="form-control form-control-lg" type="date" name="date_employed" id="emp_date_employed" required>
				</div>
				<div class="mb-3">
					<label class="form-label">Branch</label>
					<select class="form-control form-control-lg" name="branch" id="emp_branch" required>
						<option value="">Select Branch</option>
						<?php
						$query=$this->General_model->getAllBranch();
						foreach($query as $br){
							echo "<option value='$br[id]'>$br[description]</option>";
						}
						?>
					</select>	
				</div>
				<div class="mb-3">
					<label class="form-label">Status</label>
					<select class="form-control form-control-lg" name="status" id="emp_status" required>
						<option value="Active">Active</option>
						<option value="Disable">Disable</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</a>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>

<div class="modal fade" id="ManageUserAccount" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Manage User Account</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?=form_open(base_url('save_user_account'));?>
			<input type="hidden" name="id" id="user_id">
			<div class="modal-body m-3">
				<div class="mb-3">
					<label class="form-label">Username</label>
					<input class="form-control form-control-lg" type="text" name="username" id="user_username">
				</div>
				<div class="mb-3">
					<label class="form-label">Password</label>
					<input class="form-control form-control-lg" type="password" name="password" id="user_password">
				</div>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</a>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>