
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solutionPage</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="styles/solutionPage.css">
</head>
<body>
    <?php
    if(isset($_GET['title'])) {
        $timezone=date_default_timezone_set("Indian/Maldives");
		$con=mysqli_connect("sql12.freemysqlhosting.net","sql12601988","7f2VEAbz6F","sql12601988");
		if(mysqli_connect_errno()){
			echo "failed to connect: " . mysqli_connect_errno();
		}
        $TITLE = urldecode($_GET['title']);
        if($loggedin){
            
			$sql = "SELECT COUNT(*) as count FROM questions_auth WHERE email='$loggedin_user_email' AND title='$TITLE'";
			$result = mysqli_query($con, $sql);
			$temp_row = mysqli_fetch_assoc($result);
			$count = $temp_row['count'];
            
            if($count==0)
            {
                echo 'I am in ';
                $sql = "INSERT INTO questions_auth (email, title) VALUES ('$loggedin_user_email', '$TITLE')";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo 'inserted successfully';
                }
                else{
                    echo 'not inserted ' . mysqli_error($con);
                }
                $sql = "UPDATE user SET solved = solved + 1 WHERE email = '$loggedin_user_email'";
                $result = mysqli_query($con, $sql);

                if($result) {
                // The row was successfully updated
                echo "Row updated successfully";
                $_SESSION['solved']+=1;
                } else {
                // An error occurred while updating the row
                echo "Error updating row: " . mysqli_error($con);
                }
            }
            
        }
        mysqli_close($con);  
    } else{
        header(Location : "solutions.php");
    }
    ?>
    <h1><?php echo $TITLE ?></h1>
</body>
</html>