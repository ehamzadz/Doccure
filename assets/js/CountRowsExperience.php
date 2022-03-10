<?php
    require_once('../../serverFiles/config.php');
	require_once('../../serverFiles/db.php');
    $username = $_SESSION['USERNAME'];
    $sql = mysqli_query($conn, "SELECT count(*) FROM experience WHERE doctorUsername LIKE '$username'");			
    $output = "";
    $row = mysqli_fetch_assoc($sql);
    $count = $row['count(*)'];
    echo $count;
?>