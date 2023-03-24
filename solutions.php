<!DOCTYPE html>
<html>
<head>
  <?php include("header.php"); ?>
	<title>Display Data using jQuery</title>
	<script src="https://kit.fontawesome.com/f91c2540fb.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/solutions.css">
</head>
<body>
	<table class="content-table">
		<thead>
			<th>Sr.no</th>
			<th>Title</th>
			<th>Category</th>
			<th>Status</th>
			<th>Difficulty</th>
			<th>Langusges</th>
		</thead>
		<tbody>
			<?php
				$timezone=date_default_timezone_set("Indian/Maldives");
				$con=mysqli_connect("sql12.freemysqlhosting.net","sql12601988","7f2VEAbz6F","sql12601988");
				if(mysqli_connect_errno()){
					echo "failed to connect: " . mysqli_connect_errno();
				}
				$res = mysqli_query($con,"SELECT * FROM questions");
				$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
				mysqli_free_result($res);
				mysqli_close($con);
				if($loggedin ){ 
					if($_SESSION['solved']==0) {
						foreach($rows as $row){  ?>
						<tr>
						<td><?php echo $row['ID'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<td><i class="fa-regular fa-square fa-2x"></td>	
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/python.png" alt="python" ></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/java.png" alt="java"></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp"></a>
							</div>
						</td>	
						</tr>
						<?php } } else {
						foreach($rows as $row) {?>
						<tr>
						<td><?php echo $row['ID'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<?php 
						$timezone=date_default_timezone_set("Indian/Maldives");
						$con=mysqli_connect("sql12.freemysqlhosting.net","sql12601988","7f2VEAbz6F","sql12601988");
						if(mysqli_connect_errno()){
							echo "failed to connect: " . mysqli_connect_errno();
						}
						$curr_title = $row['title'];
						$sql = "SELECT COUNT(*) as count FROM questions_auth WHERE email='$loggedin_user_email' AND title='$curr_title'";
						$result = mysqli_query($con, $sql);

						$temp_row = mysqli_fetch_assoc($result);
						$count = $temp_row['count'];
						mysqli_close($con);
						if($count>0) { ?>
							<td><i class="fas fa-check-square fa-2x"></i></td>
						<?php } else { ?>
							<td><i class="fa-regular fa-square fa-2x"></td>	
						<?php } ?>
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/python.png" alt="python" ></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/java.png" alt="java"></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp"></a>
							</div>
						</td>	
						</tr>
						<?php } } ?>

				<?php } else { 
					foreach($rows as $row)
					{ ?>
						<tr>
						<td><?php echo $row['ID'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<td><i class="fa-regular fa-square fa-2x"></td>	
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/python.png" alt="python" ></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/java.png" alt="java"></a>
                				<a href="solutionPage.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp"></a>
							</div>
						</td>	
						</tr>
					<?php } } ?>
		</tbody>
	</table>
	
</body>
</html>
