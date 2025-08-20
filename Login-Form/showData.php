<?php
include("mySqlConnect.php");

$sqlData= "SELECT * FROM user_login";
$result = mysqli_query($conn,$sqlData);
$html = "<table border ='1'";
$html .= "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date of Birth</th><th>Gender</th>";
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $html .= "<tr>";
        $html .= "<td>".$row['fullname']."</td>";
        $html .= "<td>".$row['email']."</td>";
        $html .= "<td>".$row['phone']."</td>";
        $html .= "<td>".$row['dob']."</td>";
        $html .= "<td>".$row['gender']."</td>";
        $html .= "</tr>";
    }
    echo $html;
}