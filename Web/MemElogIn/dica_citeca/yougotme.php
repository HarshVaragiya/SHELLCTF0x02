<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body style="text-align:center">
        <h1>Ch3mistry L4b</h1>
        <form action="" method="post">
            <label for="pass">Key:</label>
            <input type="text" name="pass" value="">
        </form>
    </body>
</html>

<?php
// http_response_code(404);
// Get the current default response code
//var_dump(http_response_code());
//header("HTTP/1.1 404 Not Found");

// Set a response code
//var_dump(http_response_code());

$pass = $_POST['pass'];

$pass = strtolower($pass);

if($pass === "divyanshu"){
    echo "<br>";
    echo "shellctf{ch3mistry_is_myst3ry}";
}


 ?>
