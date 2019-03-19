<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<link rel="stylesheet" href="./public/home/css/style.css" />
<script src="./public/home/js/index.js"></script>
<title>品牌升级声明-达尔优DAREU品牌官方网站</title>
</head>

<body>
 <div class="header_div">
 	<div class="header">
      <div id="logo">
          <a href="index.php"><img src="./public/home/images/logo.png" alt="优达尔" /></a>      
      </div>
      <div class="nav">
      <ul>
          <li><a href="list.php">电竞系列</a></li>
		<li><a href="#">网咖系列</a></li>
		<li><a href="#">办公系列</a></li>
		<li><a href="#">电竞文化</a></li>
		<li><a href="#">新品专题</a>
           <div class="nav-up" style="width:180px; text-align:left; padding:0 0 0 10px;">
           <a style="text-align:left;" target="_blank" href="#">达尔优双11狂想曲·疯狂任性购</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EK822机械键盘预售狂欢</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EK820-Touch版京东首发</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EK820办公机械键盘上市</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EM925 PRO游戏鼠标专题</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EH755游戏耳机专题</a> 
           <a style="text-align:left;" target="_blank" href="#">达尔优EK835机械键盘专题</a> 
           <a style="text-align:left;" target="_blank" href="#">火影忍者系列专题——英雄再临</a>
           </div>
        </li>
		<li><a href="#">服务中心</a>
        	<div class="nav-up">
            <a href="#">售后服务</a>
            <a href="#">下载中心</a>
            <a href="#">常见问题</a>
            <a href="#">活动中心</a>
            </div>
        </li>
        <li><a href="#">品牌中心</a>
        	<div class="nav-up">
            <a href="#">关于达尔优</a>
            <a href="#">新闻中心</a>
            <a href="#">联系我们</a>
            <a href="#">视频中心</a>
            <a target="_blank" href="upgrade.php">品牌升级声明</a>
            </div>
        </li>
        <li><a href="register.php">登录</a></li>
	  </ul>
      </div>
	</div>
 </div>
 <div id="mian_id">
	<div id="content">
        
    <h2 class="title">购物车明细</h2>
        	<div id="cart">
                    <form  >
			  <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <th scope="col">商品图片</th>
                    <th scope="col">名称</th>
                    <th scope="col">数量</th>
                    <th scope="col">单价</th>
                    <th scope="col">小结</th>
                    <th scope="col">操作</th>
                  </tr>
                      <?php
    $link= mysql_connect("localhost", "root", "");
    mysql_select_db("dare-u", $link);
    mysql_set_charset("utf8", $link);
    $sql="select * from shop_goods where shop='yes'";
    $result=mysql_query($sql,$link);
    while ($row = mysql_fetch_array($result)){ 
                $name=$row["name"];
                $thumb=$row["thumb"];
                $price=$row["price"];
                $id=$row['id'];
        
    ?>
                  <tr>
                      <td><a href="#"><img src="./pic/big/<?php echo $thumb; ?>"/></a></td>
                    <td><a href="#"><?php echo $name; ?></a> </td>
                    <td>1</td>
                    <td>￥<?php echo $price; ?></td>
                    <td>￥<?php echo $price; ?></td>
                    <td><a href="orderdel.php?id=<?php echo $id;?>">删除</a></td>
                  </tr>
          <?php
          
          }
          ?>

              </table>
				<div class="cartinfo"> 
					<p class="total">总金额:</p>

				</div>
				</form>
			</div>
        
      </div>
        </div>
    </div>
</div>
    <div class="main">
        <div class="Universal">
            <div class="footer_p footer_pa"><a target="_blank" href="*"><img src="./public/home/images/footerimga.jpg" alt="京东指定入口" />京东指定入口</a></div>
            <div class="footer_p"><a target="_blank" href="*"><img src="./public/home/images/footerimg.jpg" alt="官方旗舰店" />官方旗舰店</a></div>
            <div class="footer_p"><a target="_blank" href="*"><img src="./public/home/images/footerimg.png"alt="苏宁易购" /></a></div>
            <div class="clear"></div>
            </div>
        </div>
            <div class="footer">
            <div class="Universal">
            <span><a href="/Contacts.html">联系我们</a> | <a href="/Contacts.html">关注我们</a></span>
            版权所有：南华网络3班 电话：6666-666-666 <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备10037798号-4</a> 建议1600*980，IE9.0以上为最佳浏览模式
            </div>
        </div>
    </div>
</body>
</html>
