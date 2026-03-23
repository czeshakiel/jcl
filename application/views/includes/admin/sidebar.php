<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="sidebar-brand-text align-middle">
						Information System
					</span>
					<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
						<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
						<path d="M20 12L12 16L4 12"></path>
						<path d="M20 16L12 20L4 16"></path>
					</svg>
				</a>

				<div class="sidebar-user">
					<div class="d-flex justify-content-center">
						<div class="flex-shrink-0">
							<img src="<?=base_url('design/img/avatars/avatar.jpg');?>" class="avatar img-fluid rounded me-1" alt="Charles Hall">
						</div>
						<div class="flex-grow-1 ps-2">
							<a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<?=$this->session->fullname;?>
							</a>
							<div class="dropdown-menu dropdown-menu-start">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
									Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logout">Log out</a>
							</div>

							<div class="sidebar-user-subtitle">Admin</div>
						</div>
					</div>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?=base_url('admin_main');?>">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?=base_url('manage_employee');?>">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Employee</span>
						</a>
					</li>					

					<li class="sidebar-item">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('manage_plan_type');?>">Plan Type</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('manage_designation');?>">Designation</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('manage_branch');?>">Branch</a></li>							
						</ul>
					</li>					
				</ul>				
			</div>
		</nav>
        <div class="main">