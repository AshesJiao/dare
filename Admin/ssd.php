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
        $link= mysql_connect("localhost", "root", "");
        mysql_select_db("dare-u", $link);
        mysql_set_charset("utf8", $link);
        $sql="SELECT * FROM shop_goods";
        $result=mysql_query($sql,$link);
        while ($row = mysql_fetch_array($result)) {
                    $id=$row["id"];
                    $name=$row["name"];
                    $sn=$row["sn"];
                    $price=$row["price"];
                    $stock=$row["stock"];
                    $thumb=$row['thumb'];
                    $recommend=$row["recommend"];
                    echo "$id $name $sn $price $stock $thumb $recommend</br>";
        }
    
        ?>    
    </body>
</html>
