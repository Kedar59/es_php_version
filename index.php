<?php
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles/home.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- --------------------Navbar------------------ -->
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                <!-- <img src="images/logo_blend.jpg" alt="logo">  -->
                <a href="index.php" >Elite Solutions</a>
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
            </label>
        </div>
        <div class="nav-links">
            <a href="solutions.php" target="_blank">Solutions</a>
            <a href="request_problem.php" target="_blank">Request Problems</a>
            <a href="contact_us.php">Contact us</a>
            <a href="https://codepen.io/jo_Geek/" target="_blank">Login</a>
            <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">Register</a>
        </div>
    </div>
    <section id="title">
        <h1 class="title-text">Your one stop solution <br>
            to <span id="colored">Leetcode problems.</span></h1>

        <p class="title-text">A dedicated platform for getting the most optimized and <br>handpicked solutions for Leetcode problems.</p>
        <!--------------------- Button----------------- -->
        <div class="pos-button">
        <button class="btn" >Create account</button>
        </div>
        
        <!---------------- Info text--------------------- -->
        <h3 class="title-text">Why use Elite Solutions?</h3>
        <h5 class="title-text">There are many websites that provide Leetcode <br>solutions, so what makes Elite Solutions stand out? <br>We will provide you with some salient features that <br>make Elite Solutions stand out!</h5>
        
        <!------------- Cardes section --------------------->
            
            <div class="aspect-ratio-container">
                <div class="aspect-ratio-item">
                    <div class="card">
                        <img class="card-image" src="images/bgc2.png" />
                        <button class="btn">Add to card!</button>
                    </div>
                </div>
            </div>
        
    </section>
</body>
</html>