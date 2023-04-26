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
                    <li><a href="admin_solns.php">Solutions</a></li>
                    <li><a href="admin_udash.php">User Dashboard</a></li>
                    <li><a href="admin_qdash.php">Questions Dashboard</a></li>
                </ul>
            </nav>
            <?php
                // if($loggedin){
                //     echo"<h3>$uname</h3> <a class='cta' href='logout.php'> Logout </a>";
                // }
                // else if($loggedin_admin)
                // {
                //     echo"<h3>$admin_name</h3> <a class='cta' href='logout.php'> Logout </a>";
                // }
                // else{
                //     echo'<a class="cta" href="login_and_register.php">Register</a>
                //     <a class="cta" href="login.php">Login</a>';
                // }
                echo"<a class='cta' href='index.php'> User Interface </a>";
            ?>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <li><a href="admin_solns.php">Solutions</a></li>
                <li><a href="admin_udash.php">User Dashboard</a></li>
                <li><a href="admin_qdash.php">Questions Dashboard</a></li>
                <?php
                // if($loggedin){
                //     echo"<h3>$uname</h3> <a class='cta' href='logout.php'> Logout </a>";
                // }
                // else if($loggedin_admin)
                // {
                //     echo"<h3>$admin_name</h3> <a class='cta' href='logout.php'> Logout </a>";
                // }
                // else{
                //     echo'<a class="cta" href="login_and_register.php">Register</a>   
                //     <a class="cta" href="login.php">Login</a>';
                // }
                echo"<a class='cta' href='index.php'> User Interface </a>";
                ?>
            </div>
        </div>
        <script type="text/javascript" src="javascript/mobile.js"></script>
    </body>
</html>