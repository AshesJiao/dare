<?php
/* * **************************************************************************** 
  参数说明:
  $max_file_size  : 上传文件大小限制, 单位BYTE
  $destination_folder : 上传文件路径
 * **************************************************************************** */

//上传文件类型列表  
$uptypes = array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size = 2000000;     //上传文件大小限制, 单位BYTE  
$destination_folder = "/pic/big/"; //上传文件路径  
?> 
<?php
    /**
     * 生成日期目录     例如:  ../public/uploads/big/2016-11/08/
     * @param string $path
     * @return type
     */
    function get_date_dir($path){
        $path=trim($path,"/")."/";
        $Y=date("Y");
        $m=date("m");
        $d=date("d");
        if(!is_dir($path.$Y."-".$m)){mkdir($path.$Y."-".$m);}
        if(!is_dir($path.$Y."-".$m."/".$d)){mkdir($path.$Y."-".$m."/".$d);}
        return $path.$Y."-".$m."/".$d."/";
    }
//    $destination_folder = "/Public/Uploads/big/"; //上传文件路径  
//    $abc= dirname(dirname(__FILE__));
//    echo $abc."<br>";
//    $path1=get_date_dir($destination_folder);
//    echo $path1;
?>
<?php
    header("Content-Type:text/html; charset=utf-8");
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sn=$_POST['sn'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $recommend=$_POST['recommend'];
    $list=$_POST['list'];
    $thumb="";
    
        
     //是否存在文件  
    if (!is_uploaded_file($_FILES["thumb"]['tmp_name'])) {
        echo "图片不存在!";
    }else{
        $file = $_FILES["thumb"];
        //检查文件大小  
        if ($max_file_size < $file["size"]) {
            echo "文件太大!";
            go_back("文件太大");
        }
        //检查文件类型  
        if (!in_array($file["type"], $uptypes)) {
            echo "文件类型不符!" . $file["type"];
            go_back("文件类型不符");
        }
        $path1=get_date_dir("..".$destination_folder);
        $filename = $file["tmp_name"];
        $image_size = getimagesize($filename);
        $pinfo = pathinfo($file["name"]);
        $ftype = $pinfo['extension'];
        $picName=time(). "." .$ftype;
        $destination = $path1 .$picName;
        $Y=date("Y");
        $m=date("m");
        $d=date("d");
        $thumb=$Y."-".$m."/".$d."/".$picName;
        if (file_exists(dirname(dirname(__FILE__)).$destination) && $overwrite != true) {
            echo "同名文件已经存在了";
            go_back("同名文件已经存在了");
        }
        if (!move_uploaded_file($filename, dirname(dirname(__FILE__)).$destination)) {
            echo "移动文件出错";
            go_back("移动文件出错");
        }
        $pinfo = pathinfo($destination);
        $fname = $pinfo['basename'];
    }
    echo "$sn $name $price $stock $thumb $id";
    $link= mysql_connect("localhost", "root", "");
         mysql_select_db("dare-u", $link);
         mysql_set_charset("utf8", $link);
    $sql="UPDATE shop_goods SET sn='$sn',NAME='$name', price='$price', stock='$stock', thumb='$thumb', recommend='$recommend', LIST='$list' WHERE id=$id;";
    $result=mysql_query($sql,$link);
    header("Location:goodslist.php");
?>