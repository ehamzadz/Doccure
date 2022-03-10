<?php
    require_once('config.php');
	require_once('db.php');
    $user = $_SESSION['USERNAME'];
    $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
    $lname = mysqli_real_escape_string($conn, trim($_POST['lname']));
    $dateofbirth = mysqli_real_escape_string($conn, trim($_POST['dateofbirth']));
    $bloodgroupe= mysqli_real_escape_string($conn,trim($_POST['bloodgroupe']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $city= mysqli_real_escape_string($conn,trim($_POST['city']));
    $state = mysqli_real_escape_string($conn, trim($_POST['state']));
    $zipcode = mysqli_real_escape_string($conn, trim($_POST['zipcode']));
    $country= mysqli_real_escape_string($conn,trim($_POST['country']));
    
    $price = mysqli_real_escape_string($conn, trim($_POST['price']));
    
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {     
        $script = "UPDATE doctors SET fname='".$fname."', lname='".$lname."', email='".$email."', dateofbirth='".$dateofbirth."', zipcode='".$zipcode."', bloodgroupe='".$bloodgroupe."', city='".$city."', state='".$state."', country='".$country."', mobile='".$mobile."', address='".$address."', pricing='".$price."' WHERE username='" . $_SESSION['USERNAME']."'";
        $sql = mysqli_query($conn, "UPDATE doctors SET fname='$fname', lname='$lname', email='$email', dateofbirth='$dateofbirth', zipcode='$zipcode', bloodgroupe='$bloodgroupe', city='$city', state='$state', country='$country', mobile='$mobile', address='$address', pricing='$price' WHERE username='$user'");
        $sql2 = mysqli_query($conn, "UPDATE alerts SET fixed = 1 WHERE role = 'new signup' AND username='$user'");
        echo "success";
    } else {
        $target_dir = "../assets/img/doctors/";
        $fileName =  rand() . basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir  . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $popup = "notImg";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "fileSize";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "fileType";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {						
                //echo "The file ". $fileName . " has been uploaded. / ".$_SESSION['USERNAME'];
                $script = "UPDATE doctors SET image = '" . $fileName . "', fname='".$fname."', lname='".$lname."', email='".$email."', dateofbirth='".$dateofbirth."', zipcode='".$zipcode."', bloodgroupe='".$bloodgroupe."', city='".$city."', state='".$state."', country='".$country."', mobile='".$mobile."', address='".$address."', pricing='".$price."' WHERE username='" . $_SESSION['USERNAME']."'";
                //echo $script;
                $sql = mysqli_query($conn, "UPDATE doctors SET image='$fileName', fname='$fname', lname='$lname', email='$email', dateofbirth='$dateofbirth', zipcode='$zipcode', bloodgroupe='$bloodgroupe', city='$city', state='$state', country='$country', mobile='$mobile', address='$address', pricing='$price' WHERE username='$user'");
                //$sql2 = mysqli_query($conn, "UPDATE alerts SET fixed = 1 WHERE role = 'new signup' AND username = '$user'");
                $sql2 = mysqli_query($conn, "UPDATE alerts SET fixed = 1 WHERE role = 'new signup' AND username='$user'");

                echo "success";
            } else {
                echo "error";
            }
        }
    }

?>