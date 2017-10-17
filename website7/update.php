<?php 
	/*
		操作数据库
		1.连接数据库
		2.执行SQL语句
		3.换取数据并使用
		4.断开连接
	*/ 
	function UPData($sql){
		# 连接数据库
		$mysqli = new mysqli("localhost","root","","ajaxtest");

		# 测试是否连接成功
		if ($mysqli->connect_errno) {  # 如果connect_errno不为0，则连接失败
			die($mysqli->connect_errno);  # 相当于 return
		}
		# 设置utf8
		$mysqli->query("set names utf8");
		# 执行SQL语句
		$result = $mysqli->query($sql);
		if ($result) {
			echo "更新成功！";
		}else{
			echo "更新失败！";
		}
		# 断开连接
		$mysqli->close();
	}
	# 准备SQL语句
    $sql = "UPDATE customers SET name='大飞飞',email='dafeifei@163.com' WHERE id = 5";
	updata($sql);
 ?>