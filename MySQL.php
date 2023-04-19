<?php
    $mysql = new mysqli('localhost','root','9820042597','Project');
    if($mysql->errno)
    {
        die("Database connecteion  not succcessful");
    }
?>