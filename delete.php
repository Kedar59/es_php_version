<?php 
include("MySQL.php");
$title = urldecode($_GET['title']);
$res = $mysql->query("DELETE FROM questions1 WHERE title='$title'");
$mysql->close(); 

$title = explode(" ",$title);
$string = '';
foreach($title as $row){
    $string = $string.$row;
}
// test deleting besttimetobuyandsellstockpython.txt
// besttimetobuyandsellstockjava.txt for testing
$py="python.txt";
$java="java.txt";
$directory = "Solutions/";    
if (file_exists($directory . $string . $py)) {
    unlink($directory . $string . $py);
    echo "File deleted successfully.";
} else {
    echo "File not found.";
}
if (file_exists($directory . $string . $java)) {
    unlink($directory . $string . $java);
    echo "File deleted successfully.";
} else {
    echo "File not found.";
}

header("Location: admin_solns.php");
exit();
?>