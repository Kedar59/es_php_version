<?php
$login=false;
$showError=false;
if(isset($_POST["sub"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("trial.php");
  $email = $_POST["u_email"];
  $password = $_POST["password"];
  
  $sql = "SELECT * from user WHERE email='$email'";
  $result = mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);
  $res = mysqli_fetch_array($result);
  
  if($num==1 && (password_verify($password,$res['password'])))
  {
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['email']=$email;
    $_SESSION['solved']=$res['solved'];
    $_SESSION['username']=$res['username'];
    $_SESSION['id']=$res['ID'];
    mysqli_close($con);
    header("location:index.php");
  }
  else{
    $showError="Invalid Credentials";
  }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login or register</title>
    <script src="https://kit.fontawesome.com/f91c2540fb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login_and_register.css">
</head>
<body class="bg-dark">
  <?php
  if($login){
    echo'
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success</strong> You have logged in successfully
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
  if($showError){
    echo'
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong> Failure </strong> '.$showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  ?>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-4 bg-white m-auto rounded wrapper">
        <h2 class="text-center pt-3">Login page</h2>
        <p class="text-center text-muted lead">Its free and takes a minute</p>
        <!-- Form start -->
        <form action="login.php" method="post">
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            <input type="email" name="u_email" class="form-control" placeholder="Email"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="password"/>
          </div>
          <div class="d-grid mt-2">
            <button type="submit" name="sub" class="btn btn-success"> Login </button>
            <p class="text-center mt-3">Don't have a account ? <a href="login_and_register.php">Register</a></p>
          </div>
        </form>
        <!-- Form close -->

      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>