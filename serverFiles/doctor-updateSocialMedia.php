<?php
    require_once('config.php');
	require_once('db.php');
    $username = $_SESSION["USERNAME"];	
    	
    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
    $twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
    $youtube = mysqli_real_escape_string($conn, $_POST['youtube']);
    $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
    $whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);

    
    $sql = mysqli_query($conn, "SELECT * FROM socialMedia WHERE doctorUsername = '$username'");

    
    if (mysqli_num_rows($sql) > 0) {
        $sql2 = mysqli_query($conn, "UPDATE socialMedia SET facebook='$facebook', twitter='$twitter', youtube='$youtube', linkedin='$linkedin', whatsapp='$whatsapp'  WHERE doctorUsername = '$username'");
        echo 'success';
    }else{
        $sql2 = mysqli_query($conn, "INSERT INTO socialMedia(doctorUsername,facebook,twitter,youtube,linkedin,whatsapp) value('$username','$facebook','$twitter','$youtube','$linkedin','$whatsapp')");
        echo 'success';
    }


?>