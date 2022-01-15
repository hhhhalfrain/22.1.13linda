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
<form id="loginForm" action="check_register.php" method="post" style="margin: 20px auto">
    <div class="inputGroup inputGroup2">
        <label for="email1">邮箱</label>
        <input type="text" id="email" class="email" maxlength="256" name="Email" onkeyup="check_email(this.value)">
        <p id="err_msg"></p>
        <span class="indicator"></span>
    </div>
    <div class="inputGroup inputGroup2">
        <label for="password">密码</label>
        <input type="password" id="password" class="password" name="Password">
    </div>
    <div class="inputGroup inputGroup2">
        <label for="name">姓名</label>
        <input type="text" id="name" class="name" name="name">
    </div>
    <div class="inputGroup inputGroup2">
        <label for="age">年龄</label>
        <input type="text" id="age" class="age" name="age">
    </div>
    <div class="inputGroup inputGroup2">
        <label for="number">学号</label>
        <input type="text" id="number" class="number" name="number">
    </div>
    <div class="inputGroup inputGroup2">
        <label for="sex">性别</label>
        <input type="radio" name="sex" value="male">男
        <input type="radio" name="sex" value="female">女
    </div>
    <div class="inputGroup inputGroup3">
        <button type="button" id="login" onclick="checkRegister()">签订契约！</button>
    </div>


</form>

</body>