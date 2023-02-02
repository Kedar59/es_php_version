<?php
?>
<html lang="en">
<!-- My wamp is not working so 
    I am editing in html file plz fix 
    my wamp -->
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
            
    </section>
    <!------------- Cardes section --------------------->
    <section id="features">

    <div class="aspect-ratio-container">
        <div class="aspect-ratio-item pos-left">
            <div class="card">
                <img class="card-image" src="images/bgc2.png"/>
                <h4>Requesting Problems</h4>
                <p>Stuck with a problem that is not on our<br>website? Just send us your problem and our<br>team will provide you with a solution!</p>
                <button class="btn">Request<br>Problem=></button>
            </div>
        </div>
        <!-- This is one card other 3 cards arent working position wise 
             I mean they are all squished into one single place-->

             
        <!-- <div class="aspect-ratio-item pos-right">
            <div class="card">
                <img class="card-image" src="images/bgc2.png"/>
                <h4>User Satisfaction</h4>
                <p>We are constantly on lookout for<br>complains and suggestions. Feel free to<br>reach us!</p>
                <button class="btn">Contact Us =></button>
            </div>
        </div>
        <div class="aspect-ratio-item pos-left">
            <div class="card">
                <img class="card-image" src="images/bgc2.png"/>
                <h4>Post your own solution</h4>
                <p>Think your solution is more optimized<br>than ours? Feel free to send your solution<br>and it may be featured on our website!</p>
                <button class="btn">Post your<br>solution > =></button>
            </div>
        </div>
        <div class="aspect-ratio-item pos-right">
            <div class="card">
                <img class="card-image" src="images/bgc2.png"/>
                <h4>Optimized Solutions</h4>
                <p>With our solutions you will be rest assured<br>that you will be undetrstanding the most<br>optimal approach to the various problems.</p>
                <button class="btn">Solutions =></button>
            </div>
        </div> -->
    </div>
    </section>
</body>
</html>