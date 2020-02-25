<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Vinegar</title>

        <script type="text/javascript">
        setTimeout(function(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML =
                this.responseText;
              }
            };
            xhttp.open("GET", "ch3cooh.acid", true);
            xhttp.send();
        }, 10000);


        </script>

    </head>
    <body style="text-align:center">
        <h2>Acetic acid</h2>
        <img style="top:40mx" src="https://media.giphy.com/media/O2vrqYQoBCPte/giphy.gif" alt="">
        <img src="https://lh3.googleusercontent.com/proxy/H74sbHnM5oSnPjo0aCZhDCrU4ltqcJdXccr_DIdvnYhP6OkaKPwwBhABIKfwu1lTS5VuAX1scPiJqmse-Lxf2FyOVu1VbUxwZxJgUl_Fbw" alt="">
        <p id="content" style="display:none;"></p>
    </body>
</html>
