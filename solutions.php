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
				$res = mysqli_query($con,"SELECT * FROM questions1");
				$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
				
				mysqli_free_result($res);
				mysqli_close($con);
				if($loggedin ){ 
					if($_SESSION['solved']==0) {
						foreach($rows as $row){  ?>
						<tr>
						<td><?php echo $row['id'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<td><i class="fa-regular fa-square fa-2x"></td>	
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>&language=python"><img  src="images/python.png" alt="python" ></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/java.png" alt="java"></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp"></a>
							</div>
						</td>	
						</tr>
						<?php } } else {
						$timezone=date_default_timezone_set("Indian/Maldives");
						$con=mysqli_connect("sql12.freemysqlhosting.net","sql12601988","7f2VEAbz6F","sql12601988");
						if(mysqli_connect_errno()){
							echo "failed to connect: " . mysqli_connect_errno();
						}
						$res = mysqli_query($con, "SELECT title FROM questions_auth WHERE email = '$loggedin_user_email';");
						$sol_qts = array();
						if(mysqli_num_rows($res)>0){
							foreach(mysqli_fetch_all($res,MYSQLI_ASSOC) as $q){
								array_push($sol_qts,$q['title']);
							}
						}
						mysqli_free_result($res);
						mysqli_close($con);
						foreach($rows as $row) {?>
						<tr>
						<td><?php echo $row['id'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<?php 
						
						if(in_array($row['title'],$sol_qts,true)) { ?>
							<td><i class="fas fa-check-square fa-2x"></i></td>
						<?php } else { ?>
							<td><i class="fa-regular fa-square fa-2x"></td>	
						<?php } ?>
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>&language=python"><img  src="images/python.png" alt="python" style="margin-right:30px" ></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>&language=java"><img  src="images/java.png" alt="java" style="margin-right:30px"></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp" style="margin-right:30px"></a>
							</div>
						</td>	
						</tr>
						<?php } } ?>

				<?php } else { 
					foreach($rows as $row)
					{ ?>
						<tr>
						<td><?php echo $row['id'] ?></td>	
						<td> <?php echo $row['title'] ?></td>	
						<td><?php echo $row['category'] ?></td>	
						<td><i class="fa-regular fa-square fa-2x"></td>	
						<td><?php echo $row['difficulty'] ?></td>			
						<td>
							<div>
								<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>&language=python"><img  src="images/python.png" alt="python" ></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>&language=java"><img  src="images/java.png" alt="java"></a>
                				<a href="SolutionsDisplay.php?title=<?php echo urlencode($row['title']); ?>"><img  src="images/cpp.png" alt="cpp"></a>
							</div>
						</td>	
						</tr>
					<?php } } ?>
		</tbody>
	</table>
	
</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	