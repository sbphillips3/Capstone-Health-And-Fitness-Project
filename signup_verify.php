<?php
include_once 'function.php';

$email = $_POST['email'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];

$connString = "mysql:host=localhost;dbname=project_database";
$user = "root";
$pass = "";

try {
   
   $sql = "SELECT * FROM table_users WHERE EMAIL = :EMAIL";
   $checkquery = makingDatabaseConnection($connString, $user, $pass)->prepare($sql);
   $checkquery->bindValue('EMAIL', $email);
   $checkquery->execute();
   
   if ($checkquery->rowCount() > 0) 
   {    
       echo "Sorry, that email is already subscribed! <a href=\"index.php\">Go back to homepage</a>";
       
   } 
   else // if the user has not already signed up, then we enter their email into the database and send a welcome email
   {
       $insert_sql = "INSERT INTO table_users (EMAIL, FIRST_NAME, LAST_NAME) VALUES(:EMAIL, :FIRST_NAME, :LAST_NAME)";
       $query = makingDatabaseConnection($connString, $user, $pass)->prepare($insert_sql);
       $query->bindValue(':EMAIL', $email);
       $query->bindValue(':FIRST_NAME', $firstName);
       $query->bindValue(':LAST_NAME', $lastName);
       $result = $query->execute();

       /* email to welcome the user for signing up */
       $to = "$email";
       $subject = "Welcome to Sean's Health and Fitness blog";
       $txt = "You are now subscribed to Sean's Health and Fitness blog. You are eligible for exclusive promotions and informative" .
       " blog posts/new research!";
       $headers = "From: sbphillips3@mail.fhsu.edu" . "\r\n";

       mail($to,$subject,$txt,$headers);
       
       echo "<a href=\"index.php\">Go back to homepage. You are subscribed!</a>";      
   }
} 
catch (PDOException $e) 
{
   die($e->getMessage());
}

?>
