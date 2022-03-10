<?php
    require_once('config.php');
	require_once('db.php');		
	require_once('patient_data.php');		
    $username = USERNAME;
    $sql = mysqli_query($conn, "SELECT * FROM friendsList WHERE username = '$username'");			
    $output = "";

    if (mysqli_num_rows($sql) > 0) {
        while($row1 = mysqli_fetch_assoc($sql)){
            $usr = $row1['friendUsername'];
            $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usr'");	
            while($row = mysqli_fetch_assoc($sql2)){
                $USERNAME = $row['username'];
                $FNAME = $row['fname'];
                $LNAME = $row['lname'];
                $IMAGE = "assets/img/patients/".$row['image'];
                $MOBILE = $row['mobile'];	
                $status = $row['status'];	

                $sql3 = mysqli_query($conn, "SELECT SUM(msgCount) FROM friendsList WHERE (username  = '$username') AND ( friendUsername = '$USERNAME')");
                $row3 = mysqli_fetch_assoc($sql3);
                $msgCount = $row3['SUM(msgCount)'];

                $output .= '<a href="#" class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-'.$status.'">
                                        <img src="'. $IMAGE.'" alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="user-name">'. $FNAME .' '. $LNAME.'</div>
                                        <div class="user-last-chat">...</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time block">2 min</div>
                                        <div class="badge badge-success badge-pill">'.$msgCount.'</div>
                                    </div>
                                </div>
                            </a>';
            }				
        }			
    }
    echo $output;		
?>