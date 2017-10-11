<?php 

  //echo date();  至少给一个参数
  /*echo date("d");
  echo date("m");
  echo date("Y");   //2017
  echo date("y");   // 17
  echo date("l");   // day of week
  echo date("Y/m/d");
  echo date("d-m-Y");



  echo date("h");
  echo date("i");   //分
  echo date("s");


  echo date("a"); //AM or PM
*/

  #设置时区
   date_default_timezone_set("Asia/Shanghai");
   echo date('h:i:sa');


   #mktime
   $timestamp = mktime(12,00,00,6,5,1987);
   echo $timestamp;
   echo "<hr>";
   #完整事件
   echo date("m/d/Y h:i:sa",$timestamp);
   echo "<hr>";
   # 字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp2)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp3)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp4)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp5)."<hr>";

 ?>