<?php
include_once('mySqlConnect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';

    $stmt = $conn->prepare("INSERT INTO user_login (fullname, email, phone, dob, gender) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $email, $phone, $dob, $gender);

    if ($stmt->execute()) {
        echo "Data successfully submitted";
        header("location: showData.php");
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid request";
}

?>