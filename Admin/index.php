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
        <p>欢迎<?php echo $_COOKIE['aname'];?>登录达尔优商城后端!<span><a href="logindel.php">[注销]</a></span></p>
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
    <div class="shop_right">
        <h2>后台首页</h2>
        <h3>欢迎访问</h3>
        <p>欢迎进入达尔优商城后台！请从左侧选择一个操作。</p>
        <h3>服务器信息</h3>
        <p>系统环境：Apache/2.2.29 (Win32) PHP/5.4.38</p>
        <p>服务器时间：2015-05-21 18:36:41</p>
        <p>MySQL版本：5.5.43</p>
        <p>文件上传限制：2M</p>
        <p>脚本执行时限：30秒</p>
    </div>
</div>
</body>
</html>
