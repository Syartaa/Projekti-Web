
<?php


 require_once 'config.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email']; 
    $number=$_POST['number'];
    $birthday=$_POST['data'];
    $password=$_POST['password'];
    $confirm_password=$_POST['password2'];
    $user_type=$_POST['user_type'];
   $select ="SELECT * FROM register WHERE email = '$email' && password='$password'";
   $result=mysqli_query($conn,$select);
   if(mysqli_num_rows($result) > 0){
    $error[]='user already exist!';

   }else{
    if($password != $confirm_password){
        $error[]='The passwords doesnt match!';
    }
    else if(empty($name)){
        $error[]='Name field is required!'; 
    }
    else if(empty($username)){
        $error[]='username field is required!'; 
    }
    else if(empty($email)){
        $error[]='email field is required!'; 
    }
    else if(empty($password)){
        $error[]='password field is required!'; 
    }
    else if(strlen($password)<8){
        $error[]='Password must be at least 8 character.'; 
    }
    else{
        $insert ="INSERT INTO register(name,username,email,number,birthday,password,confirm_password,user_type)
        VALUES ('$name','$username','$email','$number','$birthday','$password','$confirm_password','$user_type')";
        mysqli_query($conn,$insert);
        
        header('location:login.php');
    }
   }
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        .login{
            padding:15px;
            font-size:15px;
            color:orange;
            text-align: center;
        }.loginbtn{
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
    padding:10px;
}
    </style>
</head>

<body>

    <div class="wrapper">
        
        <?php include './include/navbar.php' ?>

        
        <main>
            <div class="container">
                <form id="form" method="POST">

                    <h1>Registration</h1>
                    <?php if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }  ?>
                    <div class="input-control">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" placeholder="Name">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="Username">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" placeholder="Email">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="number">Telephone number</label>
                        <input id="number" name="number" type="tel" placeholder="Telephone number">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="data">Birthday</label>
                        <input id="data" name="data" type="date">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="password">Password</label>
                        <input id="password"name="password" type="password" placeholder="Password">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="password2">Password again</label>
                        <input id="password2"name="password2" type="password" placeholder="Password">
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <select name="user_type" class="user_type">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
                    <p class="login" > You have an account? <a href="./login.php" class="loginbtn">Login</a> </p>
                </form>
            </div>
        </main>


       
        <?php include './include/footer.php' ?>
    </div>

    <!-- <script src="./JavaScript/signup.js"></script> -->
</body>

</html>