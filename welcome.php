<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Car sales</title>
    <!--Link To Css-->
    <link rel="stylesheet" href="main.css">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--Navbar-->
    <header>
        <!--Nav Container-->
        <div class="nav container">
            <!--Menu Icon-->
      
            <i class='bx bx-menu' id="menu-icon"></i>
            <!--Logo-->
            <a href="#" class="logo">Car<span>Sales</span></a>
            <!--Navbar List-->
            <ul class="navbar">
             
                <li> <a href="#home" class="active">Home</a></li>
                <li> <a href="#cars">Cars</a></li>
                <li> <a href="#about">About</a></li>
                <li> <a href="#parts">Parts</a></li>
                <li> <a href="#blog">Our Blog</a></li>
                
            </ul>
            <!-- Left Menu (initially hidden) -->
   
            <!--search Icon-->
            <i class='bx bx-search' id="search-icon"></i>
            <!--search Box-->
            <div class="search-box container">
                <input type="search" name="" id="" placeholder="Search here...">
            </div>
        </div>
    </header>
    <!--Home section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>We have Everthing <br> your <span>car</span> Need</h1>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Laudantium id beatae culpa voluptate.</p>
            <!--home Button-->
            <a href="#" class="btn">Discover Now</a>
        </div>

    </section>
    <!--cars section-->
    <section class="cars" id="cars">
        <div class="heading">
            <span>All Cars</span>
            <h2>We have all types cars</h2>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Laudantium id beatae culpa voluptate.</p>
        </div>
        <!--Cars container-->
        <div class="cars-container container">
            <!--Box 1-->
            <div class="box">
                <img src="/images/car1.jpg" alt="">
                <h2>Porche car</h2>
            </div>
            <!--Box 2-->
            <div class="box">
                <img src="/images/car2.jpg" alt="">
                <h2>Porche car</h2>
            </div>

               <!--Box 7-->
        <div class="box">
            <img src="/images/car5.jpg" alt="">
            <h2>Porche car</h2>
        </div>

            <!--Box 3-->
            <div class="box">
                <img src="/images/car3.jpg" alt="">
                <h2>Porche car</h2>
            </div>

            <!--Box 4-->
            <div class="box">
                <img src="/images/car4.jpg" alt="">
                <h2>Porche car</h2>
            </div>

            <!--Box 5-->
            <div class="box">
                <img src="/images/car7.jpeg" alt="">
                <h2>Porche car</h2>
            </div>

            <!--Box 6-->
            <div class="box">
                <img src="/images/car6.jpg" alt="">
                <h2>Porche car</h2>
            </div>

            <!--Box 7-->
            <div class="box">
                <img src="/images/car5.jpg" alt="">
                <h2>Porche car</h2>
            </div>

            <!--Box 8-->
            <div class="box">
                <img src="/images/car8.jpg" alt="">
                <h2>Porche car</h2>
            </div>
        </div>

    </section>

    <!--About-->
    <section>
        <section class="about container" id="about">
            <div class="about-img">
                <img src="/images/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <h2>Cheap Prices With <br> Quality Cars</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate, dolores sit dolorem quisquam maiores.</p>
                <!--About Button-->
                <a href="#" class="btn">Learn More</a>
            </div>
        </section>
    </section>
    <!--parts section-->
    
    <!--Blog Container-->
    <section class="blog" id="blog">
        <div class="heading">
            <span>Blog & News</span>
            <h2>Our Blog Content</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate, dolores sit dolorem quisquam maiores.</p>
        </div>
        <!--Blog Container-->
        <div class="blog-container container">
            <!--Box 1-->
            <div class="box">
                <img src="/images/car1.jpg" alt="">
                <span>August 21 2022</span>
                <h3>How To Get Perfect Car At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>

             <!--Box 2-->
             <div class="box">
                <img src="/images/car8.jpg" alt="">
                <span>August 21 2022</span>
                <h3>How To Get Perfect Car At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>

             <!--Box 3-->
             <div class="box">
                <img src="/images/car3.jpg" alt="">
                <span>August 21 2022</span>
                <h3>How To Get Perfect Car At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>
        </div>
    </section>
    <!--footer-->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Car<span>Sales</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="#">Home</a>
                <a href="#">Cars</a>
                <a href="#">Parts</a>
                <a href="#">Sales</a>
            </div>

            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#">Privacy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cookies Policy</a>
            </div>

            <div class="footer-box">
                <h3>Contact</h3>
               <p>United States</p>
               <p>Canada</p>
               <p> Jaban</p>
               <p>Germany</p>
            </div>
        </div>
    </section>

    <!--Copyright-->
    <div class="copyright">
        <p>&#169; Mohamed Zaadik All Right Reserved</p>
    </div>

    <!--Link To JS-->
    <script src="main.js"></script>
    
</body>
</html>