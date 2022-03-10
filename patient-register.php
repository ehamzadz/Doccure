			<!-- Header -->
			<?php
				session_start();
				if (isset($_SESSION['USERNAME'])) {
					header('location: patient-dashboard.php');
				}
				require ('header.php');
			?>
			<!-- /Header -->
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Register <a href="doctor-register.php">Are you a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="#" enctype="multipart/form-data" autocomplete="off">
											<div class="form-group form-focus">
												<input type="text"  name="user" class="form-control floating">
												<label class="focus-label">Username</label>
											</div>
											<div class="form-group form-focus">
												<input type="text"  name="fname" class="form-control floating">
												<label class="focus-label">First Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text"  name="lname" class="form-control floating">
												<label class="focus-label">Last Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email"  name="email" class="form-control floating">
												<label class="focus-label">Email Adresse</label>
											</div>
											<div class="form-group form-focus">
												<input type="password"  name="pass" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="password"  name="pass2" class="form-control floating">
												<label class="focus-label">Confirme Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="patient-login.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn"  name="submit" type="submit">Signup</button>
																						
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			
			<br/>
			
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
		<!-- Server Side -->
		<script src="serverFiles/patient-register.js"></script>
		
		<!-- Success PopUp -->
		<script src="assets/js/success.js"></script>

	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:28:41 GMT -->
</html>