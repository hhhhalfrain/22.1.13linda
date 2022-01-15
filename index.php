<?php
    session_start();
    if($_SESSION['Email'])
        header("location:welcome.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="styleSheet"  href="css.css" />
    <title>登录页面</title>
</head>
<body>
<script src="js.js"></script>
<script src="md5.js"></script>
<form id="loginForm" action="check_password.php" method="post">
    <div class="inputGroup inputGroup2">
        <label for="email1">邮箱</label>
        <input type="text" id="email" class="email" maxlength="256" name="Email">
        <span class="indicator"></span>
    </div>
    <div class="inputGroup inputGroup2">
        <label for="password">密码</label>
        <input type="password" id="password" class="password" name="Password">
    </div>
    <p id="err_msg"></p>
    <div class="inputGroup inputGroup3">
        <button type="button" id="login" onclick="checkUser()">登陆</button>
    </div>
    <p><a href="Register.php">不会还有人没有账号吧？注册一个！</a></p>
</form>

</body>