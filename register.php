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
</head>

<body>

    <div class="wrapper">
        <header class="header">
        <?php include './include/navbar.php' ?>
        </header>

        <main>
            <div class="container">
                <form id="form" action="/">
                    <h1>Registration</h1>
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
                    <button type="submit">Sign Up</button>
                </form>
            </div>
        </main>


        <footer class="footer">
        <?php include './include/footer.php' ?>

        </footer>
    </div>

    <script src="./JavaScript/signup.js"></script>
</body>

</html>