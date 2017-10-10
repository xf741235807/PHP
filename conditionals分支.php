<?php 
   #分支就俩  if & switch  
   /*$num = 6;
   if($num <= 4){
   	echo "num的值一定是小于或者等于4";
   }*/
   #if else
   $sum = 2;
   if($sum >= 4){
   	echo "true";
   }else{
   	echo "false";
   }
   #nesting if
   $sum = 4;
   if($sum >= 4){
       if($sum <= 10){
       	   echo "num一定是在4 ~ 10之间";
	   }else{
	       echo "num一定大于10";
	   }
   }else{
   	   echo "num一定小于4";
   }

   #逻辑       and or (异或 XOR）
   $sun = 3;
   if ($sum < 2 XOR $sum > 10) {
   	echo "num 是大于3并且小于10";        #XOR 只有一个为真结果才为真
   }
   # swihch
   $favColor = "green";
   switch($favColor){
   	   case 'red':
   	   echo "angry";
   	   break;

   	   case 'yellow':
   	   echo "happy";
   	   break;

   	   case 'blue':
   	   echo "silence";
   	   break;

   	   case 'green':
   	   echo "hat";
   	   break;

   	   default:
   	   echo "GUN"
   	   break;
   }

 ?>