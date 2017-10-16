<?php 
    #监听用户是否触发了submit方法
    if (isset($_POST['submit'])) {
    	$username = $_POST['username'];

    	setcookie('xufei',$username,time() + 86400*30);
    	header("location:page2.php");
    }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page 1</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="enter ur name!">
		<input type="submit" value="Submit" name="submit">
	</form>
	
</body>
</html>