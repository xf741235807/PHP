<?php 
	/*
		操作数据库
		1.连接数据库
		2.执行SQL语句
		3.换取数据并使用
		4.断开连接
	*/ 
	function selectData($sql){
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
		//var_dump($result);
		if ($result->num_rows) {
			$data = $result->fetch_all(MYSQLI_ASSOC);
			//print_r($data);  默认是下标数组
			echo json_encode($data);
		}
		# 断开连接
		$mysqli->close();
	}
	# 准备SQL语句
    $sql = "SELECT * FROM customers";
	selectData($sql);
 ?>