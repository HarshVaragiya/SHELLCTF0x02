<?php

if (empty($_POST['hmac']) || empty($_POST['host'])){
    header('HTTP/1.0 400 Bad Request');
    exit;    
}

$secret = "adwhawudhaw";

if (isset($_POST['nonce']))
    $secret = hash-hmac('sha256',$_POST['nonce'],$secret);
    
$hmac = hash_hmac('sha256',$_POST['host'],$secret);

if ($hmac !== $_POST['hmac']){
    header('HTTP/1.0 403 Forbidden');
    exit;
}

echo exec("host".$_POST['host']);
?>
