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
        if(isset($_COOKIE['aid'])){
            setcookie("aid", "", time()-3600*24);
            setcookie("aname", "", time()-3600*24);
        }
        header("Location:login.php");
        ?>
    </body>
</html>
