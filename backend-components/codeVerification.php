<?php
    require ("emailConnection.php");

    // echo $dB;

    // echo $code;

    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];

    $enteredCode= $a.$b.$c.$d;


    if($enteredCode==$code){
        echo "match";
        header('Location: Password/pw.php');
        exit;
    }else{
        // TODO:
        echo"fail";
    }
?>