<?php
    require_once('config.php');
	require_once('db.php');
			
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    if (!empty($user) && !empty($pass)) {
        $sql = mysqli_query($conn, "SELECT * FROM patients WHERE username = '$user'");
        
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            if(password_verify($pass,$row['password'])){
                $_SESSION['USERNAME'] = $row['username'];
                $username = $_SESSION['USERNAME'];                
                $_SESSION['USERTYPE'] = 'P';
                $sql2 = "UPDATE patients SET status = 'online' WHERE username = '$username'";
                $result = mysqli_query($conn, $sql2);
                echo 'success';
            }else{
                echo 'incorrect';
            }
        }else{
            echo 'incorrect';
        }
    }else{
        echo 'empty';
    }	


?>