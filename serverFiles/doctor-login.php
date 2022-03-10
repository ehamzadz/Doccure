<?php
    require_once('config.php');
	require_once('db.php');
			
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    if (!empty($user) && !empty($pass)) {
        $sql = mysqli_query($conn, "SELECT * FROM doctors WHERE username = '$user'");
        
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            if(password_verify($pass,$row['password'])){
                $_SESSION['USERNAME'] = $row['username'];
                $username = $_SESSION['USERNAME'];          
                $sql2 = "UPDATE doctors SET status = 'online' WHERE username = '$username'";
                $result = mysqli_query($conn, $sql2);

                $_SESSION['USERTYPE'] = 'D';
                echo "success";
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