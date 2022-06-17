<?php

// set cookies
// setcookie('last_login', date('Y-m-d H:i:s'), time() + (86400 * 30), "/");
// $cookie_name = "user";
// $cookie_value = "Fachrurrozy";
// setcookie($cookie_name, )

// read cookies
// echo $_COOKIE['last_login'];

// destroy cookie
// setcookie('last_login','', time()+3600,'/');
// echo "<br>";
// echo $_COOKIE['last_login'];
?>

<?php
// set connection params
$dsn = "mysql:host=localhost;dbname=lumen;port=3306";
// make connection
$pdo = new PDO($dsn,"root","");
// bind params
$stm = $pdo->prepare("insert into books(id, created_at, updated_at) value(?,?,?)");
// execute
$stm->execute([6,date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
// method chaining
$stm = $pdo->prepare("insert into books(id, created_at, updated_at) value(?,?,?)")->execute([7,date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
?>