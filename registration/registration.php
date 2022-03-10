<?php
    require_once('../serverFiles/config.php');
	require_once('../serverFiles/db.php');

    
    $serial = trim($_POST['serial']);

    if (!empty($serial)) {
        
        //check if serial is valide
        $sql = mysqli_query($conn, " SELECT * FROM serials WHERE serial = '$serial' AND used = 0 ");
        $row_count = mysqli_num_rows($sql);

        $user = $_SESSION['USERNAME'];
        if (mysqli_num_rows($sql) > 0) {
            $sql2 = mysqli_query($conn, "INSERT INTO registrations(username,serial,type) value('$user','$serial','Normal')");
            $sql3 = mysqli_query($conn, "UPDATE doctors SET registered = 1 WHERE username = '$user'");
            $sql3 = mysqli_query($conn, "UPDATE serials SET used = 1 WHERE serial = '$serial'");
            $sql5 = mysqli_query($conn, "UPDATE alerts SET fixed = 1 WHERE role = 'serial' AND username='$user'");

            $role = 'info';
            $alertType = 'success';
            $title = 'Successfully Registered';
            $body = ' You can gain all functions in our <a href="registration/status.php" class="alert-link">Platform</a> since 2022-01-28.';
            $fixed = '2';

            $sql4 = mysqli_query($conn, "INSERT INTO alerts(username,role,alertType,title,body,fixed) value('$user','$role','$alertType','$title','$body','$fixed')");
            echo 'success';
        }else{
            echo 'incorrect';
        }
            
    }else{
        echo 'empty';
    }


?>