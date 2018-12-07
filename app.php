<!DOCTYPE html>
<html> 

<head>
    <title>App</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript">
        function createWeightOptions() {
            var options = "<option value='0'>select</option>";
            for (var i = 1; i < 1000; i++) {
                options += "<option value='" + i + "'>" + i + "</option>"
            }

            document.getElementById('weight').innerHTML = options;

        }

        function createHeightOptions() {
            var options = "<option value='0'>select</option>";
            for (var i = 10; i < 100; i++) {
                options += "<option value='" + i + "'>" + i + "</option>"
            }

            document.getElementById('height').innerHTML = options;

        }
    </script>
</head>

<body onload="createWeightOptions() + createHeightOptions()">

    <!--Bootstrap Scripts-->
    <?php 
        include_once 'function.php';
        include_once 'blog_function.php';
        scriptLinker();    
    ?>

    <!--Body Content Below-->

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
                // Nav menu via php function
                navMenu();
            ?>
        </div>
        <div class="col-sm-8">
            <!--App Goes Below-->

            <form action="bmi.php" method="get">
                <p>Calculate your body mass index to find out whether you are in a healthy range.</p>
                <label>Select Your Weight in lbs-----</label>
                <select id="weight" name="weight">
                    <!--Script in the head is used to populate the options-->
                </select>
                <br>
                <label>Select Your Height in Inches--</label>
                <select id="height" name="height">
                    <!--Script in the head is used to populate the options-->
                </select>
                <br>
                <input type="submit" name="submit" value="Calculate Your BMI">
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br>
    
    <!--Footer via php function-->
    <?php
        footer();
    ?>

</body>

</html>