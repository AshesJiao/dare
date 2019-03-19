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
        //前端用户登录验证
          $username=$_POST['username'];
          $password=$_POST['password'];
          echo "$username $password";
          
          //1、连接数据库
          $link = mysql_connect ( 'localhost', 'root' , '');//创建一个数据库连接
          mysql_select_db("dare-u", $link);//选择要用的数据库
          mysql_set_charset("utf8", $link);//设置数据库的字符集
          
          //2、写SQL语句并执行SQL查询
          $sql="SELECT * FROM shop_user WHERE username='$username' AND PASSWORD='$password'";//写SQL语句
          $result=  mysql_query($sql, $link);//执行SQL查询
          var_dump($result);//分析结果数据类型
          
          //3.读取查询结果
          $row = mysql_fetch_array($result);//读取查询结果
          $id=$row['id'];
          if($row){
             echo "登录成功";
            //登录成功 header跳转到首页面
            setcookie ( "uid" ,  $id ,  time ()+ 3600);   /* cookie在1小有效 */
            setcookie ( "uname" , $username ,  time ()+ 3600);   /* cookie在1小内有效 */
            header("Location:index.php");
          }else{
             echo "登录失败";
             //登录失败 header跳转到登录页面
            header("Location:register.php");
          }
        ?>
    </body>
</html>
