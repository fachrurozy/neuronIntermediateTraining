<?php
$username = "admin";
$password = "password";

// unset($_SERVER['PHP_AUTH_USER']);

if(!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic");
    header("HTTP/1.0 401 Unauthorized");
    echo "Silahkan masukkan username dan password";
}else{
    echo "Hallo ".$_SERVER['PHP_AUTH_USER'].'<br>';
    echo "Password anda adalah : ".$_SERVER['PHP_AUTH_PW'];
}
?>