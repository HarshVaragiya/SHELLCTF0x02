<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="get">
            <input type="text" name="fetch" value="">
        </form>
    </body>
</html>

<?php

$id = mysql_real_escape_string($_GET['fetch']);

if($id === 'admin.php'){
    echo "shellctf{st4tus_c0de_c4n_b3_anyth1ng}";
}
echo "huhahah";

?>
