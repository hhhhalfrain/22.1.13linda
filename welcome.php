<?php
session_start();
if(!$_SESSION['Email'])
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>hallo</title>
</head>
<body>
<script>
    window.addEventListener("load",function(){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                var data =xmlhttp.responseText;
                console.log(data);
                var obj = JSON.parse(data);
                let output = document.createElement("h1");
                let node = document.createTextNode("你来了," + obj.name);
                output.appendChild(node);
                var element=document.getElementById("welcome");
                element.appendChild(output);
                output=document.createElement("p");
                node = document.createTextNode("请求到的json字符串:"+data);
                output.appendChild(node);
                element.appendChild(output);
            }
        }

        xmlhttp.open("GET","get_user_data.php",true);
        xmlhttp.send();
    })
</script>
<div id="welcome"></div>
<a href='clean_session.php'>注销</a>
</body>
</html>