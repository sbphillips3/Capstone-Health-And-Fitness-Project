<!DOCTYPE html>
<html> 
<head>
    <title>BMI</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">   
</head>
<body onload="createWeightOptions() + createHeightOptions()">
    <!--Bootstrap Scripts-->
    <?php 
        include_once 'function.php';
        include_once 'blog_function.php';
        scriptLinker();    
    ?>
    <!--Refresh Script-->
    <?php refreshScript(); ?>
    <header class="shadow p-3 mb-5 bg-white rounded">
        <h1>The Health Calculator App</h1>
        <h3>Enjoy</h3>
    </header>
    <a name="top"></a>   
    <div class="row">
        <div class="col-sm-2">
            <?php
                // nav menu via php function
                navMenu();
            ?>
        </div>
        <div class="col-sm-8">
            <!--Results Goes Below-->
            <div id="info">
            <?php
            $w = $_GET['weight'];
            $h = $_GET['height'];

            $bmi = $w / pow($h, 2) * 703;
            echo "<div id=\"result\">Your bmi is: <b>" . round($bmi, 2) . "</b></div>";

            if ($bmi > 30) {
                echo "<div id=\"conclussion\">You should consult a professional about losing weight. Diet suggestions are listed
                below. Be sure to consult your physician to make sure you are healthy enough to utilize one of the suggested
                diets. </div>";
            } elseif ($bmi > 25) {
                echo "<div id=\"conclussion\">You are slightly overweight! You should consult a professional about losing weight. Diet suggestions are listed
                below. Be sure to consult your physician to make sure you are healthy enough to utilize one of the suggested
                diets.</div>";
            } elseif ($bmi > 18.5) {
                echo "<div id=\"conclussion\">You are a healthy weight! Keep up the good work!</div>";
            } else {
                echo "<div id=\"conclussion\">You are underweight! Consult your physician and start a plan that will help you gain the necessary weight.</div>";
            }
            ?>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <hr>
    <!--JQuery to use button below to change the text inside of the div tag with id of "info" above -->
    <script type="text/javascript">
        $(document).ready(function(){
            
            // displays Paleo information above
            $("#Paleo").click(function(){
                $("#info").text("A paleo diet is a dietary plan based on foods similar to what might have been eaten during " + 
            "the Paleolithic era, which dates from approximately 2.5 million to 10,000 years ago. A paleo diet typically includes lean " +
            "meats, fish, fruits, vegetables, nuts and seeds — foods that in the past could be obtained by hunting and gathering. " + 
            "A paleo diet limits foods that became common when farming emerged about 10,000 years ago. These foods include dairy products, " +
            "legumes and grains. Other names for a paleo diet include Paleolithic diet, Stone Age diet, hunter-gatherer diet and caveman diet.");
            });

            // displays Keto information above
            $("#Keto").click(function(){
                $("#info").text("The ketogenic diet is a very low-carb, high-fat diet that shares many similarities with the Atkins and low-carb diets. " +
                                "It involves drastically reducing carbohydrate intake and replacing it with fat. This reduction in carbs puts your body into a metabolic state called ketosis.");
            });

            // displays Atkins information above
            $("#Atkins").click(function(){
                $("#info").text("The atkins diet limits carbohydrates (sugar), so the body burns fat, including body fat, for " + 
                "fuel. This approach leaves the body steadily fueled, and weight is lost, even when more calories are being consumed. " +
                "Steady fueling also means more constant energy levels all day long, and less hunger and cravings! You can actually lose " +
                "weight while feeling full! The science behind the Atkins principles has been proven by over 80 clinical studies!");
            });

            // displays Dukan information above
            $("#Dukan").click(function(){
                $("#info").text("The Dukan Diet is a low-carbohydrate protein-based fad diet devised by Pierre Dukan. Dukan has been promoting " +
                "his diet for over 30 years; it gained a wider audience after the 2000 publication of his book, The Dukan Diet, which has sold " +
                "more than 7 million copies globally. The book has since been translated into 14 languages and published in 32 countries. " +
                "The book was released in the United Kingdom in May 2010, and in the United States in April 2011.");
            });

            // displays Zone diet information above
            $("#Zone").click(function(){
                $("#info").text("The Zone diet is a fad diet emphasizing low-carbohydrate consumption. It was created by Barry Sears, a biochemist." +
                " The ideas behind the diet are not supported by scientific evidence." +
                " The diet is meant to promote weight loss via reduction in calories consumed and avoid spikes in insulin release, thus supporting the " +
                "maintenance of insulin sensitivity.");
            });
        });
    </script>
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm" style="background-color: white;"><p>Common diets to lose weight might include:</p> 
            <ul><li>Paleo Diet-><button id="Paleo">Find out more!</button></li> 
            <li>Keto Diet-><button id="Keto">Find out more!</button></li> 
            <li>Atkins Diet-><button id="Atkins">Find out more!</button></li> 
            <li>Dukan Diet-><button id="Dukan">Find out more!</button></li> 
            <li>Zone Diet-><button id="Zone">Find out more!</button></li></ul></div>
        <div class="col-sm" style="background-color: white;"><p>There is no set of diets designed to gain weight, rather, here is a list of foods people
            often indulge in to gain weight--in a more healthy way:</p> <ul><li>Milk and Protein Shakes</li>
            <li>Rice and Oatmeal</li><li>Red Meat</li><li>Nuts and other healthy fats</li><li>Pasta and other starches</li></ul>
        </div>
        <div class="col-sm"></div>
    </div>
    <br>
    <!--Footer via php function-->
    <?php
        footer();
    ?>
</body>
</html>
