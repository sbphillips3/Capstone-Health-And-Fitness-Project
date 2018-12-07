<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
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
    <!--The body of the page-->
    <?php  //script for constructing the body and simplifying the blog post and nav process
    include_once 'blog_function.php';

    blogPost(true, "images/meat1.jpg", "11-25-2018", "You may associate red meat with a food that is off limits. Eating red meat
    has been discouraged because many cuts are high in cholesterol and saturated fat. Red meat 
    has a place in a healthy diet as long as you choose the right cuts of beef. Eye round roast and steak, round steak, sirloin tip roast
    and 95 percent ground meat all offer healthy options, or choose bison for lean red meat. Adding one or two servings
    of fresh or organic lean red meat to your weekly diet will supply your body with many 
    vital nutrients.");

    blogPost(false, "images/Yoga.jpeg", "10-31-2018", "Yoga is great for stress and mood. It can also boost confidence, while helping
    with flexibility and injury prevention.");

    blogPost(false, "images/weightLifting.jpg", "10-21-2018", "Strength training with weights is not only beneficial
    for building muscle, but it is also great for cardio vascular health. Many people associate
    heavy weight training with large bulky physiques, but this is usually not the case. It takes years of very
    disciplined training and diet to build significant amounts of muscle. Most people that engage in heavey
    weight training will notice that they are losing weight and gaining definition, not becoming large and
    bulky.");
    
    footer();
    ?>  
</body>
</html>