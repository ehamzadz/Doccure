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
									<li class="breadcrumb-item"><a href="main.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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
						
							<!-- Basic Information -->
							
							<form action="" method="POST">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Basic Information</h4>
										<div class="row form-row">
											<div class="row form-row">
												<div class="col-12 col-md-12">
													<div class="form-group">
														<div class="change-avatar">
															<div class="profile-img">
																<img src="<?php echo IMAGE ?>" alt="User Image">
															</div>
															<div class="upload-img">
																<div class="change-photo-btn">
																	<span><i class="fa fa-upload"></i> Upload Photo</span>
																	<input type="file" name="fileToUpload" id="fileToUpload" class="upload">
																</div>
																<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text"  name="fname" class="form-control" value="<?php echo FNAME; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lname" class="form-control" value="<?php echo LNAME; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Date of Birth</label>
														<div class="cal-icon">
															<input type="text" name="dateofbirth"  class="form-control" value="<?php echo DateOfBirth; ?>">
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Blood Group</label>
														<input type="text"  name="bloodgroupe" class="form-control"  name="bloodgroupe" value="<?php echo BLOODGROUPE; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Email ID</label>
														<input type="email"  name="email" class="form-control" value="<?php echo EMAIL; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Mobile</label>
														<input type="text"  name="mobile" value="<?php echo MOBILE; ?>" class="form-control">
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
													<label>Address</label>
														<input type="text"  name="address" class="form-control" value="<?php echo ADDRESS; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>City</label>
														<input type="text"  name="city" class="form-control" value="<?php echo CITY; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>State</label>
														<input type="text" name="state"  class="form-control" value="<?php echo STATE; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Zip Code</label>
														<input type="text"  name="zipcode" class="form-control" value="<?php echo ZIPCODE; ?>">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Country</label>
														<input type="text" name="country"  class="form-control" value="<?php echo COUNTRY; ?>">
													</div>
												</div>
											</div>
											<!-- /Profile Settings Form -->
										</div>
									</div>
								</div>
								<!-- /Basic Information -->
							
								<!-- About Me -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">About Me</h4>
										<div class="form-group mb-0">
											<label>Biography</label>
											<textarea class="form-control" name="about" rows="5"><?php echo ABOUT ?></textarea>
										</div>
									</div>
								</div>
								<!-- /About Me -->
							
								<!-- Clinic Info 
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Clinic Info</h4>
										<div class="row form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Clinic Name</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Clinic Address</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Clinic Images</label>
													<form action="#" class="dropzone"></form>
												</div>
												<div class="upload-wrap">
													<div class="upload-images">
														<img src="assets/img/features/feature-01.jpg" alt="Upload Image">
														<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
													</div>
													<div class="upload-images">
														<img src="assets/img/features/feature-02.jpg" alt="Upload Image">
														<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								/Clinic Info -->

								<!-- Contact Details 
								<div class="card contact-card">
									<div class="card-body">
										<h4 class="card-title">Contact Details</h4>
										<div class="row form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 1</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Address Line 2</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">City</label>
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">State / Province</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Country</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								/Contact Details -->
								
								<!-- Pricing -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Pricing</h4>										
										<div class="row custom_price_cont" id="custom_price_cont">
											<div class="col-md-4">
												<input type="text" class="form-control" id="custom_rating_input" name="price" value="<?php echo PRICING; ?>" placeholder="20">
												<small class="form-text text-muted">Custom price you can add</small>
											</div>
										</div>											
									</div>
								</div>
								<!-- /Pricing -->
								
								<!-- Services and Specialization -->
								<div class="card services-card">
									<div class="card-body">
										<h4 class="card-title">Services and Specialization</h4>
										<div class="form-group">
											<label>Services</label>
											<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="service" value="<?php echo SERVICES; ?>" id="services">
											<small class="form-text text-muted">Note : Type & Press enter to add new services</small>
										</div> 
										<div class="form-group mb-0">
											<label>Specialization </label>
											<input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="speciality" value="<?php echo SPECIALITY; ?>" id="specialist">
											<small class="form-text text-muted">Note : Type & Press  enter to add new specialization</small>
										</div> 
									</div>              
								</div>
								<!-- /Services and Specialization -->
							
								<!-- Education -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Education</h4>
										<div class="education-info">
											<?php
												$username = $_SESSION['USERNAME'];
												$i = 1;
												$output = '';
												
												$sql = mysqli_query($conn, "SELECT * FROM education WHERE doctorUsername LIKE '$username'");
												
												if (mysqli_num_rows($sql) > 0) {
													foreach( $sql as $row ){
														$output .= '<hr />
														<div class="row form-row education-cont">
															<div class="col-12 col-md-10 col-lg-11">
																<div class="row form-row">
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Degree</label>
																			<input type="text" name="degree'.$i.'" class="form-control" value="'.$row['degree'].'">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>College/Institute</label>
																			<input type="text" name="college'.$i.'" class="form-control" value="'.$row['college'].'">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Year of Completion</label>
																			<input type="text" name="year'.$i.'" class="form-control" value="'.$row['yearOfCompletion'].'">
																		</div> 
																	</div>
																</div>
															</div>
														</div>';
														$i = $i + 1;													
													}
												}else{
													$output = '
														<div class="row form-row education-cont">
															<div class="col-12 col-md-10 col-lg-11">
																<div class="row form-row">
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Degree</label>
																			<input type="text" name="degree1" class="form-control" ">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>College/Institute</label>
																			<input type="text" name="college1" class="form-control" ">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Year of Completion</label>
																			<input type="text" name="year1" class="form-control" ">
																		</div> 
																	</div>
																</div>
															</div>
														</div>';
												}
												echo $output;											
											?>
										</div>
										<div class="add-more">
											<a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
										</div>
									</div>
								</div>
								<!-- /Education -->
							
								<!-- Experience -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Experience</h4>
										<div class="experience-info">
										<?php
												$username = $_SESSION['USERNAME'];
												$i = 1;
												$output = '';
												
												$sql = mysqli_query($conn, "SELECT * FROM experience WHERE doctorUsername LIKE '$username'");
												
												if (mysqli_num_rows($sql) > 0) {
													foreach( $sql as $row ){
														$output .= '<hr />
														<div class="row form-row experience-cont">
															<div class="col-12 col-md-10 col-lg-11">
																<div class="row form-row">
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Hospital Name</label>
																			<input type="text" name="hospital'.$i.'" class="form-control" value="'.$row['hospital'].'">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>From</label>
																			<input type="text" name="frm'.$i.'" class="form-control" value="'.$row['frm'].'">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>To</label>
																			<input type="text" name="tto'.$i.'" class="form-control" value="'.$row['tto'].'">
																		</div> 
																	</div>
																</div>
															</div>
														</div>';
														$i = $i + 1;
													}
												}else{
													$output = '
														<div class="row form-row experience-cont">
															<div class="col-12 col-md-10 col-lg-11">
																<div class="row form-row">
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>Hospital Name</label>
																			<input type="text" class="form-control">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>From</label>
																			<input type="text" class="form-control">
																		</div> 
																	</div>
																	<div class="col-12 col-md-6 col-lg-4">
																		<div class="form-group">
																			<label>To</label>
																			<input type="text" class="form-control">
																		</div> 
																	</div>
																</div>
															</div>
														</div>';
												}
												echo $output;
											?>										
										</div>
										<div class="add-more">
											<a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
										</div>
									</div>
								</div>
								<!-- /Experience -->
								
								<!-- Awards -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Awards</h4>
										<div class="awards-info">
										<?php
												$username = $_SESSION['USERNAME'];
												$i = 1;
												$output = '';
												
												$sql = mysqli_query($conn, "SELECT * FROM awards WHERE doctorUsername LIKE '$username'");
												
												if (mysqli_num_rows($sql) > 0) {
													foreach( $sql as $row ){
														$output .= '<div class="row form-row awards-cont">
																		<div class="col-12 col-md-5">
																			<div class="form-group">
																				<label>Awards</label>
																				<input type="text" name="award'.$i.'" class="form-control" value="'.$row['award'].'">
																			</div> 
																		</div>
																		<div class="col-12 col-md-5">
																			<div class="form-group">
																				<label>Year</label>
																				<input type="text" name="year'.$i.'" class="form-control" value="'.$row['year'].'">
																			</div> 
																		</div>
																	</div>';
																	$i = $i + 1;
													}
												}else{
													$output = '<div class="row form-row awards-cont">
																	<div class="col-12 col-md-5">
																		<div class="form-group">
																			<label>Awards</label>
																			<input type="text" class="form-control">
																		</div> 
																	</div>
																	<div class="col-12 col-md-5">
																		<div class="form-group">
																			<label>Year</label>
																			<input type="text" class="form-control">
																		</div> 
																	</div>
																</div>';
												}
												echo $output;
										?>
										</div>
										<div class="add-more">
											<a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
										</div>
									</div>
								</div>
								<!-- /Awards -->
								
								<!-- Memberships 
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Memberships</h4>
										<div class="membership-info">
											<div class="row form-row membership-cont">
												<div class="col-12 col-md-10 col-lg-5">
													<div class="form-group">
														<label>Memberships</label>
														<input type="text" class="form-control">
													</div> 
												</div>
											</div>
										</div>
										<div class="add-more">
											<a href="javascript:void(0);" class="add-membership"><i class="fa fa-plus-circle"></i> Add More</a>
										</div>
									</div>
								</div>
								/Memberships -->									
								
								<div class="submit-section submit-btn-bottom">
									<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button>
								</div>
							</form>
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
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Dropzone JS -->
		<script src="assets/plugins/dropzone/dropzone.min.js"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
		
		<!-- Profile Settings JS -->
		<script src="assets/js/profile-settings.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
		<!-- Server Side -->
		<script src="serverFiles/doctor-updateData.js"></script>

		<!-- Success PopUp -->
		<script src="assets/js/success.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:28:28 GMT -->
</html>