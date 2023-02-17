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
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-4 bg-white m-auto rounded   wrapper">
        <h2 class="text-center pt-3">Signup Now</h2>
        <p class="text-center text-muted lead mb-3">Its free and takes a minute</p>
        <!-- Form start -->
        <form action="#">
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i>   Eg - "Doremon"</span>
            <input type="text" class="form-control" placeholder="First Name"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i>   Eg - "Sharma"</span>
            <input type="text" class="form-control" placeholder="Last Name"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-envelope"></i>   Eg - "assignment.bhej@dunga.com"</span>
            <input type="email" class="form-control" placeholder="Email"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i>    Eg - "Cost20rs"</span>
            <input type="password" class="form-control" placeholder="password"/>
          </div>
          <div class="input-groupc mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i>     Eg - "Cost20rs"</span>
            <input type="password" class="form-control" placeholder="Confirmed password"/>
          </div>
          <div class="d-grid mt-2">
            <button type="button" class="btn btn-success">Signup Now</button>
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