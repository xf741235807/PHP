<div class="container">
	<?php 
      /*  #检查是否存在data的name属性
	    if(filter_has_var(INPUT_POST, "data")){
	    	#echo"data 存在！";
	    	$email = $_POST['data'];
	    	//echo $email;
	    	#过滤掉不合法的字符
	    	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
	    	echo $email;
	    	#验证是否是有效的邮箱
	    	if (filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)) {
	    		echo "邮箱合法!";
	    	}else{
	    		echo "邮箱不合法!";
	    	}
	    }else{
	    	echo "data 不存在！";
	    }

        echo "<br>";
	    #验证一个变量中的值是否是合法的整型

	    $var = 23;
	    if (filter_var($var,FILTER_VALIDATE_INT)) {
	    	echo "合法的整型";
	    }else{
	    	echo "不合法的整型";
	    }


	    #获取字符串中所有的数值
        
        $var = "dsad12314fdasfr51f11f2wf1";
	    var_dump (filter_var($var,FILTER_SANITIZE_NUMBER_INT));

        #特殊字符

        $var = "<script>alert(1)</script>";
        #echo $var;
        echo filter_var($var,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        #验证数组中每个元素
        $filters = array(
        	"data" => FILTER_VALIDATE_EMAIL,
        	"data2" => array(
        		 "filter" => FILTER_SANITIZE_NUMBER_INT,
        		 "options" => array(
        		 	  "min_range" => 1,
        		 	  "max_range" => 150 

        		 )
   
        	)
               
        );
        print_r(filter_input_array(INPUT_POST,$filters));

        #验证form表单中input的内容，第一个input一定是email，第二个input一定是数值，并且数值不能小于1大于150；

        if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)){
		    	$email = $_POST["data"];
		}else{
		    	$email = "邮箱不合法";
		}
		echo $email." : ";
		if (filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)) {
    		$number = $_POST["data2"];
    		if ($number < 1 || $number > 150) {
    			echo $number." data2超出范围<br>";
	    	}else{
	    		echo $number."<br>";
	    	}
	    }else{
	    	$number = "data2不合法";
	    	echo $number."<br>";
	    }*/
        
        
	    $arr = array(
            "name" => "henry",
            "age" => "30",
            "email" => "henry#gmail.com"
	    );
	    $filters = array(
	    	"name" =>array(
	    		"filter" => FILTER_CALLBACK,
	    		"options" => "ucwords"
	    	),
	    	"age" => array(
	    		"filter" => FILTER_SANITIZE_NUMBER_INT,
        		 "options" => array(
        		 	  "min_range" => 1,
        		 	  "max_range" => 100 
        	     )
	    	),
            "email" => FILTER_VALIDATE_EMAIL
	    );
	    print_r(filter_var_array($arr,$filters)); 







	    /*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/

	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fliters / 过滤器</title>
	<!-- <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<input type="text"
			       name="data"
			       class="form-control">
	        <input type="text"
	               name="data2"
	               class="form-control">
	    <button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>