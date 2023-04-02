<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
    <link rel="stylesheet" href="styles/contact_us.css">
    
  </head>
  <body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="send.php" method="post">
        <div class="input-box">
          <input type="text" name="Name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="text" name="subject" placeholder="Enter your subject">
        </div>
        <div class="input-box message-box">
          <textarea name="meassage" placeholder="Enter yout message"></textarea>
        </div>
        <div class="button">
          <button type="submit" name="send"> Send </button>
        </div>
      </form>
    </div>
    </div>
  </div>
  </body>
</html>