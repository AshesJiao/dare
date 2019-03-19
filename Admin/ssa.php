<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <form name="loginForm" action="ssd.php" method="post">
                    <table class="login right">
                            <tr><th>用户名：</th><td><input type="text" name="username" required /></td></tr>
                            <tr><th>密码：</th><td><input type="password" name="password" required /></td></tr>
                            <tr><th>验证码：</th><td><input type="text" name="verify" required  /></td></tr>
                            <tr><td> </td><td><img src="./Public/Common/img/captcha.png" id="verify_img" title="点击刷新验证码"/></td></tr>
                            <tr><td> </td><td><input class="button" type="submit" value="登　录" /></td></tr>
                            <tr><td colspan="2" class="center"><a href="/User/register.html">立即注册</a><a href="/">返回首页</a></td></tr>
                    </table>
		</form>
    </body>
</html>
