<?php 
 # function 函数:具有某一功能的代码块,在PHP中函数的名字不分大小写
 /*
 命名法:驼峰 Camel Case -- myFunction()
 Lower Case -- my_function()
 Pascal Case -- MyFunction()
 */

 //定义函数
 function simpleFunction(){
 	echo "hello world"."<br>";
 }
 //函数调用
simpleFunction();
 
 # 有参数 无返回值
 function buy($money="20元钱"){
   echo $money."给了,但没给我买东西,拿着钱跑了!";
   echo "<br>";
}
buy("30元钱");

# 多参数 有返回值
function sumValue($num1,$num2){
  $sum=$num1+$num2;
  return $sum;	 
}
$s=sumValue(13,20);
echo $s."<br>";

 # 无参数 有返回值
function buyDrink(){
  return "饭后的饮料";
}
echo buyDrink()."<br>";

# 函数传引用 &:取地址符
 $myNum=10;
 function addFive(&$num){
 	// echo $num+5;
 	// $myNum=20;
 	$num+=5;
 } 
 addFive($myNum);
 echo $myNum;//15
 

?>