<?php
// variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $email;

    $sql = ("SELECT * FROM users WHERE email='$email' AND password='$password'");
    // if (isset($_POST['login-btn'])){

    // executing query
    $results = mysqli_query($con, $sql);

    // number of results of sql 
    $num = mysqli_num_rows($results);
    
    // echo $num;
    
    // MATCH IN DATABASE
    if ($num > 0) {
        // code for match found
        // echo "MATCH FOUND";
        header('Location: ../dashboard-components/dashboard.html');
        exit;
    } else {
        // code for match not found
        // echo "NO MATCH";
        header('Location: ../index.html');
        exit;
    }
?>