<?php
	require_once('../serverFiles/config.php');
	require_once('../serverFiles/db.php');
	require_once('../serverFiles/user_data.php');	
	
	if (!isset($_SESSION['USERNAME'])) {
		header('location: login.php');
	}else{
		if ($_SESSION['USERTYPE']=='P') {
			header('location: patient-profile-settings.php');
		}
	}	
	
	// Header 
	require ('header.php');
?>

<style>
	.submit-section2 {
		padding: 12px 30px;
		width: 40%;
		margin: auto;
		min-width: 250px;
	}
	.submit-section2 .submit-btn2 {
		font-weight: 600;
		font-size: 16px;
		width: 100%;	
		height:50px;	
	}
</style>

<div class="frm" style="width: 95%; max-width:500px; margin:auto;margin-top:100px;margin-bottom:100px;">
	<!-- Registrations -->
	<form action="" method="POST">
		<div class="card" style="padding-top:10px;">
			<div class="card-body" style="width: 99%; margin:auto;">
				<h4 class="card-title">Registration</h4>
				<div class="registrations-info">
					<div class="row form-row reg-cont">	
						<div class="col-12 col-md-12" style="padding-top:7px;">
							<div class="form-group">
								<input type="text" name="serial" class="form-control" style="width:100%;" placeholder="Serial: xxxxxxxxxxxxxxxxxxxxxxxxxx">
							</div> 
						</div>											
					</div>
				</div>
			</div>
		</div>
		<div class="submit-section2 submit-btn2" >
			<button type="submit" class="btn btn-primary submit-btn2">Save Changes</button>
		</div>
	</form>
	<!-- /Registrations -->
</div>


<script src="registration.js"></script>
<!-- Success PopUp -->
<script src="../assets/js/success.js"></script>


<?php
require ('footer.php');
?>