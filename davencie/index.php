<?php 
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Da Vencie Website</title>
    <link rel="stylesheet" type="text/css" href="./css/davencie1.css">

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <a href="#" class="logo">Foods</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>


    <section class="home" id="home">
        <div class="home-text">
            <h1>Full Website</h1>
            <h2>Food The <br> Most Precious Things</h2>
            <a href="#" class="btn">Today's Menu</a>
        </div>

        <div class="home-img">
            <img src="home.png">
        </div>
    </section>


    <section class="about" id="about">
        <div class="about-img">
            <img src="about.png">
        </div>

        <div class="about-text">
            <span>About Us</span>
            <h2>We speak the good <br> food language</h2>
            <p>There are many variations passages of Lorem Ipsum available, but the
                majority have suffered alteration if form, by injected humor
                randomised words which don't look even slightly believable.</p>
                <a href="#" class="btn">Learn More</a>
        </div>
    </section>


    <section class="menu" id="menu">
        <div class="heading">
            <span>Food menu</span>
            <h2>Fresh taste and great price</h2>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="food1.png"> 
                </div>
                <h2>Chicken Burger</h2>
                <h3>Tasty Food</h3>
                <span>$11.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="food2.png"> 
                </div>
                <h2>Special Beef Burger</h2>
                <h3>Tasty Food</h3>
                <span>$25.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="food3.png"> 
                </div>
                <h2>Chicken Fry Pack</h2>
                <h3>Tasty Food</h3>
                <span>$50.00</span>
                <i class='bx bx-cart-alt'></i>
            </div>

        </div>
    </section>

    <!------------service start------------->
    <section class="services" id="services">
        <div class="heading">
            <span>Services</span>
            <h2>We provide best quality food</h2>
        </div>

        <div class="service-container">
            <div class="s-box">
                <img src="s1.png">
                <h3>Order</h3>
                <p>There are many variations of passages of Lorem Ipsum available but
                     majority have suffered alteration injected humour</p>
            </div>

            <div class="s-box">
                <img src="s2.png">
                <h3>Shipping</h3>
                <p>There are many variations of passages of Lorem Ipsum available but
                     majority have suffered alteration injected humour</p>
            </div>

            <div class="s-box">
                <img src="s3.png">
                <h3>Delivered</h3>
                <p>There are many variations of passages of Lorem Ipsum available but
                     majority have suffered alteration injected humour</p>
            </div>
        </div>
    </section>

    <!----------call to action------------->
    <section class="cta">
        <h2>We make quality food <br> Everyday</h2>
        <a href="#" class="btn">Let's talk</a>
    </section>

        <!----------footer start--------->
        <section id="contact">
            <div class="footer">
                <div class="main">
                    <div class="col">
                        <h4>Menu Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Our Service</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Contact Us</h4>
                        <div class="social">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-instagram' ></i></a>
                

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-----Javascript-->
        <script type="text/javascript" src="davencie1.js"></script>

</body>
</html>