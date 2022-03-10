<?php
    require_once('config.php');
	require_once('db.php');

    
    $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
    $lname = mysqli_real_escape_string($conn, trim($_POST['lname']));
    $user = mysqli_real_escape_string($conn, trim($_POST['user']));
    $email= mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

    if (!empty($pass) && !empty($pass2) && !empty($fname) && !empty($lname) && !empty($user) && !empty($email)) {
        
        //check if user email in use
        $sql = mysqli_query($conn, " SELECT * FROM doctors WHERE username = '$user' ");
        $row_count = mysqli_num_rows($sql);

        $sql2 = mysqli_query($conn, " SELECT * FROM doctors WHERE email = '$email' ");
        $row_count2 = mysqli_num_rows($sql2);

        if ($pass == $pass2) {
            if (($row_count == 0) && ($row_count2 == 0)) {

                //PHP Password Security
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $pass2 = password_hash($_POST['pass2'], PASSWORD_DEFAULT);

                $sql3 = mysqli_query($conn, "INSERT INTO doctors(username,email,password,lname,fname,userType) value('$user','$email','$pass','$lname','$fname','D')");
                $sql4 = mysqli_query($conn, "SELECT * FROM doctors WHERE username = '$user'");
        
                if (mysqli_num_rows($sql4) > 0) {
                    $row = mysqli_fetch_assoc($sql4);

                    $role = 'new signup';
                    $alertType = 'danger';
                    $title = 'Complete Your Profile';
                    $body = ' You need to complete all of your informations <a href="doctor-profile-settings.php" class="alert-link">Here</a>.';
                    $fixed = '0';

                    $sql5 = mysqli_query($conn, "INSERT INTO alerts(username,role,alertType,title,body,fixed) value('$user','$role','$alertType','$title','$body','$fixed')");
                    
                    $role = 'serial';
                    $alertType = 'warning';
                    $title = 'Warning';
                    $body = ' You need to enter your <a href="registration/status.php" class="alert-link">Registration Key</a> to gain full access.';
                    $fixed = '0';

                    $sql6 = mysqli_query($conn, "INSERT INTO alerts(username,role,alertType,title,body,fixed) value('$user','$role','$alertType','$title','$body','$fixed')");
                    
                    $_SESSION['USERNAME'] = $row['username'];
                    $_SESSION['USERTYPE'] = 'D';
                    echo 'success';
                }			
            }else{
                echo 'invalid';
            } 
        } else {
            echo 'mismatch';
        }        
    } else {
        echo 'empty';
    }






?>