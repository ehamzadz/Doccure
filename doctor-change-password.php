<?php
    require_once('serverFiles/config.php');
	require_once('serverFiles/db.php');
	require_once('serverFiles/user_data.php');	

	if (!isset($_SESSION['USERNAME'])) {
		header('location: login.php');
	}else{
		if ($_SESSION['USERTYPE']=='P') {
			header('location: patient-change-password.php');
		}
	}	
		// Header
	require ('doctor-header.php');
?>
			<!-- /Header -->	
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Change Password</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- Profile Sidebar -->
						<?php
							require ('doctor_profile_sidebar.php');
						?>
						<!-- /Profile Sidebar -->

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form action="#">
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="oldpass" class="form-control">
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="pass1" class="form-control">
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="pass2" class="form-control">
												</div>
												<div class="submit-section">
													<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
											<!-- /Change Password Form -->											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- footer -->
			<?php
				require ('footer.php');
			?>
			<!-- /footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

		<!-- Server Side -->
		<script src="serverFiles/doctor-changePass.js"></script>

		<!-- Success PopUp -->
		<script src="assets/js/success.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:29:05 GMT -->
</html>