<?php
    include ("admin_header.php");
    include ("MySQL.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin user dashboard</title>
    <link rel="stylesheet" href="styles/admin_udash.css">
</head>
<body>
    <?php 
        $sql = "SELECT COUNT(*) FROM questions1";
        $result = $mysql->query($sql);
    
        // Get the result and store it in a PHP variable
        $totQts = $result->fetch_array()[0];
        print_r($totQts);
        $res = $mysql->query("SELECT ID,username,email,solved FROM user");
        $table_data = array();
        if($res->num_rows>0){
            foreach(mysqli_fetch_all($res,MYSQLI_ASSOC) as $row){
                array_push($table_data,$row);
            }
        }
        $mysql->close(); 
    ?>
    <table class="content-table">
        <thead>
            <th>Sr. no</th>
			<th>Username</th>
			<th>Email</th>
			<th>Progress</th>
        </thead>
        <tbody>
            <?php foreach($table_data as $row) { ?>
            <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td>
                <?php $solved = intval($row['solved']); 
                      echo round(($solved/$totQts)*100)."%"; ?>
                <progress id="file" value="<?php echo $solved; ?>" max="<?php echo $totQts; ?>">
                    
                </progress>
            </td>
            </tr>
            <?php }  ?> 
        </tbody>
    </table>

</body>
</html>