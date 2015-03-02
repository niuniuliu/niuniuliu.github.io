<?php
//$urls[]=array();
$url = "http://www.baidu.com/";
if($_GET['fid'])
	$content = file_get_contents("http://pan.baidu.com/share/link?shareid=".$_GET['shareid']."&uk=".$_GET['uk']."&fid=".$_GET['fid']);
else
	$content = file_get_contents("http://pan.baidu.com/share/link?shareid=".$_GET['shareid']."&uk=".$_GET['uk']);
//$content=file_get_contents("http://pan.baidu.com/share/link?shareid=358634&uk=2218169608&fid=2068207867");
if(preg_match("/http:\/\/d\.pcs\.baidu\.com\/file\/.*response-cache-control=private/",$content,$matches))
	$url=$matches[0];
//echo $content;
$url=str_replace('&amp;', '&', $url);
header("location:$url");
?>