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
        <?php
        // put your code here
         $username=$_POST['username'];
         $password=$_POST['password'];
         $email=$_POST['email'];
         
          echo $username." ".$password." ".$email;
          //连接数据库
         $link= mysql_connect("localhost", "root", "");
         mysql_select_db("dare-u", $link);
         mysql_set_charset("utf8", $link);
         echo "OK";
          //执行SQL语句
         $sql="INSERT INTO shop_user (username,PASSWORD,phone,address,consignee,email) "
                 . "VALUE ('$username','$password','1234567811','广东省清远市南华工商学院','黄国鑫','$email');";
         echo $sql;
        $result=mysql_query($sql,$link);
        var_dump($result);
          //判断执行结果
        if($result){
            echo "成功";
            //成功 header跳转到登录页面
            header("Location:register.php");
        }else{
            echo "失败";
              //失败header跳转到注册页面
              header("Location:login.php");
        }
        ?>
    </body>
</html>
