<?php
    
    if (isset($_SESSION["USERNAME"]) ){        
        $user = $_SESSION["USERNAME"];
        if ($_SESSION["USERTYPE"]=='P'){
            $sql = mysqli_query($conn, "SELECT * FROM patients WHERE username = '$user'");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['USERNAME'] = $row['username'];
                $_SESSION["FNAME"] = $row['fname'];
                $_SESSION["LNAME"] = $row['lname'];
                $_SESSION["EMAIL"] = $row['email'];
                $_SESSION["PASSWORD"] = $row['password'];
                $_SESSION["IMAGE"] = $row['image'];    
                $_SESSION["DateOfBirth"] = $row['DateOfBirth'];
                $_SESSION["BLOODGROUPE"] = $row['BloodGroupe'];
                $_SESSION["MOBILE"] = $row['mobile'];
                $_SESSION["ADDRESS"] = $row['address'];
                $_SESSION["CITY"] = $row['city'];
                $_SESSION["STATE"] = $row['state'];
                $_SESSION["ZIPCODE"] = $row['ZipCode'];
                $_SESSION["COUNTRY"] = $row['country'];
                $_SESSION["USERTYPE"] = $row['userType'];
                define('USERNAME', $_SESSION["USERNAME"]);
                define('FNAME', $_SESSION["FNAME"]);
                define('LNAME', $_SESSION["LNAME"]);
                define('EMAIL', $_SESSION["EMAIL"]);
                define('PASSWORD', $_SESSION["PASSWORD"]);
                define('IMAGE', "assets/img/patients/".$_SESSION["IMAGE"]);	
                define('DateOfBirth', $_SESSION["DateOfBirth"]);
                define('BLOODGROUPE', $_SESSION["BLOODGROUPE"]);
                define('MOBILE', $_SESSION["MOBILE"]);
                define('ADDRESS', $_SESSION["ADDRESS"]);
                define('CITY', $_SESSION["CITY"]);
                define('STATE', $_SESSION["STATE"]);
                define('ZIPCODE', $_SESSION["ZIPCODE"]);
                define('COUNTRY', $_SESSION["COUNTRY"]);    
                define('USERTYPE', "Patient");            
        
                // Calculate Age from Date of Birth
                $bdate      =   $_SESSION["DateOfBirth"];
                $ageyears   =   date_diff(date_create($bdate), date_create('now'))->y;
                $age = $ageyears.' Years';//24 Jul 1983, 38 years	        
            }
        }
        if ($_SESSION["USERTYPE"]=='D'){
            $sql = mysqli_query($conn, "SELECT * FROM doctors WHERE username = '$user'");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['USERNAME'] = $row['username'];
                $_SESSION["FNAME"] = $row['fname'];
                $_SESSION["LNAME"] = $row['lname'];
                $_SESSION["EMAIL"] = $row['email'];
                $_SESSION["PASSWORD"] = $row['password'];
                $_SESSION["IMAGE"] = $row['image'];    
                $_SESSION["DateOfBirth"] = $row['DateOfBirth'];
                $_SESSION["BLOODGROUPE"] = $row['BloodGroupe'];
                $_SESSION["MOBILE"] = $row['mobile'];
                $_SESSION["ADDRESS"] = $row['address'];
                $_SESSION["CITY"] = $row['city'];
                $_SESSION["STATE"] = $row['state'];
                $_SESSION["ZIPCODE"] = $row['ZipCode'];
                $_SESSION["COUNTRY"] = $row['country'];
                $_SESSION["USERTYPE"] = $row['userType'];
                $_SESSION["ABOUT"] = $row['about'];
                $_SESSION["PRICING"] = $row['pricing'];
                $_SESSION["SERVICES"] = $row['services'];
                $_SESSION["SPECIALITY"] = $row['speciality'];
                define('USERNAME', $_SESSION["USERNAME"]);
                define('FNAME', $_SESSION["FNAME"]);
                define('LNAME', $_SESSION["LNAME"]);
                define('EMAIL', $_SESSION["EMAIL"]);
                define('PASSWORD', $_SESSION["PASSWORD"]);
                define('IMAGE', "assets/img/doctors/".$_SESSION["IMAGE"]);	
                define('DateOfBirth', $_SESSION["DateOfBirth"]);
                define('BLOODGROUPE', $_SESSION["BLOODGROUPE"]);
                define('MOBILE', $_SESSION["MOBILE"]);
                define('ADDRESS', $_SESSION["ADDRESS"]);
                define('CITY', $_SESSION["CITY"]);
                define('STATE', $_SESSION["STATE"]);
                define('ZIPCODE', $_SESSION["ZIPCODE"]);
                define('COUNTRY', $_SESSION["COUNTRY"]);
                define('ABOUT', $_SESSION["ABOUT"]);
                define('PRICING', $_SESSION["PRICING"]); 
                define('SERVICES', $_SESSION["SERVICES"]);    
                define('SPECIALITY', $_SESSION["SPECIALITY"]);    
                define('USERTYPE', "Doctor");
        
                // Calculate Age from Date of Birth
                $bdate      =   $_SESSION["DateOfBirth"];
                $ageyears   =   date_diff(date_create($bdate), date_create('now'))->y;
                $age = $ageyears.' Years';//24 Jul 1983, 38 years	     
                /*
                $sql2 = mysqli_query($conn, "SELECT * FROM education WHERE doctorUsername = '$user'");
                if (mysqli_num_rows($sql2) > 0) {
                    $row2 = mysqli_fetch_assoc($sql2);
                    $_SESSION["DEGREE"] = $row2['degree'];
                    $_SESSION["COLLEGE"] = $row2['college'];
                    $_SESSION["YEAROFCOMPLETION"] = $row2['yearOfCompletion'];
                    define('DEGREE', $_SESSION["DEGREE"]);
                    define('COLLEGE', $_SESSION["COLLEGE"]);
                    define('YEAROFCOMPLETION', $_SESSION["YEAROFCOMPLETION"]);
                }


                
                $sql2 = mysqli_query($conn, "SELECT * FROM registrations WHERE username = '$user'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                    
                }*/
            }
        }
    }
    
    
?>