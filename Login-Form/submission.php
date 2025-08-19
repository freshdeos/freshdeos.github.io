<?php
include_once('config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    print_r($_POST);
    $fname = $_POST['fname'] ?? '';
    $mname = $_POST['mname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $rpass = $_POST['rpass'] ?? '';
    $stmt = $conn->prepare("INSERT INTO user_login (fname, mname, lname, email, pass, rpass ) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fname, $mnane, $lname, $email, $pass, $rpass);
    if($stmt->execute();){
        
    }
    echo ("data successfully submitted");
}else{
    echo ("data not successfully submitted");
}