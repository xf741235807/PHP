<?php
    #重新赋值
    setcookie("xufei","Franch",time() + 86400);
    #删除cookie
    //setcookie("xufei","dasdsa",time() -3600);
    if (count($_COOKIE) > 0) {
    	echo "一共有".count($_COOKIE)."COOKIE";
    }else{
    	echo "没有任何设置COOKIE";
    }
    if(isset($_COOKIE['xufei'])){
    	echo "你的用户名是： ".$_COOKIE['xufei'];
    }else{
    	echo "用户名不存在";
    }
   
 ?>