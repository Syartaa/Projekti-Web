<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.footer{
    background-color:rgb(250, 244, 238);
    grid-area: f;
    padding: 70px 0;
}
.container{
    max-width: 1170px;
    margin: auto;
}
.footer ul{
    list-style: none;
}
.row{
    display: flex;
 flex-wrap: wrap;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
    font-family: 'Poppins', sans-serif;
}
.footer-col h4{
    font-size: 18px;
    color: black;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #f1b35c;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul li a{
font-size: 16px;
text-transform: capitalize;
color: #f3bd71;
text-decoration: none;
font-weight: 300;
transform: all 0.3s ease;
}
.footer-col ul li a:hover{
    color: #f1b35c;
    padding-left: 10px;
}

/* responsive */
@media (max-width:900px) {
    .footer-col{
    width: 50%;
   margin-bottom:30px
} 
}

@media (max-width:500px) {
    .footer-col{
    width: 100%;
  
} 
}

    </style>
</head>
<body>
<footer class="footer">
<div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./products.php">Products</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Online shop</h4>
                        <ul>
                            <li><a href="#">Organic skincare pacts</a></li>
                            <li><a href="#">Anti-aging Minerals</a></li>
                            <li><a href="#">Skin Type</a></li>
                            <li><a href="#">Skin Concern</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
                </div>
            </div>
</footer>
</body>
</html>