<?php
    $servername = "127.0.0.1";
    $username = "local";
    $password = "888888";
    $dbname="db";
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    $Email=$_GET["q"];
    $sql="SELECT * FROM info
    WHERE Email='$Email'";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        $response="邮箱名已存在！";
        echo $response;
    }

?>