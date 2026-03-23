<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="<?=base_url('design/js/jquery.min.js');?>"></script>
	<script src="<?=base_url('design/js/datatables.js');?>"></script>			
	<script src="<?=base_url('design/js/app.js');?>"></script>	
	
	
<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>
		

	<script>
		$(document).on('click','.addPlanType',function(){
			document.getElementById('plan_id').value ='';			
			document.getElementById('plan_description').value ='';
			document.getElementById('plan_amount').value ='';
		});
		$(document).on('click','.editPlanType',function(){
			var data=$(this).data('id');
			var id=data.split('_');
			document.getElementById('plan_id').value = id[0];
			document.getElementById('plan_description').value = id[1];
			document.getElementById('plan_amount').value = id[2];
		});

		$(document).on('click','.addDesignation',function(){
			document.getElementById('des_id').value ='';			
			document.getElementById('des_description').value ='';			
		});
		$(document).on('click','.editDesignation',function(){
			var data=$(this).data('id');
			var id=data.split('_');
			document.getElementById('des_id').value = id[0];
			document.getElementById('des_description').value = id[1];			
		});

		$(document).on('click','.addBranch',function(){
			document.getElementById('branch_id').value ='';			
			document.getElementById('branch_description').value ='';			
		});
		$(document).on('click','.editBranch',function(){
			var data=$(this).data('id');
			var id=data.split('_');
			document.getElementById('branch_id').value = id[0];
			document.getElementById('branch_description').value = id[1];			
		});
		$(document).on('click','.addEmployee',function(){
			document.getElementById('emp_id').value ='';			
			document.getElementById('emp_lastname').value ='';
			document.getElementById('emp_firstname').value ='';
			document.getElementById('emp_middlename').value ='';
			document.getElementById('emp_suffix').value ='';
			document.getElementById('emp_designation').value ='';
			document.getElementById('emp_gender').value ='';
			document.getElementById('emp_birthdate').value ='';
			document.getElementById('emp_branch').value ='';
			document.getElementById('emp_date_employed').value ='';
			document.getElementById('emp_status').value ='Active';
		});
		$(document).on('click','.editEmployee',function(){
			var id=$(this).data('id');
			$.ajax({
				url:'<?=base_url();?>index.php/pages/fetch_single_employee',
				type:'post',
				data: {id: id},
				dataType:'json',
				success: function(response){
					document.getElementById('emp_id').value =id;			
					document.getElementById('emp_lastname').value =response[0]['lastname'];
					document.getElementById('emp_firstname').value =response[0]['firstname'];
					document.getElementById('emp_middlename').value =response[0]['middlename'];
					document.getElementById('emp_suffix').value =response[0]['suffix'];
					document.getElementById('emp_designation').value =response[0]['designation'];
					document.getElementById('emp_gender').value =response[0]['gender'];
					document.getElementById('emp_birthdate').value =response[0]['birthdate'];
					document.getElementById('emp_branch').value =response[0]['branch'];
					document.getElementById('emp_date_employed').value =response[0]['date_employed'];
					document.getElementById('emp_status').value =response[0]['status'];
				}
			});
		});
		$(document).on('click','.editUserAccount',function(){
			var data=$(this).data('id');
			var id=data.split('_');
			document.getElementById('user_id').value = id[0];
			document.getElementById('user_username').value = id[1];			
			document.getElementById('user_password').value = id[2];			
		});
	</script>
</body>

</html>