<?php

function blogPost ($nav, $imagePath, $theDate, $text)
{
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm-2\">";

    // if block to determine if nav should be added
    // it should only be added if it is the latest blogpost so it is at the top of the page
    if($nav) // if set to true
    {
        navMenu(); // function listed below
    }

    echo "</div>";
    echo "<div class=\"col-sm-8\">";
    echo "<div class=\"card w-100\" style=\"width: 18rem;\">";
    echo "<img class=\"card-img-top\" src=\"$imagePath\" alt=\"Card image cap\">";
    echo "<div class=\"card-body\">";
    echo "<p class=\"card-text\"><h4>$theDate</h4>$text</p>";
    echo "</div></div></div>";
    echo "<div class=\"col-sm-2\">";
    echo "</div></div><br>";
}

function navMenu()
{
    echo "<ul class=\"nav flex-column\">";
    echo "<li class=\"nav-item\">";
    echo "<a class=\"nav-link active\" href=\"index.php\">Home</a>";
    echo "</li>";
    echo "<li class=\"nav-item\">";
    echo "<a class=\"nav-link\" href=\"app.php\">App</a>";
    echo "</li>";
    echo "<li class=\nav-item\">";
    echo "<a class=\"nav-link\" href=\"contact.php\">Contact</a>";
    echo "</li>";
    echo "</ul>";
    echo "<a href=\"https://www.facebook.com/Seans-Health-and-Fitness-Blog-334466173773584/\">";
    echo "<img src=\"images/facebook.jpg\"></a>Find us on social media!<br>";
    echo "<a href=\"signup.php\"><img src=\"images/signupIcon.jpg\"></a>";
}

?>