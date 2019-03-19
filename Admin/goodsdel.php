<?php    
    $id=$_GET['id'];  //在列表页点击删除的时候 获取到该商品的id
    $link= mysql_connect("localhost", "root", "");
    mysql_select_db("dare-u", $link);
    mysql_set_charset("utf8", $link);
    $sql="delete from shop_goods where id=$id";  //sql语句，删除shop_goods表中id为删除的商品的id
    header("Location:goodslist.php");
    
?>
