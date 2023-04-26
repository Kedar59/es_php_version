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
        $result = $mysql->query("SELECT COUNT(*) FROM user");
    
        // Get the result and store it in a PHP variable
        $totUsers = $result->fetch_array()[0];
        $res = $mysql->query("SELECT id,title,difficulty,category,seen FROM questions1");
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
			<th>Title</th>
			<th>Difficulty</th>
			<th>Category</th>
            <th>Percentage viewed</th>
        </thead>
        <tbody>
            <?php foreach($table_data as $row) { ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['difficulty'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td>
                <?php $seen = intval($row['seen']); 
                      echo round(($seen/$totUsers)*100)."%"; ?>
                <progress id="file" value="<?php echo $seen; ?>" max="<?php echo $totUsers; ?>"></progress>
            </td>
            </tr>
            <?php }  ?> 
        </tbody>
    </table>

</body>
</html>