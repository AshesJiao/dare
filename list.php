<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<link rel="stylesheet" href="./public/home/css/style.css" />
<script src="./public/home/js/index.js"></script>
<title>电竞系列-达尔优DAREU品牌官方网站</title>
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
  <div class="products_ad" style="background:url(./public/home/images/shubiao.jpg) no-repeat center top"></div>
<div class="clear"></div>
<div class="products_div">
    <div class="Universal">
    <div class="products_diva">
 <?php
 			//连接数据库
           $link= mysql_connect("localhost", "root", ""); 
            mysql_select_db("dare-u", $link);  //引入数据库文件
            mysql_set_charset("utf8", $link);  //修改数据库连接字符集为 utf8
            
            $sql="SELECT * FROM shop_goods where recommend='yes';"; //sql查询语句 ，查询shop_goods表中的recommend（是否推荐）的值为yes
            $result= mysql_query($sql,$link);	//执行语句
            while ($row = mysql_fetch_array($result)){   //循环查询
                $id=$row['id'];  //获取shop_goods表中的id，打印$thumb这个值是echo
                $name=$row["name"];
                $thumb=$row["thumb"];
                $price=$row["price"];
    ?> 
<div class="products_list">
<img src="./public/home/images/re.png" alt="热销" class="img"/>
<a href="detail.php?id=<?php echo "$id";?>"><img src="./pic/big/<?php echo $thumb;?>" alt="达尔优EM925 Pro 游戏鼠标双模版" /></a>
<div class="txt" style="bottom:0px;">
    <a href="detail.php"><span><?php echo$name;?></span></a>
    <p>
    </p>
</div>
<a href="*" class="more">查看更多 &gt;&gt;</a>
</div>
<?php
             }
?>


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