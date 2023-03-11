
<?php
 

 if(isset($_POST['submit'])){
    require_once 'config.php';
    if(empty($_POST['email']) || empty($_POST['password'])){
        $error[] = 'Please fill all fields!';}
    else{$email=$_POST['email']; 
    $password=$_POST['password'];
    $select ="SELECT * FROM register WHERE email = '$email' and password='$password' ";
    $result=mysqli_query($conn,$select);
        if($result){
            $num=mysqli_num_rows($result);//tells the number of rows present inside my database
            if($num>0){
                session_start();
                $_SESSION['email']=$email;
                header('location:home.php');
                
                $row = mysqli_fetch_array($result);
                 
      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:./dashboard/dashboard.php');
            } 
 
         else{
            $error[] = 'incorrect email or password!';
         }
    }else{
        $error[]="user doesn't  exist!";
    }
}
 }
}
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        .register{
            text-align: center;
        }
        .registerbtn{
            color: #d89538;
            list-style: none;
}
.error-msg{
    margin:10px 0px;
    display:block;
    background:crimson;
    color: #fff;
    border-radius:5px;
    font-size:20px;
    padding:5px;
}
    </style>
</head>

<body>

    <div class="wrapper">
       
        <?php include './include/navbar.php' ?>
     
        <main>
            <div class="container">
                <form action="login.php" id="form" method='POST'>
                    <h1>Log in</h1>
                    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                    <div class="input-control">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password">
                        <div class="error"></div>
                    </div>
                    <button type="submit" name="submit">Login</button>
                </form>
               <p class="register" > Don't have an account? <a href="./register.php" class="registerbtn">Registere</a> </p>
        </main>


        
        <?php include './include/footer.php' ?>
       
    </div>

    <!-- <script src="./JavaScript/login.js"></script> -->
</body>

</html>