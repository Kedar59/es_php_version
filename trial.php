<?php
$timezone=date_default_timezone_set("Indian/Maldives");
$con=mysqli_connect("sql12.freemysqlhosting.net","sql12601988","7f2VEAbz6F","sql12601988");
if(mysqli_connect_errno()){
    echo "failed to connect: " . mysqli_connect_errno();
}
?>