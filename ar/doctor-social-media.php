<?php
    require_once('serverFiles/config.php');
	require_once('serverFiles/db.php');
	require_once('serverFiles/user_data.php');	

	if (!isset($_SESSION['USERNAME'])) {
		header('location: login.php');
	}else{
		if ($_SESSION['USERTYPE']=='P') {
			header('location: patient-profile-settings.php');
		}
	}	
		// Header
	require ('doctor-header.php');
?>		
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Social Media</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Social Media</h2>
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

									<?php								
    									$username = $_SESSION["USERNAME"];			
    									$sql = mysqli_query($conn, "SELECT * FROM socialMedia WHERE doctorUsername = '$username'");
										if (mysqli_num_rows($sql) > 0) {
											$row = mysqli_fetch_assoc($sql);
											$facebook = $row['facebook'];
											$twitter = $row['twitter'];
											$youtube = $row['youtube'];
											$linkedin = $row['linkedin'];
											$whatsapp = $row['whatsapp'];
										}
									?>
								
									<!-- Social Form -->
									<form action="" method="POST">                                                                                           
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Facebook URL</label>
													<input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Twitter URL</label>
													<input type="text" name="twitter" class="form-control" value="<?php echo $twitter; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Youtube URL</label>
													<input type="text" name="youtube" class="form-control" value="<?php echo $youtube; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Linkedin URL</label>
													<input type="text" name="linkedin" class="form-control" value="<?php echo $linkedin; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>WhatsApp</label>
													<input type="text" name="whatsapp" class="form-control" value="<?php echo $whatsapp; ?>">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Social Form -->
									
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
		<script src="serverFiles/doctor-updateSocialMedia.js"></script>
		
		<!-- Success PopUp -->
		<script src="assets/js/success.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/social-media.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:29:05 GMT -->
</html>