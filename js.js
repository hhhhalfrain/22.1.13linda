function checkUser(){
    var Email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(Email === ""  ){
        alert("用户名不能为空");
        return false;
    }
    if(password === ""  ){
        alert("密码不能为空");
        return false;
    }

    document.getElementById("password").value=md5(password);
    document.getElementById("loginForm").submit();
}
function checkRegister(){
    var result = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(result === ""  ){
        alert("用户名不能为空");
        return false;
    }
    if(password === ""  ){
        alert("密码不能为空");
        return false;
    }
    document.getElementById("password").value=md5(password);
    document.getElementById("loginForm").submit();
}
function check_email(str) {
    if (str.length===0){
        return;
    }
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState===4 && xmlhttp.status===200)
        {
            document.getElementById("err_msg").innerHTML=xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET","same_email.php?q="+str,true);
    xmlhttp.send();
}
