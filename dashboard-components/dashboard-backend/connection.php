<?php
    //  connection to localhost
    $server = "localhost";
    $username = "root";
    $password = "";
    $dB = "Exam-Portal";

    $con = mysqli_connect($server, $username, $password, $dB);


    if(!$con){
        die("FAILED");
    }
    
    else{
    }
        $email=base64_decode($_GET['email']);
        
        
        $sql="SELECT * FROM users WHERE Email='$email'";

        $result=$con->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $rollNo=$row["symbolNo"];
            }
        }else{
            echo "NO SUCH EMAIL";
        }


        $query="SELECT * FROM `Student Details` where Rollno='$rollNo'";


        $ans=$con->query($query);

        if($ans->num_rows>0){
            while($rows=$ans->fetch_assoc()){
                $symbolNo=$rows["Symbolno"];
                $name=$rows["Name"];
                $faculty=$rows["Faculty"];
                $year=$rows["Year"];
                $collegeName=$rows["NameofCollege"];
                $uni=$rows["University"];
                $regNo=$rows["Regno"];
                $programme=$rows["Programme"];
                $duePayment=$rows["Due"];

                $img=$rows["img_dir"];
            }

        
        $sub1=

        }

        else{
            echo "NO MATCH";
        }

?>