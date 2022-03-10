<?php
    require_once('config.php');
	require_once('db.php');			
    $username = $_SESSION["USERNAME"];		
    $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
    $pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
    if (!empty($_POST['oldpass']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])) {
        if ($pass1 == $pass2) {	
            $sql = mysqli_query($conn, "SELECT * FROM patients WHERE username = '$username'");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                if(password_verify($oldpass,$row['password'])){
                    $pass = password_hash($pass1, PASSWORD_DEFAULT);
                    $sql2 = "UPDATE patients SET password = '$pass' WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql2);
                    echo 'success';    
                }else{
                    echo 'incorrect';
                }
            }else{
                echo 'error';
            }

            // Old Config
            /*            
            $row = mysqli_num_rows($sql);        
            if ($row != 0) {
                $row = mysqli_fetch_assoc($sql);
                if ($row['password'] == $oldpass){
                    $sql2 = "UPDATE users SET password = '$pass1' WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql2);
                    $_SESSION['TITLE'] = "resetPass";
                    echo "success";
                }else{
                    echo "incorrect";
                }					
            }else {
                echo "error";
            }*/
        }else{
            echo "mismatch";
        }				
    }else{
        echo "empty";
    }
?>