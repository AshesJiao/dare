<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<link href="css/css.css" type="text/css" rel="stylesheet" />
<body>
<div id="head">
    <div class="shop_da">
        <h2>达尔优商城<span>后台管理系统</span></h2>
    </div>
    <div class="shop_re">
           <?php
                if(isset($_COOKIE['aname'])){
            ?>
            <p>欢迎<?php echo $_COOKIE['aname'];?>登录达尔优商城后端!<span><a href="#">[注销]</a></span></p>
            <?php
             }
            ?>
    </div>
</div>
<div id="shop_cent">
    <div class="shop_left">
        <h2>管理菜单</h2>
        <ul>
            <li><a href="index.php">后台首页</a></li>
            <li><a href="goodssadd.php">商品添加</a></li>
            <li><a href="goodslist.php">商品列表</a></li>
            <li><a href="#">分类添加</a></li>
            <li><a href="#">分类列表</a></li>
            <li><a href="#">回收站</a></li>
            <li><a href="#">会员管理</a></li>
        </ul>
    </div>
	<div id="shop_list">
        <h2>商品列表</h2>
        <form>
        <table>
        <tr>
        <td width="500px" class="shop_big">商品名称</td>
        <td width="80px" class="shop_big">库存</td>
        <td width="80px" class="shop_big">售价</td>
        <td width="80px" class="shop_big">推荐</td>
        <td width="80px" class="shop_big">修改</td>
        <td width="80px" class="shop_big">删除</td>
        </tr>
            
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
                    $recommend=$row["recommend"];
        ?>    
         
            
        <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $stock; ?></td>
        <td><?php echo $price; ?></td>
        <td><?php echo $recommend; ?></td>
        <td><a href="goodsdit.php?id=<?php echo $id;?>">修改</a></td>
        <td><a href="goodsdel.php?id=<?php echo $id;?>">删除</a></td>
        </tr>
        <?php
        
        }
        ?>

        </table>
        </form>
    </div>
</div>
</body>
</html>
