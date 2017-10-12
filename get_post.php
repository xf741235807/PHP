<div class="container">
	<?php 
        #get
        // echo $_GET["sbqname"];
	    //检查sbqname是否能够获取到
        // if(isset($_GET["sbqname"]) && isset($_GET["sbqemail"])){
        // 	$name = $_GET["sbqname"];
        // 	$email = $_GET["sbqemail"];
        // 	echo $name."  ".$email;
        // }
        #post
	    // if(isset($_POST["sbqname"]) && isset($_POST["sbqemail"])){
	    //    	$name = $_POST["sbqname"];
	    //    	$email = $_POST["sbqemail"];

	    //    	if(!empty($name) && !empty($email)){
	    //            echo $name." : ".$email;
	    //    	}
	    //    	print_r($_POST);     	
	    //    }
        #request  
		if(isset($_REQUEST["sbqname"]) && isset($_REQUEST["sbqemail"])){
	        	$name = $_REQUEST["sbqname"];
	        	$email = $_REQUEST["sbqemail"];

	        	if(!empty($name) && !empty($email)){
	                echo $name." : ".$email;
	        	}
	        	print_r($_REQUEST);     	
	        }

	     //查询url地址后面的参数
	        echo $_SERVER['QUERY_STRING'];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- 提交到哪个文件 -->
		<form action="get_post.php" method="GET" > 
			<div class="from-group">
				<label for="">Name</label>
				<input type="text" name="sbqname" class="form-control">
			</div>
            <br>
			<div class="from-group">
				<label for="">Email</label>
				<input type="email" name="sbqemail" class="form-control">
			</div>
            <br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=郜超";?>" class="btn btn-info btn-block"  >
					郜超
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅";?>" class="btn btn-success btn-block"  >
					赵帅
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=全莹";?>" class="btn btn-info btn-block"  >
					全莹
				</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])):?>
				<?php echo $_GET['name']; ?>
		    <?php endif; ?>
			
		</h1>
	</div>
</body>
</html>