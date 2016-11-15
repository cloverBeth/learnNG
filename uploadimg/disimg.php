<?php
/**
* 从数据库中读取图片信息并显示
* edit: www.ahlinux.com
*/
 mysql_connect("localhost","root","root);
 mysql_select_db("angel");
 //显示最新插入的那张图片
 $result=mysql_query("select idcard_pic from dxteng_user where id=(select max(id) from dxteng_user)");
 $row=mysql_fetch_object($result);
 header("Content-Type:image/pjpeg");
 echo $row->image;
 mysql_close();
?>