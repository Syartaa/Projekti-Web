<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: antiquewhite;
   
}  
main{
  margin: 15% 15px;
    background-color: antiquewhite;
    padding: 20px;
    grid-area: m;
}
.back{
    font-size:25px;
}
.back a{
    text-decoration: none;
    color:#a36b1c
}
p ,h1{
    color:orange;
}
    </style>
</head>
<body>
<?php include './include/navbar.php' ?>
<main>
<h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="home.php">homepage</a>.</p>
        </main>
        <?php include './include/footer.php' ?>
</body>
</html>