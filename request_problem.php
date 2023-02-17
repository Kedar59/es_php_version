<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions</title>
    <?php
    include("header.php");
    ?>
    <link rel="stylesheet" href="styles/req_prob.css">
    
  </head>
  <body>
    <section class="container">
      <h1 id="title">Request Problem Form</h1>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address for contact" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Problem Name</label>
            <input type="text" placeholder="Enter problem name" required />
          </div>
          <div class="input-box">
            <label>Problem Link</label>
            <input type="text" placeholder="Enter problem link" required />
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>