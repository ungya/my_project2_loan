<?php
    $insert = false;
   if(isset($_POST['name'])){ 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "us_trip";
    
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connection to the Database";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $desc =$_POST['desc'];

    $sql = "INSERT INTO table VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    
    if($conn->query($sql) === TRUE){
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to travel From</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg1" src="bg1.avif" alt="US Trip">
    <div class="container">
        <h1>welcome to US trip form</h1>
        <p>Enter Your details and submit this form to confirm your participetion in trip </p>
        <?php
        if($insert == true){
        echo "<P class='submitmsg'>Thanks for Submitting your form. we are happy to see your joining for the US trip</P>";
        }
        ?>
        <form action="index.php" method="post">
            
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email Id">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other detail"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>