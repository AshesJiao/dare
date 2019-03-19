<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

         <?php
           $uname=$_POST['username'];
           $upwd=$_POST['password'];
           $time=1;
           //1.连接数据库
           $link=  mysql_connect("localhost", "root", "");
           mysql_select_db("dare-u",$link);
           mysql_set_charset("utf8",$link);
           //2.操作数据表
           $sql="SELECT * FROM shop_admin WHERE username='$uname' AND PASSWORD='$upwd'";
           $result=mysql_query($sql,$link);
           //3.读取结果数据
           $row=  mysql_fetch_array($result);
           $aid=$row['id'];
           $name=$row['name'];
           if($row){
                setcookie("aid", "$aid", time()+3600*24*$time);
                setcookie("aname", "$name", time()+3600*24*$time);
                header("Location:index.php");
           }else{
                header("Location:login.php");  
           }
        ?>