<?php 
    $users = ["name" => "Henry","email" => "henry@gemail.com","age" => 30];
    $users = serialize($users);
    setcookie('users',$users,time() + 86400);

    $users = unserialize($_COOKIE['users']);
    print_r($users);

 ?>

