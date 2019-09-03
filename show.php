<?php
// 创建一个新cURL资源
$ch = curl_init();

// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, "https://www.17k.com/");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);


// 抓取URL并把它传递给浏览器
$res=curl_exec($ch);
$preg="#<li>.*<span class=\"click\">(.*)</span>.*<a class=\"sign\" href=\".*\" target=\".*\">(.*)</a>.*<a class=\"title\" href=\".*\" title=\".*\" target=\"_blank\">(.*)</a>.*</li>#isU";

preg_match_all($preg,$res,$arr);

$type=$arr[1];
$url=$arr[2];
$name=$arr[3];
$sql="insert into `title` VALUES ";

foreach($url as $key=>$value){
    $sql.="(null,'$url[$key]','$name[$key]','$type[$key]'),";
}

$sql=substr($sql,0,-1);
//print_r($sql);die();

//$redis=new Redis();
//$redis->connect('127.0.0.1',6379);
//if($redis->exists('data')){
//    $data=json_decode($redis->get('data'),true);
//}else{
    $dbh=new PDO('mysql:host=127.0.0.1;dbname=1704phpa','root','root');

$dbh->exec($sql);

$sql1="select * from `title`";

$state=$dbh->query($sql1);

$data=$state->fetchAll(2);
json_encode($data);
//    $redis->set('data',json_encode($data));
//   }

?>
<!--<center>-->
<!--<table border="80" cellpadding="8" cellspacing="8">-->
<!--    <tr>-->
<!--        <td>ID</td>-->
<!--        <td>类型</td>-->
<!--        <td>点击量</td>-->
<!--        <td>小说</td>1-->
<!--        <td>详情</td>-->
<!--    </tr>-->
<!--    --><?php //foreach($data as $key => $value) { ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $value['id']; ?><!--</td>-->
<!--        <td>--><?php //echo $value['title']; ?><!--</td>-->
<!--        <td>--><?php //echo $value['address']; ?><!--</td>-->
<!--        <td>--><?php //echo $value['number']; ?><!--</td>-->
<!--        <td><a href="--><?php //echo $value['address'];?><!--">详情</a></td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->
<!--</center>-->
<!---->
