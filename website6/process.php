<?php 
    # echo "hello world";
    // if (isset($_GET['name'])) {
    // 	echo "你的名字是： ".$_GET['name'];
    // }

    // if (isset($_POST['name'])) {
    // 	echo "你的名字是： ".$_POST['name'];
    // }

    #连接数据库
    $conn = mysqli_connect("localhost","root","","ajaxtest");
    if (isset($_POST['name'])) {
	   	echo "你的名字是： ".$_POST['name'];
	   	$name = $_POST['name'];
	   	$query = "INSERT INTO users(name) VALUES('$name')";
	   	$result = mysqli_query($conn,$query);
	   	//"set names utf8"
	   	if ($result) {
	   		echo "数据插入成功";
	   	}else{
	   		echo "数据插入失败".mysql_error($conn);
	   	}
    }
  
 ?>