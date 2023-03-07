<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/products.css">
    <title>Products</title>
</head>
<body>
    <header class="header">
    <?php include './include/navbar.php' ?>
    </header>
    <main>

        <h2 class="heading-2">Up to 50% off+ Extra 10 off sale items with te code WINTE| SHOP NOW</h2>

        <div class="slider">
            <div class="myslide ">
                <div class="txt">
                    <h1>UP TO 50% OFF</h1>
                    <p>Get glowing on your New Year's beauty resolutions up to <br>
                        50% off -plus an extra 10% off clearance with code <br>
                        <strong>WINTER</strong>
                    </p>
                </div>
                <img src="./IMG/55.jpg" style="width: 100%; height: 100%;">
            </div>

            <div class="myslide ">
                <div class="txt">
                    <span>15% Off <br></span>
                    <h1>WINTER ESSENTIALS</h1>
                    <p>New Tear, New Beauty Routine.Get 15% off sitewide on <br>
                        the fastest beauty additions you need with code <strong>WINTER</strong></p>
                </div>
                <img src="./IMG/88.jpg" style="width: 100%; height: 100%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="dotsbox" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>
        </div>
        <section class="products">
            <h2 class="product-category">Sale</h2>
            <button class="prev-btn">&#10094;</button>
            <button class="next-btn">&#10095;</button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/45.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>PETER THOMSAN</h4>
                        <p class="product-description">Petter Thomas Roth Wter Drench <br>
                            Hyraluronic Cloud Cream 50ml</p>
                        <span class="price">$25</span>
                        <span class="actual-price">$55</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/78.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>AROMATHERAPY ASSOCIATES</h4>
                        <p class="product-description">light Relax Bath and <br> Shower Oil
                          50ml</p>
                        <span class="price">$35</span>
                        <span class="actual-price">$65</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/96.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>CHRISTOPHE ROBIN</h4>
                        <p class="product-description">
                            Shade Variation Care Golden Blonde
                        </p>
                        <span class="price">$50</span>
                        <span class="actual-price">$100</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/41.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>FARMACY BEAUTY</h4>
                        <p class="product-description">
                            Wake up Honey Eye Cream
                        </p>
                        <span class="price">$41</span>
                        <span class="actual-price">$83</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/33.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>SKIN CEUTICALS</h4>
                        <p class="product-description">SkinCeutials C E Ferulic <br>
                          Ascorbic Acid Vitamin C Serum 30ml</p>
                        <span class="price">$36</span>
                        <span class="actual-price">$65</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/99.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>BIOEFFECT EGF </h4>
                        <p class="product-description">
                            Eye Serum 6ml
                        </p>
                        <span class="price">$70</span>
                        <span class="actual-price">$150</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/77.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>AUGUSTINUS BADER</h4>
                        <p class="product-description">
                            The leave-in Hair Treatment
                        </p>
                        <span class="price">$69</span>
                        <span class="actual-price">$146</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <span class="dicount">50% off</span>
                        <img src="./IMG/6.jpg" class="product" alt="">
                    </div>
                    <div class="product-info">
                        <h4>Chanel</h4>
                        <p class="product-description">Hydra Beauty</p>
                        <span class="price">$27</span>
                        <span class="actual-price">$57</span>
                        <button class="shop">Shop now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-2">
            <article class="article">
                <img src="./IMG/111.jpg" alt="">
                <h3 class="heading-3">WE LOVE</h3>
                <h4 class="heading-4">AROMATHERAPY ASSOCIATES</h4>
                <p class="paragraf">
                    Perfect for unwinding,this wellness brand uses the power <br>
                    of essentials oils to smoothe the mind, body and skin.
                </p>
                <p class="shopnow">SHOP NOW</p>
            </article>
            <article class="article">
                <img src="./IMG/222.jpg" alt="">
                <h3 class="heading-3">TRENDING NOW</h3>
                <h4 class="heading-4">MILK MAKEUP</h4>
                <p class="paragraf">
                    Cruelty-free beauty and take-everywhere favorites -Milk <br>
                    knows how to put the joy into our getting ready routins.
                </p>
                <p class="shopnow">SHOP NOW</p>
            </article>
            <article class="article">
                <img src="./IMG/333.jpg" alt="">
                <h3 class="heading-3">MOST WANTED</h3>
                <h4 class="heading-4">Olaplex</h4>
                <p class="paragraf">
                    Frizz-controlling, shine-boosting, band-building and hair- <br>
                    repairing - what's not to love about the Olaplex family?
                </p>
                <p class="shopnow">SHOP NOW</p>
            </article>
        </section>
</main>
       <footer class="footer">
       <?php include './include/footer.php' ?>
  

</footer>
<script src="./JavaScript/slider.js"></script>
<script src="./JavaScript/products.js"></script>
</body>
</html>