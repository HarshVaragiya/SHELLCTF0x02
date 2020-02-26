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
            xhttp.open("GET", "ch3cooh.acid.php", true);
            xhttp.send();
        }, 10000);


        </script>

    </head>
    <body style="text-align:center">
        <h2>Acetic acid</h2>
        <img style="top:40mx" src="https://media.giphy.com/media/O2vrqYQoBCPte/giphy.gif" alt="">
        <img src="https://miro.medium.com/max/640/1*a7E4srs45jdT1z456RQBQA.png" alt="">
        <p id="content" style="display:none;"></p>
    </body>
</html>
