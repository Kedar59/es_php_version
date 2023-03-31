<?php
    session_start();
    $loggedin=false;
    $loggedin_admin=false;
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true)
    {
        $loggedin=true;
        $loggedin_user_email=$_SESSION['email'];
        $uname=$_SESSION['username'];
    }
    else if(isset($_SESSION['loggedin_admin']) && $_SESSION['loggedin_admin']=true)
    {
        $loggedin_admin=true;
        $loggedin_admin_email=$_SESSION['email'];
        $admin_name=$_SESSION['username']."(admin)";
    }
    else{   
        $loggedin=false;
    }
    
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elite Solutions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="styles/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/header.css">
    </head>
    <body>
        <header>
            <a class="logo" href="index.php"><img src="images/logo.ico" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="solutions.php">Solutions</a></li>
                    <li><a href="request_problem.php">Request Problems</a></li>
                    <li><a href="contact_us.php">Contact us</a></li>
                    <li><a href="submit_solns.php">Submit Solutions</a></li>
                </ul>
            </nav>
            <?php
                if($loggedin){
                    echo"<h3>$uname</h3> <a class='cta' href='logout.php'> Logout </a>";
                }
                else if($loggedin_admin)
                {
                    echo"<h3>$admin_name</h3> <a class='cta' href='logout.php'> Logout </a>";
                }
                else{
                    echo'<a class="cta" href="login_and_register.php">Register</a>
                    <a class="cta" href="login.php">Login</a>
                    <a class="cta" href="admin_login.php">Admin login</a>';
                }
            ?>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="solutions.php">Solutions</a>
                <a href="request_problem.php">Request Problems</a>
                <a href="contact_us.php">Contact us</a>
                <a href="submit_solns.php">Submit Solutions</a>
                <?php
                if($loggedin){
                    echo"<h3>$uname</h3> <a class='cta' href='logout.php'> Logout </a>";
                }
                else if($loggedin_admin)
                {
                    echo"<h3>$admin_name</h3> <a class='cta' href='logout.php'> Logout </a>";
                }
                else{
                    echo'<a class="cta" href="login_and_register.php">Register</a>
                    <a class="cta" href="login.php">Login</a>
                    <a class="cta" href="admin_login.php">Admin login</a>';
                }
                ?>
            </div>
        </div>
        <script type="text/javascript" src="javascript/mobile.js"></script>
    </body>
</html>