<?php 
 /*   #array:数组
    #下标数组  下标为0开始
    #关联数组  关联以第一个名字开头


   #下标数组
   $people = array("Kevin","Henry","Hemiah");
   echo $people[1]."<br>"; //拿到"Henry";
   # echo $people[3]; //数组越界;

   $ids = [23,56,42];
   echo $ids[2]."<br>";

   $cars = ["Hinda","Toyota","BYD"];
   $cars[3] = "BMW";
   echo $cars[3]."<br>";
   echo count($cars)."<br>"; //打印当前数组的个数

   print_r($cars); //打印整个数组

   var_dump($cars);//万能打印 不管啥

   //关联数组
   $people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
   echo $people["Emily"];
   $ids = [22=>"Henry",25=>"Bukcy"];
   echo $ids[22];

   $ids[35] = "Emily";
   echo $ids[35];
   print_r($ids);

   $cars[] = 'Bence';
   print_r($cars);
   $ids = "John";
   print_r($ids);
   $people[] = 55;
   print_r($people);*/

   //多维数组
   $cars = array(
   	array("Honda",20,10),
   	array("dz",20,20),
   	array("Ford",15,10)
   );
   echo $cars[2][1];


 ?>