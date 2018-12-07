<?php
function makingDatabaseConnection($connString, $user, $pass)
{
    $pdo = new PDO($connString, $user, $pass);
    return $pdo;
}

function scriptLinker()
{
    echo "<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
    crossorigin=\"anonymous\"></script>";
    echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>";
    echo "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>";
}

function footer()
{
    echo "<hr>";
    echo "<footer>";
    echo "<a href=\"https://www.facebook.com/Seans-Health-and-Fitness-Blog-334466173773584/\"><img src=\"images/facebook.jpg\"></a>";
    echo "<a href=\"#top\" style=\"margin-left: 5%; background-color: white;\">Back to top of page</a>";
    echo "<p id=\"theDate\"></p>";
    echo "<script type=\"text/javascript\">";
    echo "var d = new Date();";
    echo "document.getElementById(\"theDate\").innerHTML = d;";
    echo "</script>";
    echo "</footer>";
}

function refreshScript()
{
    echo "<script type=\"text/javascript\">";
    echo "setTimeout(function () { location = '' }, 1000000); </script>";
}

?>

