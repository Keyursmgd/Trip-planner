<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header Section -->
    <section class="header">
        <a href="home.php" class="logo">Paryatan.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <a href="book_form.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa"></div>
    </section>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="back_img" style="background:url(images/img-11.jpg) no-repeat">
                    <div class="text">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <div class="load-more"><a href="package.php" class="btn">Discover tour</a></div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="back_img" style="background:url(images/img-10.jpg) no-repeat">
                    <div class="text">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <div class="load-more"><a href="package.php" class="btn">Discover tour</a></div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="back_img" style="background:url(images/img-12.jpg) no-repeat">
                    <div class="text">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <div class="load-more"><a href="package.php" class="btn">Discover tour</a></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->

    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">

            <div class="box">
                <img src="images/hiking.png" alt="">
                <h3>adventures</h3>
            </div>

            <div class="box">
                <img src="images/location.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/hiking (1).png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/tent_908012.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/car_4512331.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/tent_908012.png" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>

    <!-- services section ends -->

    <!-- home about section starts  -->

    <section class="home-about">
        <div class="image/about-img-jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <br>
            <h2>Welcome to Trip Planner – Your Smart Travel Companion!</h2>
            <p> At Trip Planner, we believe that planning a trip should be just as exciting as the journey itself. Whether you're heading out for a weekend getaway, a cross-country road trip, or an international adventure, our goal is to simplify your travel planning experience from start to finish.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>


    <!-- home about section ends  -->

    <!-- home package section starts  -->

    <section class="home-packages">
        <h1 class="headings">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image"><img src="images/img-1.jpg" alt="Adventure Trekking"></div>
                <div class="content">
                    <h3>Taj Mahal One Day Tour</h3>
                    <p>Explore mountains, rivers, and remote trails with expert guides.</p>
                    <ul>
                        <li>Free Cancellation</li>
                        <li>One day trip</li>
                        <li>By Car</li>
                    </ul>
                    <p class="price">₹3,761</p>
                    <div class="book_btn"><a href="book_form.php">book now</a></div>
                </div>
            </div>

            <div class="box">
                <div class="image"><img src="images/img-2.jpg" alt="Romantic Paris"></div>
                <div class="content">
                    <h3>Best of Rajstan</h3>
                    <p>2N Jaipur | 1N Jodhpur | 1N Jaislmer</p>
                    <p>with expert guide</p>
                    <ul>

                        <li>4-star hotel</li>
                        <li>Daily breakfast</li>
                    </ul>
                    <p class="price">₹23,999</p>

                    <div class="book_btn"><a href="book_form.php">book now</a></div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="images/img-3.jpg" alt="Dubai Shopping Festival"></div>
                <div class="content">
                    <h3>Dubai Shopping Festival</h3>
                    <p>Shop, dine, and explore in the city of luxury with guided tours.</p>
                    <ul>
                        <li>5D/4N package</li>
                        <li>Desert safari & city tour</li>
                        <li>Hotel + flights</li>
                    </ul>
                    <p class="price">₹45,999</p>
                    <div class="book_btn"><a href="book_form.php">book now</a></div>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <!-- home package section ends  -->

    <!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Limited Time Offer</p>
            <a href="book_form.php" class="btn">book now</a>
        </div>

    </section>

    <!-- home offer section ends -->

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="footer_box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>packages</a>
                <a href="book_form.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="footer_box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="footer_box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>mumbai, india - 400104</a>
            </div>

            <div class="footer_box">
                <h3>follow use</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>

        <div class="credit">created by<span> wad grp</span> | all rights reserved</div>
    </section>
    <!-- footer section ends -->

    <!-- Swiper JS link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>