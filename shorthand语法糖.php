<?php  
    $loggedIn = false;
    $names = ["A","B","c"];
    if ($loggedIn) {
    	echo "u r logged In";
    }else{
    	echo "U r NOT logged In";
    }


    # 三目运算符
    echo ($loggedIn)? "u r logged In":"U r NOT logged In";

    #简写得到 true 或 false
    $isRegistered = ($loggedIn == true)? true:false;
    echo $isRegistered;

    #三木嵌套
    $age = 18;
    $score = 60;
    echo "Your score is ".($score > 70 ?($age < 20 ? "优秀":"良好"):($age < 20 ? "一般":"差等"));


?>
<!-- html + php 嵌套语法糖 -->
<div>
	<?php if ($loggedIn) {?>
	<p>Welcome to Beijing</p>
	<?php }else{ ?>
	<p>Welcome to Zhengzhou</p>
	<?php } ?>
</div>

<!-- 优化 -->
<div>
	<?php if ($loggedIn) : ?>
	<p>Welcome to Beijing</p>
	<?php else: ?>
	<p>Welcome to Zhengzhou</p>
	<?php endif; ?>
</div>

<!-- 遍历数组 -->
<div>
	<?php foreach ($names as $value): ?>
		<p><?php echo "$value"; ?></p>
	<?php endforeach; ?>
</div>

<!-- 遍历数组使用for循环 -->

<div>
	<?php for($i = 0; $i < count($names); $i ++): ?>
		<?php echo $names[$i]; ?>
	<?php endfor; ?>
</div>


