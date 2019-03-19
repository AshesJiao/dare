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
    $id=$_GET['id'];
    $link= mysql_connect("localhost", "root", "");
    mysql_select_db("dare-u", $link);
    mysql_set_charset("utf8", $link);
    $sql=" UPDATE shop_goods SET shop='no' WHERE id=$id";
    $result=mysql_query($sql,$link);
    header("Location:order.php");
        ?>
    </body>
</html>
