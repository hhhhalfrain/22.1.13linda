<?php
    session_start();

    $servername = "127.0.0.1";
    $username = "local";
    $password = "888888";
    $dbname="db";
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    $Email=$_POST['Email'];
    $password=$_POST['Password'];
    $sql="SELECT * FROM info
        WHERE Email='$Email'";
    $result = $conn->query($sql);
    if($result->num_rows==0)
    {
        echo "<script type='text/javascript'>alert('邮箱或密码错误！');</script>";
        header("Refresh:0;url=index.php");
    }
    else
    {
        $row = $result->fetch_assoc();
        if($password!=$row['password']) {
            echo "<script type='text/javascript'>alert('邮箱或密码错误！');</script>";
            header("Refresh:0;url=index.php");
        }

        else
        {
            $_SESSION['Email']=$Email;
            header("location:welcome.php");
        }

    }
    ?>