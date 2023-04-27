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
    <title>Solution maintaince</title>
    <script src="https://kit.fontawesome.com/f91c2540fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/admin_udash.css">
</head>
<body>
    <?php 
        
        $res = $mysql->query("SELECT title,category,difficulty FROM questions1");
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
            <th>Title</th>
			<th>category</th>
			<th>difficulty</th>
			<th>Delete</th>
        </thead>
        <tbody>
            <?php foreach($table_data as $row) { ?>
            <tr>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['difficulty'] ?></td>
            <td><a href="delete.php?title=<?php echo urlencode($row['title']); ?>"><i class="fa-solid fa-trash fa-lg" style="color:white;"></i></a></td>
            </tr>
            <?php }  ?> 
        </tbody>
    </table>

</body>
</html>