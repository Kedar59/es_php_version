<?php
    include("header.php");
    include("mail.php");

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Name = $_POST["name"];
        $Email = $_POST['email'];
        $ProblemName = $_POST['ProblemName'];
        $Link = $_POST['Link'];

        $body = "Name : $Name"."<br><br>".
                "Email : $Email"."<br><br>".
                "Problem Name : $ProblemName"."<br><br>".
                "Link : $Link";

        SendMail("Request Problem",$body);

    }
   
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions</title>
   
    <link rel="stylesheet" href="styles/req_prob.css">
    
  </head>
  <body>
    <section class="container">
      <h1 id="title">Request Problem Form</h1>
      <form method="post" class="form" action="request_problem.php">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" required style="color:black" />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address for contact" required name="email" style="color:black" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Problem Name</label>
            <input type="text" placeholder="Enter problem name" required name="ProblemName" style="color:black"/>
          </div>
          <div class="input-box">
            <label>Problem Link</label>
            <input type="text" placeholder="Enter problem link" required name="Link" style="color:black"/>
          </div>
        </div>
        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>