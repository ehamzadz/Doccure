<?php

    if(isset($_SESSION['USERNAME'])){
        $user = $_SESSION['USERNAME'];
        $sql = mysqli_query($conn, "SELECT * FROM alerts WHERE username = '$user' AND fixed != 1");
        $output ='';
        if (mysqli_num_rows($sql) > 0) {
            foreach( $sql as $row ){
                if($row['alertType']=='warning'){
                    $alertType = 'alert-warning';
                }
                if($row['alertType']=='success'){
                    $alertType = 'alert-success';
                }
                if($row['alertType']=='danger'){
                    $alertType = 'alert-danger';
                }
                $title = $row['title'];
                $body = $row['body'];
                $output = $output . '				
                        <div class="alert '.$alertType.' alert-dismissible fade show" role="alert" style="margin:31px 31px 0px 31px;">
                            <strong>'.$title.'</strong> '.$body.'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                if($row['fixed']==2){
                    $id_alert = $row['id_alert'];
                    $sql2 = mysqli_query($conn, "UPDATE alerts SET fixed = 1 WHERE id_alert = '$id_alert'");                    
                }
            }

        /*
        }else{
            $output = '
				<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin:31px 31px 0px 31px;">
					<strong>Warning!</strong> You need to enter your <a href="registration/status.php" class="alert-link">Registration Key</a> to gain full access.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';*/
        }
        echo $output;
    }


    

?>