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
</head>

<body>

    <div class="wrapper">
        <header class="header">
        <?php include './include/navbar.php' ?>
        </header>

        <main>
            <div class="container">
                <form id="form" action="/">
                    <h1>Log in</h1>
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
                    <button type="submit">Log in</button>
                </form>
                <a href="./register.php" class="signup">Registere</a>
        </main>


        <footer class="footer">
        <?php include './include/footer.php' ?>
        </footer>
    </div>

    <script src="./JavaScript/login.js"></script>
</body>

</html>