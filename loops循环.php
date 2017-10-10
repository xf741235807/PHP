<?php 
   //loops（循环） 

   //Foreach 

   //for 
   //@params  - init     condition    inc
  /* for($i = 0;$i < 10; $i++){
   	echo ($i+1)."<br>";
  
   }*/

   //while 
   //@params - condition
   /*$i = 0;
   while ($i < 10) {
   	echo $i."<br>";
   	$i++;
   }*/

   //do while  - condition
   $i = 0;
   do{
       echo $i."<br>";
	   $i++;
   }while ($i < 11);

   //Foreach   循环下标数组
   $people = array("Henry","Bucky","Emily");
   foreach ($people as $person =>$value) {
   	  echo $person;
   	  echo "<br>";
   }

   //Foreach   关联数组
   $people = array("Henry"=>"Henry@gmail.com",
"Bucky"=>"Bucky@gmail.com","Emily"=>"Emily@gmail.com"
);
   foreach ($people as $key => $value) {
   	echo $key.":".$value;
   	echo "<br>";
   }



 ?>