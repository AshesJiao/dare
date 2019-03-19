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
    
 <?php
        $id=$_GET['id'];
        $link= mysql_connect("localhost", "root", "");
        mysql_select_db("dare-u", $link);
        mysql_set_charset("utf8", $link);
        $sql="SELECT * FROM shop_goods where id='$id'";
        $result=mysql_query($sql,$link);
        $row = mysql_fetch_array($result);
        $name=$row["name"];
        $sn=$row["sn"];
        $price=$row["price"];
        $stock=$row["stock"];
        $thumb=$row['thumb'];
        $recommend=$row["recommend"];
        $list=$row['list'];
 
 
 ?>
	<div id="shop_dit">
        <h2>商品修改</h2>
        <form  name="goodsditFrom"  action="goodsdittion.php" method="post" enctype="multipart/form-data">
            <table>
                 <tr>
                    <td>商品ID:</td>
                    <td><input type="text" name="id"  value="<?php echo $id; ?>" class="box_4"/></td>
                </tr>
                <tr>
                    <td>商品名称:</td>
                    <td><input type="text" name="name"  value="<?php echo $name; ?>" class="box_4"/></td>
                </tr>
                <tr>
                    <td>商品编号:</td>
                    <td><input type="text" name="sn" value="<?php echo $sn; ?>" class="box_5" /></td>
                </tr>
                <tr>
                    <td>商品价格:</td>
                    <td><input type="text" name="price" value="<?php echo $price; ?>" class="box_6" /></td>
                </tr>
                <tr>
                    <td>商品库存:</td>
                    <td><input type="text" name="stock" value="<?php echo $stock; ?>" class="box_7" /></td>
                </tr>
                 <tr>
                <td>是否推荐:</td>
                    <td><input type="text" name="recommend" value="<?php echo $recommend; ?>" class="box_7" /></td>
                </tr>
                <tr>
                    <td>上传图片:</td>
                    <td><input type="file" name="thumb" value="选择文件"  class="box_8"/></td>
                </tr>
                <tr>
                    <td>当前图片:</td>
                    <td><img src="../pic/big/<?php echo $thumb;?>" width="110" height="150"  class="box_11"/></td>
                </tr>
                <tr>
                    <td>商品详情:</td>
                    <td><input type="text" name="list" value="<?php echo $list; ?>" class="box_9" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="修改商品" class="box_10" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
