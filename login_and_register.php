<?php
$showAlert=false;
$showError=false;
if(isset($_POST["sub"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("trial.php");
  $username = $_POST["u_name"];
  $email = $_POST["u_email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $sql = "SELECT * from user WHERE email='$email';";
  $res = mysqli_query($con,$sql);
  $exists = mysqli_num_rows($res); 
  if(($password == $cpassword) and ($exists==0) and ($email!="") and ($password!="")){
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (username, email, password)
    VALUES ('$username','$email','$hash');";
    $result = mysqli_query($con,$sql);
    if($result)
    {
      $showAlert=true;
    }
  }
  else if($email=="")
  {
    $showError = " Email is empty";
  }
  else if($password=="")
  {
    $showError = " Password is empty";
  }
  else if($exists>0)
  {
    $showError = " Email already exists try again with another one";
  }
  else{
    $showError = " Passwords don't match re-enter . ";
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
  if($showAlert){
  echo'
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success</strong> You have Registered successfully
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
      <div class="col-lg-4 bg-white m-auto rounded   wrapper">
        <h2 class="text-center pt-3">Signup Now</h2>
        <p class="text-center text-muted lead mb-3">Its free and takes a minute</p>
        <!-- Form start -->
        <form action="login_and_register.php" method="post">
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i>   Eg - "Doremon"</span>
            <input type="text" name="u_name" class="form-control" placeholder="Name"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-envelope"></i>   Eg - "assignment.bhej@dunga.com"</span>
            <input type="email" name="u_email" class="form-control" placeholder="Email"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i>    Eg - "Cost20rs"</span>
            <input type="password" name="password" class="form-control" placeholder="password"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i>     Eg - "Cost20rs"</span>
            <input type="password" name="cpassword" class="form-control" placeholder="Confirmed password"/>
          </div>
          <div class="d-grid mt-2">
            <button type="submit" name="sub" class="btn btn-success">Sign up</button>
            <p class="text-center mt-3">Already have a account ? <a href="login.php">login</a></p>
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