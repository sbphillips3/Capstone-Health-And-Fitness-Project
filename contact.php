<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Contact</title>
</head>
<body>
    <!--Bootstrap Scripts-->
    <?php 
        include_once 'function.php';
        include_once 'blog_function.php';
        scriptLinker();    
    ?>
    <!--Refresh Script-->
    <?php refreshScript(); ?>
    <header class="shadow p-3 mb-5 bg-white rounded">
        <h1>Contact Information</h1>
        <h3>Sean Phillips</h3>
    </header>
    <a name="top"></a>
    <div class="row">
        <div class="col-sm-2">
            <!--Nav Menu-->
            <?php navMenu(); ?>
        </div>
        <div class="col-sm-8">
            <table>
                <tr>
                    <td style="text-align: right;">
                        <h5>Name:&nbsp;</h5>
                    </td>
                    <td>
                        <h5>Sean Phillips</h5>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        <h5>Email:&nbsp;</h5>
                    </td>
                    <td>
                        <h5>sbphillips3@mail.fhsu.edu</h5>
                    </td>
                </tr>
            </table>
            <div class="card w-100" style="width: 18rem;">
                <div class="text-center">
                    <img src="images/sean.jpg" class="rounded" alt="Picture of website owner">
                  </div>
                <div class="card-body">
                    <p class="card-text">Feel free to drop me an email any time!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br>   
    <?php
        // footer via php function
        footer();
    ?>
</body>
</html>