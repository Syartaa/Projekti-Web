<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
.header{
    display: flex;
justify-content: space-around;
    align-items: center;
    flex-direction: row;
    width: 100%;
    background-color: rgb(248, 236, 222,0.8);
    padding: 10px;
   position: sticky;
   top: 0;
   grid-area: h;
}
.nav-items{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.nav-item{
    list-style: none;
    padding-left: 45px;
}
.nav-item a{
    text-decoration: none;
    color: rgb(234, 195, 144);
}
.nav-item a:hover{
    color: rgb(233, 176, 102);
}
.tittle{
font-size: 30px;
color: rgb(246, 205, 152);
font-family: 'Moon Dance', cursive;
} 
.login{
    text-decoration: none;
    color: rgb(234, 195, 144);
}
.login:hover{
    color: rgb(233, 176, 102);
}

.search-bar{
    width: 100%;
    max-width: 250px;
    background-color: rgba(238, 196, 147, 0.2);
    display: flex;
    align-items: center;
    border-radius: 60px;
    padding: 10px 20px;
}
.search-bar input{
    background-color: transparent;
    flex:1;
    border:0;
    outline: none;
    padding: 2px;
    color: rgb(248, 202, 141);
}
::placeholder{
    color: rgb(245, 198, 150);
}
.search-bar button img{
    width: 25px;
}
.search-bar button{
    border: 0;
    border-radius: 50%;
    width: 30px;
    height: 25px;
    background-color: antiquewhite;
    cursor: pointer;
}

    </style>

</head>
<body>
    <header class="header">
<h1 class="tittle">Radiance</h1>

        <nav class="nav-bar">
            <ul class="nav-items">
                <li class="nav-item"><a href="./home.php">Home</a></li>
                <li class="nav-item"><a href="./about.php">About</a></li>
                <li class="nav-item"><a href="./products.php">Products</a></li>
                <li class="nav-item"><a href="./blog.php">Blog</a></li>
            </ul>
        </nav>
        <div class="search">
            <form action="" class="search-bar">
                <input type="text" placeholder="search" name="q">
                <button type="submit"><img src="./IMG/search.png"></button>
            </form>
        </div>
        <a href="./login.php" class="login">Log in</a>
        </header>
</body>
</html>