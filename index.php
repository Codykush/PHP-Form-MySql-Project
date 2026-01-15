<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";
    $con = mysqli_connect($server, $username, $password,$database);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

        
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`,`desc`, `dt`)     VALUES ('$name', '$age', '$gender', '$email', '$phone','$desc', current_timestamp());";
    
  

    if($con->query($sql)==true){
        $insert;
    }
    else{
        echo "ERROR:$sql <br> $con->error";

    }
    $con->close();
      
} 

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveller</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="clg.jpeg" alt="Sharda University">
    <div class="container">
        <h1>Welcome to Sharda University Dubai Trip Form</h1>
        <p>Enter your details and submit this form to confirm your application in the trip</p>
        
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email" >
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other informations here"></textarea>
        <button class="submit">Submit</button>
        
    </form>
    </div>
    <script src="script.js"></script>
</body>
    
</html>

