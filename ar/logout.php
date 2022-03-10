<?php
    require_once('serverFiles/config.php');
	require_once('serverFiles/db.php');	

    $username = $_SESSION['USERNAME'];
    
    if (isset($_SESSION["USERTYPE"])){
        if ($_SESSION["USERTYPE"]=='P'){
            $sql = "UPDATE patients SET status = 'offline' WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            
            session_unset();
            session_destroy();
            $_SESSION = array();
            header( "refresh:0;url=patient-login.php" );
        }
    }
    if (isset($_SESSION["USERTYPE"])){    
        if ($_SESSION["USERTYPE"]=='D'){
            $sql = "UPDATE doctors SET status = 'offline' WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            
            session_unset();
            session_destroy();
            $_SESSION = array();
            header( "refresh:0;url=doctor-login.php" );
        }
    }
    

    
?>