<?php
header('Content-Type:application/json');
    session_start();
    $parser=xml_parser_create();
    $servername = "127.0.0.1";
    $username = "local";
    $password = "888888";
    $dbname="db";
    $conn = new mysqli($servername, $username, $password,$dbname);
    $Email=$_SESSION['Email'];
    $sql="select * from info where Email='$Email'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $name=$row['name'];
    $age=$row['age'];
    $sex=$row['sex'];
    $respon=array("Email"=>$Email,'name'=>$name,'age'=>$age,'sex'=>$sex);
    echo json_encode($respon,JSON_UNESCAPED_UNICODE);
?>

