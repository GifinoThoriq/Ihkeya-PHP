<?php
    if (isset($_POST["getin"])) {
        header("location: login.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style/style-index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>IHKEYA</title>
</head>
<body>

    <!-- bagian navbar -->
    <header>
        <nav>
            <div class = "logo">
            <img src="img/ihkeya.jpeg" alt="">
            </div>

            <ul>
                <li><a href="#ABOUTUS">About Us</a></li>
                <li><a href="#BESTPROD">Best Products</a></li>
                <li><a href="#CONTACTUS">Contact Us</a></li>
            </ul>

            <div class="menu-toggle">
                <input type= "checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </nav>
    </header>
    <!-- bagian navbar -->

    <!-- bagian banner -->
    <div class="banner-image">
        <div class="container ">
            <h1>IHKEYA</h1>
            <span>WE GIVE YOU COMFORTABLE, LUXURY, AND TRUST</span>
            <form action="" method="post">
            <button type="submit" name="getin">GET STARTED</button>
            </form>
        </div>
    </div>
    <!-- bagian banner -->

    <!-- bagian what can we give -->
    <div class="whatcanweGive">
        <div class="judul">
            <h1>WHAT CAN WE GIVE</h1>
        </div>
        <hr>
    </div>

    <div class="kotakParent">
        <div class = "kotakChild kotakIsi">
            <img src="img/armchair.png" alt="handshake-icon" class="image1"/>
            <h2>COMFORTABLE</h2>
            <p>Ihkeya can give you comfort.
                It’s comfort first,
                comfort last, and
                comfort always.</p>
        </div>
        <div class = "kotakChild kotakIsi">
            <img src="img/home.png" alt="home-icon" class="image2"/>
            <h2>LUXURY</h2>
            <p>Luxury in every detail of
                our interior. 
                Luxury never goes 
                out of fashion.</p>
        </div>
        <div class = "kotakChild kotakIsi">
            <img src="img/handshake.png" alt="orangsantuy-icon" class="image3"/>
            <h2>TRUST</h2>
            <p>Trust takes years to build,
                seconds to break and
                forever to repair.
                Ihkeya never break trust
                of our customers.</p>
        </div>
    </div>

    <!-- bagian about us -->
    <div class= "parentAboutUs">
        <div class="childAboutUs1 childIsi1">
            <img src="img/orang-ngobrol.jpg" alt="orang-ngobrol"/>
        </div>
        <div class="childAboutUs2 childIsi2">
            <h1 id="ABOUTUS">ABOUT US</h1>
            <hr>
            <p>
                Your home should tell the story of who you are, and be a collection
                of what you love. Ihkeya is making the best interior for your home, 
                luxury in each detail, and comfort in every places. 
            </p>
            <p>
                We are what your dream house,what you decide to decorate your house with, 
                and what you choose for that special occasion.
            </p>
            <p>
                Our product is now designed, manufactured, transported and in stores. Ihkeya needs people 
                to take care of managing it so that everything goes smoothly, in all the interior areas.
            </p>
            <p>
                Ihkeya's key are to satisfy our customer, because ihkeya is nothing but an expression 
                of the consumers' loyalty and trust.
            </p>
        </div>
    </div>


    <!-- bagian projects -->
    <div class="judulProjects">
        <h1 id="BESTPROD">OUR BEST PRODUCTS</h1>
        <hr>
    </div>

    <!-- projects carousel -->
    <div class="containerCarousel">
        <div class="carouselItem fade">
            <img src="img/dapur.png" alt="dapur">
            <div class="textbox">
                <h3>KITCHENTTE</h3>
                <hr>
                <p>This kitchen is seasoned with LOVE.</p>
            </div>
        </div>

        <div class="carouselItem fade">
            <img src="img/ruangkeluarga.jpg" alt="ruangkeluarga">
            <div class="textbox">
                <h3>FAMILLIET</h3>
                <hr>
                <p>The living room should be a place where we feel totally at ease.</p>
            </div>
        </div>

        <div class="carouselItem fade">
            <img src="img/kamartidur.jpg" alt="kamartidur">
            <div class="textbox">
                <h3>BEDDREID</h3>
                <hr>
                <p>A comfortable bedroom brings a happy sleep.</p>
            </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    
    <!-- title contact us -->
    <div class="judulForm">
        <div class="judulItem">
            <h1 id="CONTACTUS">Get in Touch</h1>
            <hr>
        </div>
    </div>

    <!-- contact us -->
    <div class="form-isi">
        <form action="">
            <input type="text" class="textField" name="name" placeholder="Name"/>
            <input type="text" class="textField" name="email" placeholder="Email">
            <textarea name="message" placeholder="Enter your message" rows="4" cols="10"></textarea>
            <button type="button" class="form-btn">SUBMIT</button>
        </form>
    </div>



    <!-- <div class="formPertama">
        <input type="text" class="textField" name="name" placeholder="Name"/>
        <input type="text" class="textField" name="email" placeholder="Email">
    </div>

    <div class="formKedua">
        <textarea name="message" placeholder="Enter your message" rows="4" cols="10"></textarea>
        <button type="button">SUBMIT</button>
    </div>
     -->
    <!-- bagian footer -->
    <footer>
        <p>&copy; Created by Gifino Thoriq & Diva Anasabila</p>
    </footer>

    <script type = "text/javascript" src="script/script-index.js"></script>
</body>
</html>