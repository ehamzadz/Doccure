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
        $sql = mysqli_query($conn, " SELECT * FROM patients WHERE username = '$user' ");
        $row_count = mysqli_num_rows($sql);

        $sql2 = mysqli_query($conn, " SELECT * FROM patients WHERE email = '$email' ");
        $row_count2 = mysqli_num_rows($sql2);

        if ($pass == $pass2) {
            if (($row_count == 0) && ($row_count2 == 0)) {

                //PHP Password Security
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $pass2 = password_hash($_POST['pass2'], PASSWORD_DEFAULT);
                $vkey = md5(time().$user);

                $sql3 = mysqli_query($conn, "INSERT INTO patients(username,email,password,lname,fname,vkey) value('$user','$email','$pass','$lname','$fname','$vkey')");
                 
                $role = 'new signup';
                $alertType = 'danger';
                $title = 'Complete Your Profile';
                $body = ' You need to complete all of your informations <a href="doctor-profile-settings.php" class="alert-link">Here</a>.';
                $fixed = '0';

                $sql5 = mysqli_query($conn, "INSERT INTO alerts(username,role,alertType,title,body,fixed) value('$user','$role','$alertType','$title','$body','$fixed')");
                              
                $_SESSION['USERNAME'] = $user;
                $_SESSION['USERTYPE'] = 'P';
                echo 'success';
                
                /*
                if ($sql3){
                    $to = 'spmhckstpc@gmail.com';
                    $subject = "Email Verification";
                    $message = "<a href='http://localhost/3/verify.php?vkey=$vkey'>Confirme my Email</a>";
                    $headers = "From: spmhckstpc@gmail.com";
                    if(mail($to,$subject,$message)){
                        echo 'success';
                    }else{                        
                        echo 'failed';
                    }
                }*/
                		
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