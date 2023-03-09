<?php
 require_once 'config.php';

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $number=$_POST['number'];
    $message=$_POST['message'];
$sql = "INSERT INTO `contactus`(`name`, `email`, `number`, `message`) VALUES ('$name','$email','$number','$message')";
$result=mysqli_query($conn,$sql);

header("Location:index.php");

 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/contactus.css">
</head>
<body>
<?php include './include/navbar.php' ?>
<main>
    <form action="index.php" method="POST">
                 <div class="input-control">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" placeholder="Name">
                        
                    </div>
                   
                    <div class="input-control">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" placeholder="Email">
                       
                    </div>
                    <div class="input-control">
                        <label for="number">Telephone number</label>
                        <input id="number" name="number" type="tel" placeholder="Telephone number">
                        
                    </div>
                    <div class="input-control">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" name="submit">Sent</button>

                </form>
        
</main>
<?php include './include/footer.php' ?>
</body>
</html>


