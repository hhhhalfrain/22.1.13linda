<?php
$servername = "127.0.0.1";
$username = "local";
$password = "888888";
$dbname="db";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$Email=$_POST["Email"];
$password=$_POST["Password"];
$name=$_POST["name"];
$age=$_POST["age"];
$number=$_POST["number"];
$sex=$_POST["sex"];

$sql="SELECT * FROM info
WHERE Email='$Email'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
    echo "<li>邮箱名已存在！</li>";
    exit();
}

$sql = "INSERT INTO info (email,password,name,age,number,sex)
        VALUES ('$Email','$password','$name','$age','$number','$sex')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('注册成功') </script>";
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>