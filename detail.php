<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<link rel="stylesheet" href="./public/home/css/style.css" />
<script src="./public/home/js/index.js"></script>
<title>详情</title>
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
<div class="clear"></div>
<div class="Universal_a">
	<div class="scroll_dh">
    	<span>达尔优EM925 Pro 游戏鼠标双模版</span>
    	<div class="clear"></div>
    </div>
    <ul class="scroll_ul">
    	<li><a href="#a" class="li1">大图展示</a></li>
        <li><a href="javascript:void(0)" class="li2">驱动下载</a></li>
        <li><a href="#c" class="li3">产品特色</a></li>
        <li><a href="#d" class="li4">技术参数</a></li>
        <li><a href="#e" class="li5">其它特性</a></li>
        <div class="clear"></div>
    </ul>
     <?php
           $aid=$_GET['id'];
           $link= mysql_connect("localhost", "root", "");
            mysql_select_db("dare-u", $link);
            mysql_set_charset("utf8", $link);
            
            $sql="SELECT * FROM shop_goods WHERE id=$aid;";
            $result= mysql_query($sql,$link);
           
             while ($row = mysql_fetch_array($result)){ 
                $id=$row['id'];
                $name=$row["name"];
                $thumb=$row["thumb"];
                $price=$row["price"];
                $list=$row["list"]
    ?> 
 
    <div class="scroll_title"></div>
    <p class="scroll_txt"></p>
	<div class="scroll" id="a">
          <p id="prevbtna" class="preva"></p>
          <img src="./pic/big/<?php echo $thumb;?>">
                  <div class="pinfo">
        	<h1><?php echo $name;?></h1>
                <h4><label>京东价:</label><?php echo $price;?></h4>
            <h5>品牌：<a href="#"><?php echo $list;?>;</a></h5>
                 <p><a href="https://mall.jd.com/index-1000000315.html" class="cartbt">立即购买</a></p>
        </div>
          <?php
             }
             ?>
        <p id="nextbtna" class="nexta"></p>
        <div class="clear"> </div>
    </div>

    <div class="scroll_vedio_dh">观看达尔优EM925 Pro 游戏鼠标双模版视频 <img src="./public/home/images/xiang1.jpg" alt="观看视频" /></div>
</div>
<div class="products_div">
	<div class="Universal" id="c">
    	<div class="products_lefta">
        	<div class="products_dh"> 产品特色</div>
            <div class="products_txta">
            	<p style="white-space: normal;"><strong style="font-size: 18px;"><strong>|</strong>游戏级无线传输技术</strong></p><p>能够持续搜寻并连接优质的信号，保证数据传输的稳定性，配备2.4G NANO接收器，拥有等同于有线1000Hz/s的USB报告速率，即使在无线状态下也能达到有线时的速度。</p><p><strong style="white-space: normal; font-size: 18px;"><strong>|</strong>供王者驾驭的高阶定制型游戏引擎</strong></p><p>达尔优定制高阶游戏引擎PMW3336，拥有10800dpi的采样率和8000FPS刷新率，能够提供150ips追踪精度和50G的加速度，提供玩家比一般光学芯片更稳定、优秀的性能，并有足够强大的玩家自定义空间、宏编程能力。</p><p><strong style="white-space: normal; font-size: 18px;"><strong>|</strong>有线竞技模式兼顾充电、RGB灯效</strong></p><p>以充电线将鼠标接上电脑，会自动切换为有线传输模式，启动满载性能状态应对游戏所需，同时一边为鼠标充电；此外，可通过专属驱动软件来自定义1680万色的LOGO背光灯效。</p><p><strong style="white-space: normal; font-size: 18px;"><strong style="white-space: normal; font-size: 18px;"><strong>|</strong>操控灵敏度控制尽在掌握</strong></strong></p><p>玩家可以通过DPI +/-键进行自由的实现7档切换（600/1200/2400/3600/5400/7200/10800dpi）速表速度，更可通过驱动能够实现任意你想要的精确数值，满足更专业、严格的速度控制需求。</p><p><strong style="white-space: normal; font-size: 18px;"><strong style="white-space: normal; font-size: 18px;"></strong></strong><strong style="white-space: normal; font-size: 18px;"><strong><strong>|</strong>持久的续航能力和电池利用模式切换</strong></strong></p><p>内置930mAh锂电池能量，一次充满：游戏模式可使用约10天，办公模式下可以使用约15天。通过右键+滚轮键组合可以实现四组模式之间的切换：省电模式（125Hz）/办公模式（250Hz）/游戏模式（500Hz）/竞技模式（1000Hz）。(一档闪1次白光、二档闪2次白光、三档闪3次白光、四档闪4次白光)</p><p><strong style="white-space: normal; font-size: 18px;"><strong><strong style="white-space: normal; font-size: 18px;"><strong><strong>|</strong></strong></strong>匠心工艺的表面处理</strong></strong></p><p><span style="font-size: 16px;">风格独具的黑·金质感，由不低于10道工序实现多面浸染过渡效果，鎏金岁月沉淀出的古铜色金属漆面由匠人纯手工MOD喷涂，自动化和纯手工的结合，确保每一个EM925 Pro品相兼顾。</span></p>
            </div>
        </div>
        
        <div class="clear"></div>
    </div>
</div>
<div class="Universal" id="d">
    	<div class="products_left">
        	<div class="products_dh">技术参数</div>
            <div class="products_txt">
            	<p>有线状态</p><p>按键(默认)：左键、右键、滚轮、DPI+、DPI+、前进、后退</p><p>表面处理：类肤质</p><p>IC芯片：PMW3336 &nbsp; &nbsp;&nbsp;</p><p>DPI数值：600/1200/2400(默认)/3600/7200/10800dpi &nbsp;&nbsp;</p><p>回报率：125/250/500/1000Hz &nbsp; &nbsp;</p><p>最大的速度：150ips &nbsp; &nbsp; &nbsp;</p><p>最大的加速度：30G &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>帧率：8000fps &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>LOGO灯：幻彩(默认)</p><p>连接线：可收纳1.5m TPE线材 &nbsp; &nbsp;</p><p>鼠标单体重量：109±3g &nbsp; &nbsp; &nbsp;</p><p>外形尺寸：130x70.5x41mm</p><p>电池容量：930mAh(typ) &nbsp; &nbsp;</p><p>充电电流：350mA &nbsp; &nbsp; &nbsp;&nbsp;</p><p>功耗：21mAh(MAX） &nbsp; &nbsp;待机：6mA（30分钟） &nbsp; 休眠电流:1mA &nbsp;&nbsp;</p><p>有线模式功耗:350 mA (Max) &nbsp; &nbsp; &nbsp;</p><p>鼠标插上线材，默认切换为有线模式。并给电池充电，0-10%亮红色，10-90%亮橙色，90-100%亮绿色&nbsp;</p><p><br/></p>
            </div>
        </div>
        
        <div class="clear"></div>
</div>
<div class="products_div" id="e">
   <div class="procolor">
    	<div class="procolor_sub">
        	<p class="procolor_dh">其他特性</p>
           <!--<div class="procolor_dha"></div>--> 
            <div class="procolor_txt">
            	<p>无线状态</p>
<p>工作方式：2.4G无线游戏/电竞模式状态下</p>
<p>DPI数值：600/1200/2400(默认)/3600/7200/10800dpi</p>
<p>回报率：125/250/500/1000Hz</p>
<p>LOGO灯：幻彩(默认)</p>
<p>电池容量：930mAh(typ)</p>
<p>指示灯：电压低于10%的时候，指示灯亮红色并以3S一次的频率闪烁提醒用户</p>


<p>工作方式：2.4G无线省点/办公模式状态下</p>
<p>DPI数值：600/1200/2400（默认）/3600/7200/10800dpi</p>
<p>回报率：125/250/500/1000Hz</p>
<p>LOGO灯：无</p>
<p>电池容量：930MA</p>
<p>指示灯：电压低于10%的时候，指示灯亮红色并以3S一次的频率闪烁提醒用户</p>
            </div>
           <ul class="procolor_title">
            </ul>
        </div>
        <div class="procolor_nn">
        	<div class="procolor_dl procolor_s">
        	<div class="clear"></div>
        </div>
    </div>
</div
></body>
</html>
