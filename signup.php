<!DOCTYPE html>
<html>
<head>
    <title>Sign Up!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="js/jquery.validate.js"></script> <!--jquery validation plugin -->
    <title>Home</title>
</head>
<body>
    <!--Bootstrap Scripts-->
    <?php 
        include_once 'function.php';
        scriptLinker();    
    ?>
    <!--Refresh Script-->
    <?php refreshScript(); ?>
    <header class="shadow p-3 mb-5 bg-white rounded">
        <h1>Health And Fitness Blog</h1>
        <h3>By: Sean Phillips</h3>
    </header>
    <a name="top"></a>
    <div class="row">
        <div class="col-sm-2">
            <?php 
            include_once 'blog_function.php';
            // nav menu via php function
            navMenu();
            ?>            
        </div>
        <div class="col-sm-8">
            <!--Form for Subscribing -->
            <form action="signup_verify.php" name="myForm" method="post">
			<label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="email" name="email" required> <br> <label>First Name:</label> <input
				type="text" name="fname" required> <br> <label>Last Name:&nbsp;</label><input
				type="text" name="lname" required> <br> 
			<button id="subscribe" type="submit">Subscribe to the blog!</button>			
		    </form>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
    <br>
    <?php footer(); ?>
</body>
</html>