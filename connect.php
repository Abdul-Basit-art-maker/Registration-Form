<?php
$Name: = $_POST['Name:'];
$Password: = $_POST['Password:'];
$Gender: = $_POST['Gender:'];
$Email: = $_POST['Email:'];
$Phone Number#: = $_POST['Phone Number#:'];

$ conn = new mysqli('localhost','root','','basittest');
if?($conn->connect_error ){
    die('Connection Failed :', .$conn->connect_error);
}else{
    $stmt = conn->prepare("insert into registration (Name:,Password:,Gender:,Email:,Phone Number#:) values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$Name:,$Password:,$Gender:,$Email:,$Phone Number#:);
    $stmt->execute();
    echo"Registration Successfully....";
    $stmt->close();
    $stmt->conn();
}
?>