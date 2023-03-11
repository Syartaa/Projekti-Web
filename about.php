<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="./CSS/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- responsive -->
    <style>
        @media (max-width: 900px) {
  
  .heading-2{
    top: 170%;
    left: 10%;
   
  }
  .paragraf-5{
    top: 185%;
    left: 10%;
  }
  .paragraf-4{
    top: 225%;
    left: 10%;
  }
  .paragraf-6{
    top: 214%;
    left: 10%;
  }
}
    </style>
    
</head>

<body>
    <div class="wrapper">
        
        <?php include './include/navbar.php' ?>
        
        <main>
            <div class="center">
                <h2 class="heading">About us</h2>
                <p class="paragraf-2">Using the power of nature to produce <br> the most maximum results</p>
            </div>

            <div class="slider">
                <div class="myslide ">
                    <img src="./IMG/14.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide ">
                    <img src="./IMG/16.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide ">
                    <img src="./IMG/12.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide ">
                    <img src="./IMG/11.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide ">
                    <img src="./IMG/13.jpg" style="width: 100%; height: 100%;">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="dotsbox" style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>
                <section class="section-1">
                    <article class="article-1">
                        <p class="paragraf-3">
                            The story behind Radiance & Skincare, founded by Dr. Teresa Allissa Citro. <br>
                            Dr. Citro is passionate about helping others who have gone through psychological, spiritual,
                            and
                            physical traumas. <br>
                            Her desire is to see lives restored, living a life of hope, faith, and joy. <br>
                            When you purchase our products, you are helping individuals who have been scarred by sexual
                            abuse, helping children who are malnourished, and providing free education to children in
                            need.
                            <br>
                            Join us as we change the world through our actions and our love. <br>
                            All proceeds go 100% to bringing hope to the hopeless through Thread of Hope, Inc.
                        </p>
                    </article>
                    <article class="article-2">
                        <img src="./IMG/18.jpg" class="img17">
                        <h2 class="heading-2">What's so unique about <br>
                            Radiance Cosmetics and Skincare?</h2>
                        <p class="paragraf paragraf-4">
                            As the Founder and Chief Executive Officer of Rediance Cosmetics and Skincare, I am excited
                            to
                            bring people around the world the best products that are proven to heal, rejuvenate, and
                            improve
                            younger-looking skin.
                            For women - the importance of your skincare is the prelude to perfect-looking makeup.
                            Without
                            proper skincare, you cannot achieve your ultimate application of cosmetics to bring out your
                            natural beauty.
                            For men - the importance of your skincare is vital to keeping your skin healthy, clean, and
                            youthful.
                        </p>
                        <p class="paragraf paragraf-5">
                            Many of our products are Gluten Free, Paraben Free, Vegan, and E.U. Registered. They are
                            made
                            with only the highest quality ingredients and under the highest standards. Our products are
                            also
                            cruelty free - we never test on animals. They are enriched and infused with crucial vitamins
                            and
                            minerals such as Vitamin A, C, and E.
                            The importances of these vitamins are to exfoliate, hydrate, brighten, and heal.
                        </p>
                        <p class="paragraf paragraf-6">
                            Radiane Cosmetics & Skincare believes that using these products will deliver you the results
                            that you have been searching for.
                        </p>


                    </article>
                </section>
        </main>
      
        <?php include './include/footer.php' ?>
      

        <script src="./JavaScript/slider.js"></script>
</body>