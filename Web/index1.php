<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Fetch file </title>
    </head>
    <body style="">
        <h1>File Fetcher</h1>
        <form method="get">
            <label for="">Fetch</label>
            <input type="text" name="fetch" value="">
        </form>
    </body>
</html>

<?php

// http_response_code(200);

$get = $_GET['fetch'];
echo "<br>";
if($get === 'admin.php'){
    echo "Output: shellctf{c0ntent_l3ngth_m4tt3rs}";
}else{
echo "Output: huhahah";
}
?>
