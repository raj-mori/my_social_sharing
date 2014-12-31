<?php

mysql_connect("localhost", "root", "") or die("can't connect");
mysql_select_db("webspasm");

$url = $_POST['url'];
$tag = $_POST['tag'];
$sys_value = $_POST['sys_value'];
$private = $_POST['private'];
$url_board = $_POST['url_board'];
$text_ = $_POST['text_'];
$verticle = $_POST['verticle'];
$horizontal = $_POST['horizontal'];
$size = $_POST['size'];

$q = "insert into bookmark_new (url,tag,sys_value,private,url_board,text,verticle,horizontal,size) values"
        . " ('$url','$tag','$sys_value','$private','$url_board','$text_','$verticle','$horizontal','$size')";


mysql_query($q) or die(mysql_error());


header("location: add_bookmark.php");
?>